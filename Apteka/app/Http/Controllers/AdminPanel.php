<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminPanel extends Controller
{
    public function index()
    {
        if(self::checkAdmin() == true){
            return view('admin-panel.pages.index');
        }
        else{
            return redirect('/');
        }
    }

    public function categories()
    {
        if(self::checkAdmin() == true){
            return redirect()->route('categories.index');
        }
        else{
            return redirect('/');
        }
    }

    public function products()
    {
        if(self::checkAdmin() == true){
            return redirect()->route('products.index');
        }
        else{
            return redirect('/');
        }
    }

    public function posts()
    {
        if(self::checkAdmin() == true){
            return redirect()->route('posts.index');
        }
        else{
            return redirect('/');
        }
    }

    public function orders()
    {
        if(self::checkAdmin() == true){
            return redirect()->route('orders.index');
        }
        else{
            return redirect('/');
        }
    }

    public function users()
    {
        if(self::checkAdmin() == true){
            return redirect()->route('users.index');
        }
        else{
            return redirect('/');
        }
    }
    public static function checkAdmin()
    {
        if (Auth::check()) {
            if (Auth::user()->is_admin == '1') {return true;}
            else{return false;}
        } else{return false;}
    }
}
