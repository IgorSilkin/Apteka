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
                <div class="col-sm-9 pull-right">
                    <h2 class="title text-center">Корзина</h2>

                    <div class="features_items" id="cart-table">
                        @if ($products)
                            @include('cart.table')



                        </div>
                        @else
                            <p>Корзина пуста</p>
                            <a class="btn btn-default checkout" href="/"><i class="fa fa-shopping-cart"></i> Вернуться к покупкам</a>
                        @endif


                </div>
        </div>
    </div>

@endsection