@extends('layout')

@section('content')
    <ul>
        @foreach($goods as $good)
            <img src="../template/images/home/paracet.jpg" alt="">
            <a href="/goods/{{$good->id}}"><li>{{$good->title}}</li></a>
        @endforeach
    </ul>

@endsection