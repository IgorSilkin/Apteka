@extends('admin-panel.admin-index');

@section('title', 'Категории')

@section('content')
    <div class="container">
        <div class="row">
            <table class="table table-bordered">
                <thead>
                <tr  style="text-align: center">
                    <th scope="col">ID</th>
                    <th scope="col">Название</th>
                    {{--<th scope="col">Количество товаров</th>--}}
                    <th scope="col" style="width: 220px">Управление</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr  style="text-align: center">
                        <th scope="row">{{$category->id}}</th>
                        <td><a href="{{URL::to('admin-panel/categories/' . $category->id)}}">{{$category->title}}</a></td>
                        {{--<td>{{$category->quantity}}</td>--}}
                        <td>
                            <a href="{{URL::to('admin-panel/categories/' . $category->id . '/edit')}}" class="btn btn-primary" style="float: left; margin: 0 10px;">Изменить</a>
                            {!! Form::open(['method' => 'DELETE',
                                'route' => ['categories.destroy', $category->id]]) !!}
                            {!! Form::submit('Удалить', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="col-md-offset-3">
                <a class="btn btn-success" href="{{URL::to('admin-panel/categories/create')}}">Добавить категорию</a>
            </div>
            <div class="col-md-9">
                {{$categories->links()}}
            </div>

        </div>
    </div>
@endsection