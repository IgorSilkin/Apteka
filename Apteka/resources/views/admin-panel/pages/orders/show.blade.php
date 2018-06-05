@extends('admin-panel.admin-index');

@section('title', 'Просмотр категории')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                {!! Form::open(['route' => 'orders.index']) !!}
                <div class="form-group row">
                    <div class="col-md-3">
                        {{Form::label('userName', 'Имя пользователя:')}}
                    </div>
                    <div class="col-md-9">
                        {{Form::label('userName', $order->userName)}}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        {{Form::label('userPhone', 'Телефон:')}}
                    </div>
                    <div class="col-md-9">
                        {{Form::label('userPhone', $order->userPhone)}}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        {{Form::label('userComment', 'Комментарий:')}}
                    </div>
                    <div class="col-md-9">
                        {{Form::label('userComment', $order->userComment)}}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        {{Form::label('user_id', 'ID пользователя:')}}
                    </div>
                    <div class="col-md-9">
                        {{Form::label('user_id', $order->user_id)}}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        {{Form::label('products', 'Товары:')}}
                    </div>
                    <div class="col-md-9">
                        {{Form::label('products', $order->products)}}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        {{Form::label('status', 'Статус:')}}
                    </div>
                    <div class="col-md-9">
                        {{Form::label('status', $order->status)}}
                    </div>
                </div>
                <a href="{{URL::to('admin-panel/orders/')}}" class="btn btn-success">Вернуться к списку заказов</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection