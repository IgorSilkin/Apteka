@extends('admin-panel.admin-index');

@section('title', 'Просмотр пользователя')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                {!! Form::open(['route' => 'users.index']) !!}
                <div class="form-group row">
                    <div class="col-md-3">
                        {{Form::label('name', 'Имя:')}}
                    </div>
                    <div class="col-md-9">
                        {{Form::label('name', $user->name, ['class' => 'form-control'])}}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        {{Form::label('email', 'Email:')}}
                    </div>
                    <div class="col-md-9">
                        {{Form::label('email', $user->email, ['class' => 'form-control'])}}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        {{Form::label('password', 'Пароль:')}}
                    </div>
                    <div class="col-md-9">
                        {{Form::label('password', $user->password, ['class' => 'form-control'])}}
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-3">
                        {{Form::label('is_admin', 'Администратор:')}}
                    </div>
                    <div class="col-md-9">
                        @if($user->is_admin == 1)
                            {{Form::label('is_admin', 'Администратор')}}
                        @else
                            {{Form::label('is_admin', 'Пользователь')}}
                        @endif
                    </div>
                </div>

                <a href="{{URL::to('admin-panel/users/')}}" class="btn btn-success">Вернуться к списку пользователей</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection