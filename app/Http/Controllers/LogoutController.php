<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function index(Request $req){
    	
    	//session('age', null);
    	$req->session()->flush();
    	//$cookie = Cookie::forget('mycookie');

    	return redirect()->route('index');//->withCookie($cookie);
    }
}
