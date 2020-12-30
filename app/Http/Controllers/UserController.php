<?php

namespace App\Http\Controllers;

use App\AppClass;
use App\Purchase;
use Illuminate\Http\Request;
use App\User;
use App\Customer;
use Illuminate\Database\Eloquent\Collection;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function logout(){
        Auth::logout();
        session()->flush();
        return redirect(route('home'));
    }

    public function appList($id)
    {
        $user = User::find($id);
        if ($user->hasRole('dev')) {
            $apps = $user->developer->apps()->paginate(10);
            $title = 'Mis Apps';
            $vac = compact('apps', 'title');
        } else {
            $customer = Customer::where("user_id", "=", "$id")->first();
            $purchases = Purchase::where("customer_id", "=", "$customer->id")->get();
            $apps = AppClass::select('apps.*')->join('purchases', 'apps.id', '=', 'purchases.app_id')->where("customer_id", "=", "$customer->id")->paginate(10);
            $title = 'Mis Apps';
            $vac = compact('apps', 'title');
        }
        return view('pages.appsList', $vac);

    }
}
