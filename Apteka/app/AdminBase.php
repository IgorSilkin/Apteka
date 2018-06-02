<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

abstract class AdminBase extends Model
{
    public static function checkAdmin()
    {
        if (Auth::check()) {
            if (Auth::user()->is_admin == '1') {return true;}
            else{return false;}
        } else{return false;}
    }
}
