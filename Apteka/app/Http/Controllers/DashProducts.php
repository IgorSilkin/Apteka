<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Goods;
use App\Categories;

class DashProducts extends Controller
{
    public function index()
    {
        $products = Goods::orderby('id', 'asc')->paginate(10);
        return view('admin-panel.pages.products.index')->withProducts($products);
    }

    public function create()
    {
        $categories = Categories::all();
        foreach ($categories as $category){
            $array[$category->id] = $category->title;
        }
        return view('admin-panel.pages.products.create')->withArray($array);
    }

    public function store(Request $request)
    {
        $product = new Goods();

        $product->title = $request->title;
        $product->category = Categories::find($request->category)->abb;
        $product->price = $request->price;
        $product->intro = $request->intro;
        $product->body = $request->body;
        $product->composition = $request->composition;
        if($request->recipe == 'on'){
            $product->recipe = true;
        }
        if($request->is_new == 'on'){
            $product->is_new = true;
        }
        if($request->availability == 'on'){
            $product->availability = true;
        }

        $product->save();

        $request->session()->flash('success', 'Товар успешно добавлен в базу данных!');


        return redirect()->route('products.show', $product->id);
    }

    public function show($id)
    {
        $product = Goods::find($id);
        $category = Categories::where("abb" , "$product->category")->get();
        if($category != null){
            $product_category = $category[0]->title;
        }
        return view('admin-panel.pages.products.show', compact('product', 'product_category'));
    }

    public function edit($id)
    {
        $product = Goods::find($id);
        $categories = Categories::all();
        foreach ($categories as $category){
            $category_array[$category->id] = $category->title;
        }
        return view('admin-panel.pages.products.edit', compact('product', 'category_array'));
    }

    public function update(Request $request, $id)
    {
        $product = Goods::find($id);

        $product->title = $request->title;
        $product->category = Categories::find($request->category)->abb;
        $product->price = $request->price;
        $product->intro = $request->intro;
        $product->body = $request->body;
        $product->composition = $request->composition;
        if($request->recipe == 'on'){
            $product->recipe = true;
        }
        if($request->is_new == 'on'){
            $product->is_new = true;
        }
        if($request->availability == 'on'){
            $product->availability = true;
        }

        $product->save();

        $request->session()->flash('success', 'Информация о товаре успешно отредактирована!');

        return redirect()->route('products.show', $product->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Goods::find($id);
        if ($product != null) {
            $product->delete();
            return redirect()->route('products.index');
        }
        return view('admin-panel.pages.index');
    }
}
