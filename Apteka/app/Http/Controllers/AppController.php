<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class AppController extends Controller
{
    public function index(){
        $categories = App\Categories::all();
        $products = App\Goods::all();
        $is_new_products = App\Goods::searchNewProducts();
        return view('index', compact('categories', 'products', 'is_new_products'));
    }

    public function about(){
        return view('about');
    }
}
