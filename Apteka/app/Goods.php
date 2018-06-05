<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    public static function searchGoodsByCategoryID($category){
        return static::where('category', $category)->get();
    }
    public static function searchNewProducts(){
        return static::where('is_new', true)->get();
    }
}
