<?php

namespace App\Http\Controllers\Administrator;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function adminhome(){

    	return view('administrator.adminhome');


    }


    public function login(){


    	return view('administrator.login');


    }
}
