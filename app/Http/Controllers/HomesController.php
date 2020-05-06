<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomesController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function index(){
        if (is_null(auth()->user()->id)) {
            return view('home');
        }
    	return view('home');
    }
}
