<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App;
use Auth;

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

    public function items_in_cart()
    {
        return response()->json(App\Cart::countItems());
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

    public function order(){

    }

    public function checkout(Request $request)
    {
        // Получием данные из корзины
        $productsInCart = App\Cart::getProducts();
        foreach ($productsInCart as $product => $count){
            $products[] = array(
                'product' => App\Goods::find($product),
                'count' => $count
            );
        }
        // Если товаров нет, отправляем пользователи искать товары на главную
        if ($productsInCart == false) {
            redirect("/");
        }
        // Список категорий для левого меню
        $categories = App\Categories::all();
        // Находим общую стоимость
        $totalPrice = self::getTotalPrice($products);
        // Количество товаров
        $totalQuantity = App\Cart::countItems();
        // Поля для формы
        $userName = false;
        $userPhone = false;
        $userComment = false;
        // Статус успешного оформления заказа
        $result = false;
        // Проверяем является ли пользователь гостем
        if (Auth::check()) {
            // Если пользователь не гость
            // Получаем информацию о пользователе из БД
            $userId = Auth::user()->id;
            $user = App\User::find($userId);
            $userName = $user['name'];
        } else {
            // Если гость, поля формы останутся пустыми
            $userId = false;
        }
        // Обработка формы

        if (isset($_POST['submit'])) {
            $order = new App\Orders();
            $order->userName = $_POST['name'];
            $order->userPhone = $_POST['phone'];
            $order->userComment = $_POST['comment'];
            // Флаг ошибок
            $errors = false;
            // Валидация полей
            if (!App\User::checkName($userName)) {
                $errors[] = 'Неправильное имя';
            }
            if (!App\User::checkPhone($userPhone)) {
                $errors[] = 'Неправильный телефон';
            }
            if ($errors == false) {
                // Если ошибок нет
                // Сохраняем заказ в базе данных
                //$result = App\Orders::save($userName, $userPhone, $userComment, $userId, $productsInCart);
                $result = $order->save();
                if ($result) {
                    // Если заказ успешно сохранен
                    // Оповещаем администратора о новом заказе по почте
                    $adminEmail = 'i.silkin32rus@mail.ru';
                    $message = '<a href="http://digital-mafia.net/admin/orders">Список заказов</a>';
                    $subject = 'Новый заказ!';
                    mail($adminEmail, $subject, $message);
                    // Очищаем корзину
                    App\Cart::clear();
                }
            }
        }
        // Подключаем вид
        return view('cart.checkout', compact('categories', 'result', 'totalQuantity', 'totalPrice', 'errors', 'userName', 'userComment', 'userPhone'));
    }
}
