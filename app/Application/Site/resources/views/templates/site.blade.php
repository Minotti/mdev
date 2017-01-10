<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MDev Soluções Digitais</title>
    {!! Html::style('assets/css/style.css') !!}
    {!! Html::style('assets/css/default.css') !!}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

    <link rel="SHORTCUT ICON" href="{{'assets/Site/imgs/favicon.png'}}">
</head>
<body>
    <div class="box clearfix">
        @include('site::templates.header')
        @yield('content')
    </div>

    {!! Html::script('assets/js/jquery-3.1.0.min.js') !!}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    {!! Html::script('assets/Site/js/main.js') !!}
    <script src="//use.edgefonts.net/gochi-hand;goudy-bookletter-1911.js"></script>
</body>
</html>