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

    <script src="/template/js/jquery.js"></script>
    <script src="/template/js/jquery.cycle2.min.js"></script>
    <script src="/template/js/jquery.cycle2.carousel.min.js"></script>
    <script src="/template/js/bootstrap.min.js"></script>
    <script src="/template/js/jquery.scrollUp.min.js"></script>
    <script src="/template/js/price-range.js"></script>
    <script src="/template/js/jquery.prettyPhoto.js"></script>
    <script src="/template/js/main.js"></script>


</head><!--/head-->

<body>
<div class="page-wrapper">
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +7-953-277-99-93</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> minimedinfo@minimed.ru</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <!-- Authentication Links -->
                                @guest
                                    <div class="header-login pull-right">
                                        <ul class="nav navbar-nav collapse navbar-collapse">
                                            <li><a href="{{ route('register') }}">{{ __('Регистрация') }}</a></li>
                                            <li><a href="{{ route('login') }}">{{ __('Вход') }}</a></li>
                                        </ul>
                                    </div>
                                @else
                                    @if(Auth::user()->is_admin == 1)
                                        <li class="admin"><a href="/admin"><i class="fa fa-edit"></i>Админпанель</a></li>
                                    @endif
                                    <li class="dropdown"><a href="#"><i class="fa fa-user"></i>{{ Auth::user()->name }}<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Выход') }}
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

        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="/">Главная</a></li>
                                <li class="dropdown"><a href="#">Магазин<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="/catalog/">Каталог товаров</a></li>
                                        <li><a href="/cart/">Корзина</a></li>
                                    </ul>
                                </li>
                                <li><a href="/about/">О магазине</a></li>
                                <li><a href="/contacts/">Контакты</a></li>
                            </ul>
                        </div>
                        <div class="mainmenu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="/cart">
                                        <i class="fa fa-shopping-cart"></i> Корзина
                                        (<span id="cart-count">{{App\Cart::countItems()}}</span>)
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <section class="lazy slider" data-sizes="50vw">
                        <div>
                            <img src="../slider/images/1.png" />
                        </div>
                        <div>
                            <img src="../slider/images/2.png" />
                        </div>
                        <div>
                            <img src="../slider/images/3.png" />
                        </div>
                        <div>
                            <img src="../slider/images/4.png" />
                        </div>
                    </section>
                </div>
            </div>
        </div>

    </header><!--/header-->
