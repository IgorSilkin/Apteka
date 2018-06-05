@extends('admin-panel.admin-index');

@section('title', 'Просмотр товара')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                {!! Form::open(['route' => 'products.index']) !!}
                <div class="form-group row">
                    <div class="col-md-3">
                        {{Form::label('title', 'Название:')}}
                    </div>
                    <div class="col-md-9">
                        {{Form::label('title', $product->title)}}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        {{Form::label('price', 'Цена:')}}
                    </div>
                    <div class="col-md-9">
                        {{Form::label('title', $product->price . ' руб.')}}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        {{Form::label('category', 'Категория:')}}
                    </div>
                    <div class="col-md-9">
                        {{Form::label('category', $product_category, null)}}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        {{Form::label('intro', 'Краткое описание:')}}
                    </div>
                    <div class="col-md-9">
                        {{Form::label('intro', $product->intro)}}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        {{Form::label('body', 'Подробное описание:')}}
                    </div>
                    <div class="col-md-9">
                        {{Form::label('body', $product->body)}}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        {{Form::label('composition', 'Состав:')}}
                    </div>
                    <div class="col-md-9">
                        {{Form::label('composition',$product->composition)}}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        {{Form::label('recipe', 'Рецепт:')}}
                    </div>
                    <div class="col-md-9">
                        @if($product->recipe == 1)
                            {{Form::label('recipe', 'По рецепту')}}
                        @else
                            {{Form::label('recipe', 'Без рецепта')}}
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        {{Form::label('is_new', 'Новинка:')}}
                    </div>
                    <div class="col-md-9">
                        @if($product->is_new == 1)
                            {{Form::label('is_new', 'Да')}}
                        @else
                            {{Form::label('is_new', 'Нет')}}
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        {{Form::label('availability', 'Доступ:')}}
                    </div>
                    <div class="col-md-9">
                        @if($product->availability == 1)
                            {{Form::label('availability', 'В продаже')}}
                        @else
                            {{Form::label('availability', 'Нет в наличии')}}
                        @endif
                    </div>
                </div>
                <a href="{{URL::to('admin-panel/products/')}}" class="btn btn-success">Вернуться к товарам</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection