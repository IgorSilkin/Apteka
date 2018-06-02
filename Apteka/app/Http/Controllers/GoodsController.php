<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class GoodsController extends Controller
{
    public function index(){
        $goods = App\Goods::all();
        return view('goods.index', compact('goods'));
    }

    public function show($id){
        $product = App\Goods::find($id);
        $categories = App\Categories::all();
        return view('goods.show', compact('product', 'categories'));
    }

    public function searchGoodsByCategoryID($category){
        $goods = App\Goods::searchGoodsByCategoryID($category);
        $categories = App\Categories::all();
        return view('goods.index', compact('goods', 'categories'));
    }
}
