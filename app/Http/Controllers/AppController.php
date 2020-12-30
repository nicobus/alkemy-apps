<?php

namespace App\Http\Controllers;

use App\AppClass;
use App\Price;
use App\Http\Requests\AppRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $apps = AppClass::byCreationDateDesc()->paginate(10);
        $title = 'Todas las Apps';
        $vac = compact('apps', 'title');
        return view('pages.appsList', $vac);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $appl = new AppClass();
        $title = 'Agregar App';
        $vac = compact('appl', 'title');
        return view('pages.appCreate', $vac);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AppRequest $req)
    {
       
        $image = null;
        if ($req['image'] != null) {
             $image = basename($req->file("image")->store("public"));
        }
        
        $appl = new AppClass();
        $appl->image_path = $image;
        $appl->developer_id = Auth::user()->id;
        $appl->name = $req['name'];
        $appl->category_id = $req['category_id'];
        $appl->save();
        $price = new Price();
        $price->value = $req['price'];
        $price->app_id = $appl->id;
        $price->save();
        
        
        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AppClass  $app
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $appl = AppClass::find($id);
        $prices = Price::lastPriceForApp($id)->take(1)->get();
        foreach ($prices as $price) {
            $currentPrice = $price;
        }
        
        $title = 'App Detail';
        $vac = compact('appl', 'currentPrice', 'title');
        return view('pages.appDetail', $vac);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AppClass  $app
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $appl = AppClass::find($id);
        $prices = Price::lastPriceForApp($id)->take(1)->get();
        foreach ($prices as $price) {
            $currentPrice = $price;
        }
        $title = 'Editar App';
        $vac = compact('appl', 'title', 'currentPrice');
        return view('pages.appEdit', $vac);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AppClass  $app
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $image = null;
        if ($req['image'] != null) {
             $image = basename($req->file("image")->store("public"));
        }
        
        $appl = AppClass::find($id);
        $appl->image_path = $image;
        $appl->save();
        $price = new Price();
        $price->value = $req['price'];
        $price->app_id = $appl->id;
        
        $price->save();
        return redirect(route('apps'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AppClass  $app
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req)
    {
        $app = AppClass::find($req['app_id']);
        $app->delete();
        return redirect(route('apps'));
    }

    public function indexByCategory($category)
    {
        $apps = AppClass::byCategory($category)->paginate(10);
        $title = $category;
        $vac = compact('apps', 'title');
        return view('pages.appsList', $vac);

    }
}
