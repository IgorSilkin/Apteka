@extends('admin-panel.admin-index');

@section('title', 'Редактирование товара')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                {!! Form::model($category, array('route' => array('categories.update', $category->id), 'method' => 'PUT')) !!}
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
                {{Form::submit('Сохранить изменения', ['class' => 'btn btn-success'])}}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection