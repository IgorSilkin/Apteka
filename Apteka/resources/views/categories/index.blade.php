@extends('layout')

@section('content')
    <ul>
        @foreach($categories as $category)
            <a href="/categories/{{$category->id}}"><li>{{$category->title}}</li></a>
        @endforeach
    </ul>

@endsection