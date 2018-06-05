<?php

namespace App\Http\Controllers;

use App\Goods;
use Illuminate\Http\Request;
use App\Categories;

class DashCategories extends Controller
{

    public function index()
    {
        $categories = Categories::orderby('id', 'asc')->paginate(10);
//        $products = Goods::all();
//
//        foreach ($categories as $category){
//            $quantity[$category->id] = 0;
//        }
//        foreach ($products as $product){
//            $quantity[$product->category] = $quantity[$product->category] + 1;
//        }
//        $i = 0;
//        foreach ($quantity as $q){
//            $categories[$i]->quantity += $q;
//            $i++;
//        }


        return view('admin-panel.pages.categories.index')->withCategories($categories);
    }

    public function create()
    {
        return view('admin-panel.pages.categories.create');
    }

    public function store(Request $request)
    {
        $category = new Categories();

        $category->title = $request->title;
        $category->abb = $request->abb;

        $category->save();

        $request->session()->flash('success', 'Категория успешно добавлена в базу данных!');


        return redirect()->route('categories.show', $category->id);
    }

    public function show($id)
    {
        $category = Categories::find($id);
        return view('admin-panel.pages.categories.show')->withCategory($category);
    }


    public function edit($id)
    {
        $category = Categories::find($id);
        return view('admin-panel.pages.categories.edit')->withCategory($category);
    }

    public function update(Request $request, $id)
    {
        $category = Categories::find($id);

        $category->title = $request->title;
        $category->abb = $request->abb;

        $category->save();

        $request->session()->flash('success', 'Информация о категории успешно отредактирована!');

        return redirect()->route('categories.show', $category->id);
    }

    public function destroy($id)
    {
        $category = Categories::find($id);
        if ($category != null) {
            $category->delete();
            return redirect()->route('categories.index');
        }
        return view('admin-panel.pages.index');
    }
}
