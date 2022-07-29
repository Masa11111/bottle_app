<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bottle extends Model
{
    protected $guarded = array('id'); 

    public static $rules = array(
        'bottle_name' => 'required',
        'customer_name' => 'required',
    );

}
