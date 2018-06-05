<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link href="/template/css/font-awesome.min.css" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Панель администратора</a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/admin-panel/products">Товары</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin-panel/categories">Категории</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin-panel/posts">Реклама</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin-panel/orders">Заказы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin-panel/users">Пользователи</a>
                </li>
            </ul>
            <a class="btn btn-outline-success my-2 my-sm-0" style="color: black; text-decoration: none;" href="/">На сайт</a>
        </div>
    </nav>
</header>
<body>
    @include('admin-panel.part.msg')
    @yield('content')
</body>
</html>

