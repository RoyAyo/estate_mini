<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use HomeOwnerDetails;
use Session;

class HomeOwnersController extends Controller
{
    public function __construct(){

    }

    public function lease(){
    	return view('pages.lease');
    }

    public function submitlease(Request $request){
    	$this->verify($request,[
    		'proof_of_ownership' => 'required|file',
    		'diligence_report' => 'required|file',
    		'offerings' => 'required'
    	]);

    	$user_id = auth()->user()->id;

    	HomeOwnerDetails::create([
    		'user_id' => $user_id,
    		'p.o.w' => $request->proof_of_ownership,
    		'offer' => $request->offerings,
    		'diligence_report' => $request->diligence_report
    	]);

    	Session::flash('home_owner_details','Your files are successfully uploaded');

    	return redirect()->back();
    }
}
