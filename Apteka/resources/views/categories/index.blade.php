@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center"></h2>

                    @foreach ($categories as $category)
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <a href="/category/{{$category['abb']}}"><img src="../template/images/home/paracet.jpg" alt="">
                                        <h3>{{$category['title']}}</h3></a>
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