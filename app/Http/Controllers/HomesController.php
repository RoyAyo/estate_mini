<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomesController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function index(){
    	return view('home');
    }

    public function dashboard(){
    	$user_type = auth()->user()->user_type;
    	if ($user_type == 1) {
    		return view('dashboards.admin');
    	}elseif ($user_type == 2) {
    		return view('dashboards.owner');
    	}else{
    		return view('dashboards.investor')
    	}
    }
}
