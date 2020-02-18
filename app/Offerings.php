<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offerings extends Model
{
    protected $fillable = [
    	'user_id','estate_id','offer_price','no_of_tokens','approved'
    ]; 

    public function estate(){
    	return $this->belongsTo('App\Estate');
    }
}
