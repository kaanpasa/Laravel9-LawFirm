<html>
    <head>
        <title>@yield('title')</title>
        @yield('head')
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="copyright" content="Kaan Pasa, https://github.com/kaanpasa">
        <link rel="icon" type="image/x-icon" href="/favicon.ico">
        <title>@yield("title")</title>

        <link rel="stylesheet" href="/assets/css/maicons.css">
        <link rel="stylesheet" href="/assets/vendor/animate/animate.css">
        <link rel="stylesheet" href="/assets/css/bootstrap.css">
        <link rel="stylesheet" href="{{asset('assets/vendor/owl-carousel/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="/assets/css/theme.css">
        <!-----Slider CSS--->
        <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="/assets/css/ionicons.min.css">
        <link rel="stylesheet" href="/assets/css/style.css">
    </head>

    <body class="bg-light">
        @include("home.header")
        <div class="container">
            @yield('content')
        </div>
        @include("home.footer")
        @yield('foot')
    </body>
</html>
