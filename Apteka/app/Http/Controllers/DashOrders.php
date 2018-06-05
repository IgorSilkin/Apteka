<?php

namespace App\Http\Controllers;

use App\Orders;
use Illuminate\Http\Request;

class DashOrders extends Controller
{

    public function index()
    {
        $orders = Orders::orderby('id', 'asc')->paginate(10);
        return view('admin-panel.pages.orders.index', compact('orders'));
    }

    public function create()
    {
        return view('admin-panel.pages.orders.create');
    }

    public function store(Request $request)
    {
        $order = new Orders();

        $order->userName = $request->userName;
        $order->userPhone = $request->userPhone;
        $order->userComment = $request->userComment;
        $order->user_id = $request->user_id;
        $order->products = $request->products;
        $order->status = $request->status;

        $order->save();

        $request->session()->flash('success', 'Заказ успешно добавлен в базу данных!');


        return redirect()->route('orders.show', $order->id);
    }

    public function show($id)
    {
        $order = Orders::find($id);
        return view('admin-panel.pages.orders.show', compact('order'));
    }

    public function edit($id)
    {
        $order = Orders::find($id);
        return view('admin-panel.pages.orders.edit', compact('order'));

    }

    public function update(Request $request, $id)
    {
        $order = Orders::find($id);

        $order->userName = $request->userName;
        $order->userPhone = $request->userPhone;
        $order->userComment = $request->userComment;
        $order->user_id = $request->user_id;
        $order->products = $request->products;
        $order->status = $request->status;

        $order->save();
        $request->session()->flash('success', 'Информация о заказе успешно отредактирована!');

        return redirect()->route('orders.show', $order->id);
    }

    public function destroy($id)
    {
        $order = Orders::find($id);
        if ($order != null) {
            $order->delete();
            return redirect()->route('orders.index');
        }
        return view('admin-panel.pages.index');
    }
}
