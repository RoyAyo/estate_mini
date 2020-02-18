<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estate extends Model
{
    protected $fillable = [
    	'estate_name','initial_value','tokens','current_value'
    ]; 
}
