@extends('layout')
@section('left-sidebar')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Каталог</h2>
                    <div class="panel-group category-products">
                        @foreach ($categories as $categoryItem)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <ul class="panel-title">
                                        <li>
                                            <a href="/category/{{$categoryItem['abb']}}">{{$categoryItem['title']}}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endsection


            @section('content')
                <div class="col-md-9 pull-right">
                    <h2 class="title text-center">Корзина</h2>
                    @if ($result)
                        <p>Заказ оформлен. Ожидайте звонка менеджера.</p>
                    @elseif(!$result)
                        <div class="col-md-12">
                            <p>Выбрано товаров: {{$totalQuantity}} на сумму: {{$totalPrice}} руб.</p><br/>
                            @if (isset($errors) && is_array($errors))
                                <ul>
                                    @foreach ($errors as $error)
                                    <li> -  {{$error}}</li>
                                    @endforeach
                                </ul>
                            @endif
                            <p>Для оформления заказа заполните форму. Наш менеджер свяжется с Вами.</p>
                            <div class="login-form">
                                <form method="post">
                                    <p>Ваше имя</p>
                                    <input type="text" name="name" placeholder="" value="{{$userName}}"/>

                                    <p>Номер телефона</p>
                                    <input type="text" name="phone" placeholder="" value="{{$userPhone}}"/>

                                    <p>Комментарий к заказу</p>
                                    <input type="text" name="comment" placeholder="Сообщение" value="{{$userComment}}"/>

                                    <br/>
                                    <br/>
                                    <input type="submit" name="submit" class="btn btn-success" value="Оформить" />
                                </form>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
