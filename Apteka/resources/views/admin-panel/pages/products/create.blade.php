@extends('admin-panel.admin-index');

@section('title', 'Добавление товара')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                {!! Form::open(['route' => 'products.store']) !!}
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
                        {{Form::label('category', 'Категория')}}
                    </div>
                    <div class="col-md-9">
                        {{Form::select('category', $array, null)}}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        {{Form::label('price', 'Цена')}}
                    </div>
                    <div class="col-md-2">
                        {{Form::number('price', null, ['class' => 'form-control'])}}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        {{Form::label('intro', 'Краткое описание')}}
                    </div>
                    <div class="col-md-9">
                        {{Form::text('intro', null, ['class' => 'form-control'])}}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        {{Form::label('body', 'Подробное описание')}}
                    </div>
                    <div class="col-md-9">
                        {{Form::textarea('body', null, ['class' => 'form-control'])}}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        {{Form::label('composition', 'Состав')}}
                    </div>
                    <div class="col-md-9">
                        {{Form::textarea('composition', null, ['class' => 'form-control'])}}
                    </div>
                </div>


                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th scope="row">{{Form::label('recipe', 'Рецепт')}}</th>
                            <td style="text-align: center">{{Form::checkbox('recipe', null,  false)}}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{Form::label('is_new', 'Новинка')}}</th>
                            <td style="text-align: center">{{Form::checkbox('is_new', null,  false)}}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{Form::label('availability', 'В продаже')}}</th>
                            <td style="text-align: center">{{Form::checkbox('availability', null,  false)}}</td>
                        </tr>
                    </tbody>
                </table>
                {{Form::submit('Добавить товар', ['class' => 'btn btn-success'])}}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection