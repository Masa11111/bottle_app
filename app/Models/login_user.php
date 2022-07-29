<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class login_user extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
        'user_name' => 'required',
        'email' => 'email',
        'password' => 'required',
    );
}
