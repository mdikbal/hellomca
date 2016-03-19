<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProductController extends Controller
{
    

	public function products(){

		return view('frontend/products');

	}

	public function productdetails(){

		return view('frontend/productsdetails');

	}




}
