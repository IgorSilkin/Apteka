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
        $category_abb = App\Categories::where('abb', $product->category)->get();
        if($category_abb != null){
            $cat_title = $category_abb[0]->title;
        }
        $categories = App\Categories::all();
        return view('goods.show', compact('product', 'categories', 'cat_title'));
    }

    public function searchGoodsByCategoryID($category){
        $goods = App\Goods::searchGoodsByCategoryID($category);
        $categories = App\Categories::all();
        return view('goods.index', compact('goods', 'categories'));
    }
}
