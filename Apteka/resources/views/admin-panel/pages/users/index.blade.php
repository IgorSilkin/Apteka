@extends('admin-panel.admin-index');

@section('title', 'Пользователи')

@section('content')
    <div class="container">
        <div class="row">
            <table class="table table-bordered">
                <thead>
                <tr  style="text-align: center">
                    <th scope="col">ID</th>
                    <th scope="col">Email</th>
                    <th scope="col">Пароль</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Роль</th>
                    <th scope="col" style="width: 220px">Управление</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr  style="text-align: center">
                        <th scope="row">{{$user->id}}</th>
                        <td><a href="{{URL::to('admin-panel/users/' . $user->id)}}">{{$user->email}}</a></td>
                        <td>{{$user->password}}</td>
                        <td>{{$user->name}}</td>
                        <td>
                            @if($user->is_admin == 1)
                                {{'ADMIN'}}
                            @else
                                {{'USER'}}
                            @endif
                        </td>
                        <td>
                            <a href="{{URL::to('admin-panel/users/' . $user->id . '/edit')}}" class="btn btn-primary" style="float: left; margin: 0 10px;">Изменить</a>
                            {!! Form::open(['method' => 'DELETE',
                                'route' => ['users.destroy', $user->id]]) !!}
                            {!! Form::submit('Удалить', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="col-md-offset-3">
                <a class="btn btn-success" href="{{URL::to('admin-panel/users/create')}}">Создать пользователя</a>
            </div>
            <div class="col-md-9">
                {{$users->links()}}
            </div>
        </div>
    </div>
@endsection