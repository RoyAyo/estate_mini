<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    protected $fillable = [
    	'user_id','quest1','quest2','quest3','quest4','quest5'
    ];

    public function User(){
    	return $this->belongsTo('App\User');
    }
}
