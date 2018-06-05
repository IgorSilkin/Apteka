@extends('admin-panel.admin-index');

@section('title', 'Редактирование товара')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                {!! Form::model($order, array('route' => array('orders.update', $order->id), 'method' => 'PUT')) !!}
                <div class="form-group row">
                    <div class="col-md-3">
                        {{Form::label('userName', 'Имя пользователя')}}
                    </div>
                    <div class="col-md-9">
                        {{Form::text('userName', null, ['class' => 'form-control'])}}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        {{Form::label('userPhone', 'Телефон')}}
                    </div>
                    <div class="col-md-9">
                        {{Form::text('userPhone', null, ['class' => 'form-control'])}}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        {{Form::label('userComment', 'Комментарий')}}
                    </div>
                    <div class="col-md-9">
                        {{Form::text('userComment', null, ['class' => 'form-control'])}}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        {{Form::label('user_id', 'ID пользователя')}}
                    </div>
                    <div class="col-md-9">
                        {{Form::text('user_id', null, ['class' => 'form-control'])}}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        {{Form::label('products', 'Товары')}}
                    </div>
                    <div class="col-md-9">
                        {{Form::text('products', null, ['class' => 'form-control'])}}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        {{Form::label('status', 'Статус')}}
                    </div>
                    <div class="col-md-9">
                        {{Form::text('status', null, ['class' => 'form-control'])}}
                    </div>
                </div>

                {{Form::submit('Сохранить изменения', ['class' => 'btn btn-success'])}}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection