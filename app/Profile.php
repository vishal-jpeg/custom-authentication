<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $fillable=['profile_email','phone_number','address','state','pincode'];
}
