@extends('admin-panel.admin-index');

@section('title', 'Редактирование пользователя')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                {!! Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) !!}
                <div class="form-group row">
                    <div class="col-md-3">
                        {{Form::label('name', 'Имя')}}
                    </div>
                    <div class="col-md-9">
                        {{Form::text('name', null, ['class' => 'form-control'])}}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        {{Form::label('email', 'Категория')}}
                    </div>
                    <div class="col-md-9">
                        {{Form::email('email', null, ['class' => 'form-control'])}}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        {{Form::label('password', 'Пароль')}}
                    </div>
                    <div class="col-md-9">
                        {{Form::password('password')}}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        {{Form::label('is_admin', 'Администратор')}}
                    </div>
                    @if($user->is_admin == 1)
                        <div class="col-md-9">
                            <td style="text-align: center">{{Form::checkbox('is_admin', true)}}</td>
                        </div>
                    @else
                        <div class="col-md-9">
                            <td style="text-align: center">{{Form::checkbox('is_admin', false)}}</td>
                        </div>
                    @endif
                </div>
                {{Form::submit('Сохранить изменения', ['class' => 'btn btn-success'])}}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection