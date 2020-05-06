<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatchmakingController extends Controller
{
    //
    public function mse($a,$b){
    	//a is a list
    	//b is a list
    	$total_error = 0;
    	for ($i=0; $i < 10; $i++) { 
    		$sub = abs($a[i] - $b[i]);
    		$total_error += $sub;
    	}

    	return $total_error;
    }

    // public function (){

    // }

}
