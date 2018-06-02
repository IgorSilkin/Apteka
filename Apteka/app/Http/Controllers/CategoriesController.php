<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class CategoriesController extends Controller
{
    public function index(){
        $categories = App\Categories::all();
        return view('categories.index', compact('categories'));
    }

    public function show($category){
        $products = App\Goods::searchGoodsByCategoryID($category);
        $categories = App\Categories::all();
        return view('categories.show', compact('products', 'categories'));
    }

}
