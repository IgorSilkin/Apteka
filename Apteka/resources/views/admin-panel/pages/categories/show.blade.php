@extends('admin-panel.admin-index');

@section('title', 'Просмотр категории')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                {!! Form::open(['route' => 'categories.index']) !!}
                <div class="form-group row">
                    <div class="col-md-3">
                        {{Form::label('title', 'Название:')}}
                    </div>
                    <div class="col-md-9">
                        {{Form::label('title', $category->title)}}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        {{Form::label('abb', 'Аббревиатура:')}}
                    </div>
                    <div class="col-md-9">
                        {{Form::label('abb', $category->abb)}}
                    </div>
                </div>
                <a href="{{URL::to('admin-panel/categories/')}}" class="btn btn-success">Вернуться к списку категорий</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection