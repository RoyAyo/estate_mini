<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function aim(){
    	return view('auth.aim');
    }

    public function postaim(Request $request){
    	$type = $request->type;

    	$user = User::find(auth()->user()->id);

    	$user->user_type = $type;

    	$user->save();

    	return redirect()->route('home');
    }
}
