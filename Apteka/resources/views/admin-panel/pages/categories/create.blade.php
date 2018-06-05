@extends('admin-panel.admin-index');

@section('title', 'Добавление категории')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                {!! Form::open(['route' => 'categories.store']) !!}
                <div class="form-group row">
                    <div class="col-md-3">
                        {{Form::label('title', 'Название')}}
                    </div>
                    <div class="col-md-9">
                        {{Form::text('title', null, ['class' => 'form-control'])}}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        {{Form::label('abb', 'Аббревиатура')}}
                    </div>
                    <div class="col-md-9">
                        {{Form::text('abb', null, ['class' => 'form-control'])}}
                    </div>
                </div>
                {{Form::submit('Добавить категорию', ['class' => 'btn btn-success'])}}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection