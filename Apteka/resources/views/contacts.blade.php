<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Главная</title>
    <link href="/template/css/bootstrap.min.css" rel="stylesheet">
    <link href="/template/css/font-awesome.min.css" rel="stylesheet">
    <link href="/template/css/prettyPhoto.css" rel="stylesheet">
    <link href="/template/css/price-range.css" rel="stylesheet">
    <link href="/template/css/animate.css" rel="stylesheet">
    <link href="/template/css/main.css" rel="stylesheet">
    <link href="/template/css/slider.css" rel="stylesheet">
    <link href="/template/css/responsive.css" rel="stylesheet">

    <link rel="shortcut icon" href="/template/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/template/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/template/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/template/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/template/images/ico/apple-touch-icon-57-precomposed.png">

    <link rel="stylesheet" type="text/css" href="../slider/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="../slider/slick/slick-theme.css">


</head><!--/head-->

<body>
<div class="page-wrapper">
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +7-953-277-99-93</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> minimedinfo@minimed.ru</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <!-- Authentication Links -->
                                @guest
                                    <div class="header-login pull-right">
                                        <ul class="nav navbar-nav collapse navbar-collapse">
                                            <li><a href="{{ route('login') }}">{{ __('Вход') }}</a></li>
                                        </ul>
                                    </div>
                                @else
                                    <li class="dropdown"><a href="#">{{ Auth::user()->name }}<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->

        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="/"><img src="/template/images/home/logo.png" width="200" height="150" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-sm-4">

                    </div>
                    <div class="col-sm-4">
                        <div class="search pull-right">
                            <form>
                                <input type="text" placeholder="Поиск">
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div><!--/header-middle-->
    </header><!--/header-->
    <div class="col-sm-12">
        <div class="container">
            <div class="row">
                    <h2 class="title text-center">Контакты</h2>
                    <div class="col-sm-8">
                        <div class="maps">
                            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A19d9403e190ce360a90b5a084078557cce558c600a9c2f45db77b7222699a63b&amp;width=727&amp;height=480&amp;lang=ru_RU&amp;scroll=true"></script>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="contacts">
                            <h3><a href="/">Minimed</a></h3>
                            <h4>г. Брянскб ул. Камозина, 43</h4>
                            <p>+7-953-277-99-93</p>
                            <p>minimedinfo@minimed.ru</p>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@include('layouts.footer')