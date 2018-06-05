@extends('admin-panel.admin-index');

@section('title', 'Товары')

@section('content')
    <div class="container">
        <div class="row">
            <table class="table table-bordered">
                <thead>
                <tr  style="text-align: center">
                    <th scope="col">ID</th>
                    <th scope="col">Название</th>
                    <th scope="col">Категория</th>
                    <th scope="col">Цена</th>
                    <th scope="col">Описание</th>
                    <th scope="col">Рецепт</th>
                    <th scope="col">Новинка</th>
                    <th scope="col">Наличие</th>
                    <th scope="col" style="width: 220px">Управление</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr  style="text-align: center">
                        <th scope="row">{{$product->id}}</th>
                        <td><a href="{{URL::to('admin-panel/products/' . $product->id)}}">{{$product->title}}</a></td>
                        <td>{{$product->category}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->body}}</td>
                        <td>
                            @if($product->recipe == 1)
                                {{'Да'}}
                            @else
                                {{'Нет'}}
                            @endif
                        </td>
                        <td>
                            @if($product->is_new == 1)
                                {{'Да'}}
                            @else
                                {{'Нет'}}
                            @endif
                        </td>
                        <td>
                            @if($product->availability == 1)
                                {{'Да'}}
                            @else
                                {{'Нет'}}
                            @endif
                        </td>
                        <td>
                            <a href="{{URL::to('admin-panel/products/' . $product->id . '/edit')}}" class="btn btn-primary" style="float: left; margin: 0 10px;">Изменить</a>
                            {!! Form::open(['method' => 'DELETE',
                                'route' => ['products.destroy', $product->id]]) !!}
                            {!! Form::submit('Удалить', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="col-md-offset-3">
                <a class="btn btn-success" href="{{URL::to('admin-panel/products/create')}}">Добавить товар</a>
            </div>
            <div class="col-md-9">
                {{$products->links()}}
            </div>
        </div>
    </div>
@endsection