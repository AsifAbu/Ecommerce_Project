<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

		return view('indexAsif');
	}
	public function restaurantshowdetail(){
		return view('restaurant.restaurantshowdetail');
	}
	public function restaurantshow(){
		return view('restaurant.restaurantshow');
	}
	public function cart(){
		return view('cart');
	}
	public function search(){
		return view('search');
	}
}
