<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $categories = App\Categories::all();
        $products = array();
        $totalPrice = 0;
        if(session()->has('products')){
            $productsInCart = App\Cart::getProducts();
            foreach ($productsInCart as $product => $count){
                $products[] = array(
                    'product' => App\Goods::find($product),
                    'count' => $count
                );
            }
            $totalPrice = self::getTotalPrice($products);
        }
        return view('cart.cart', compact('products', 'categories',  'totalPrice'));
    }

    public function addAjax(Request $request)
    {
        $id = $request->input('id');
        $items_in_cart = App\Cart::addProduct($id);
        return response()->json($items_in_cart);
    }

    public static function getTotalPrice($products)
    {
        $total = 0;
        if ($products) {

            foreach ($products as $item) {
                // Находим общую стоимость: цена товара * количество товара
                $total += $item['product']['price'] * $item['count'];
            }
        }
        return $total;
    }

    public static function clear()
    {
        if (session()->has('products')) {
           session()->remove('products');
        }
        $referrer = $_SERVER['HTTP_REFERER'];
        return redirect("$referrer");
    }

    public static function deleteProduct(Request $request)
    {
        $id = $request->input('id');
        $products = array();
        $totalPrice = 0;
        if(session()->has('products')) {
            $productsInCart = App\Cart::getProducts();
            unset($productsInCart[$id]);
            session(['products' => $productsInCart]);
            foreach ($productsInCart as $product => $count){
                $products[] = array(
                    'product' => App\Goods::find($product),
                    'count' => $count
                );
            }
            $totalPrice = self::getTotalPrice($products);
        }

        return view('cart.table', compact('products',  'totalPrice'));
    }
}
