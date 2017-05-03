<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use  App\APIController;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin');
    }
    
    public function show_vender(Request $reques )
    {
        $countries = new \App\Http\Controllers\APIController();
        $countries = $countries->getCountries();
        return view('add_vender', compact('countries'));
    }
    
    
}
