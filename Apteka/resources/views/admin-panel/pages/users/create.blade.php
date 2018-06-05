@extends('admin-panel.admin-index');

@section('title', 'Добавление пользователя')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                {!! Form::open(['route' => 'users.store']) !!}
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
                        {{Form::label('email', 'Email')}}
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

                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th scope="row">{{Form::label('is_admin', 'Администратор')}}</th>
                            <td style="text-align: center">{{Form::checkbox('is_admin', null,  false)}}</td>
                        </tr>
                    </tbody>
                </table>
                {{Form::submit('Добавить пользователя', ['class' => 'btn btn-success'])}}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection