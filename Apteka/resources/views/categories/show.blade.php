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
                                            <a href="/category/{{$categoryItem['id']}}">
                                                {{$categoryItem['title']}}
                                            </a>
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
    <div class="col-sm-9 padding-right">
        <div class="features_items"><!--features_items-->
            <h2 class="title text-center"></h2>

            @foreach ($products as $product)
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="../template/images/home/paracet.jpg" alt="">
                                <h3><a href="/product/{{$product['id']}}">{{$product['title']}}</a></h3>
                                <h2>{{$product['price']}} Pуб</h2>
                                <h3><a class="btn btn-default add-to-cart" data-id="{{$product['id']}}" href="#">В корзину</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div><!--features_items-->
    </div>
    </div>
    </div>

@endsection
