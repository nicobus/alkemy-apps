<?php

namespace App\Http\Controllers;

use App\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
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
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(Purchase $purchase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Purchase $purchase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purchase $purchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchase $purchase)
    {
        //
    }

    public function buyAppApi(){

        $datos = json_decode(file_get_contents('php://input'), true);
        $app_id = $datos['purchase']['app_id'];
        $customer_id = $datos['purchase']['customer_id'];
        $purchase = new Purchase();
        $purchase->customer_id = $customer_id;
        $purchase->app_id = $app_id;
        $purchase->save();
        print_r($datos);
       
        
    }

   
}
