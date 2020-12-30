<?php

namespace App\Http\Controllers;

use App\AppClass;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   /*  public function __construct()
    {
        $this->middleware('auth');
    } */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $apps = AppClass::byCreationDateDesc()->paginate(10);
        $vac = compact('apps');
        return view('pages.home', $vac);
    }
}
