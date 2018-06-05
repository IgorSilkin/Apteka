@extends('admin-panel.admin-index');

@section('title', 'Категории')

@section('content')
    <div class="container">
        <div class="row">
            <table class="table table-bordered">
                <thead>
                <tr  style="text-align: center">
                    <th scope="col">ID</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Телефон</th>
                    <th scope="col">Комментарий</th>
                    <th scope="col">ID пользователя</th>
                    <th scope="col">Товары</th>
                    <th scope="col">Статус</th>
                    {{--<th scope="col">Количество товаров</th>--}}
                    <th scope="col" style="width: 220px">Управление</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr  style="text-align: center">
                        <td><a href="{{URL::to('admin-panel/orders/' . $order->id)}}">{{$order->id}}</a></td>
                        <th scope="row">{{$order->userName}}</th>
                        <th scope="row">{{$order->userPhone}}</th>
                        <th scope="row">{{$order->userComment}}</th>
                        <th scope="row">{{$order->user_id}}</th>
                        <th scope="row">{{$order->products}}</th>
                        <th scope="row">{{$order->status}}</th>
                        {{--<td>{{$category->quantity}}</td>--}}
                        <td>
                            <a href="{{URL::to('admin-panel/orders/' . $order->id . '/edit')}}" class="btn btn-primary" style="float: left; margin: 0 10px;">Изменить</a>
                            {!! Form::open(['method' => 'DELETE',
                                'route' => ['orders.destroy', $order->id]]) !!}
                            {!! Form::submit('Удалить', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="col-md-offset-3">
                <a class="btn btn-success" href="{{URL::to('admin-panel/orders/create')}}">Добавить заказ</a>
            </div>
            <div class="col-md-9">
                {{$orders->links()}}
            </div>

        </div>
    </div>
@endsection