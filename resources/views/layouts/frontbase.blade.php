<!DOCTYPE html>

    <head>
        <title>@yield('title')</title>
        <meta name="description" content="@yield("description")">
        <meta name="keywords" content="@yield("keywords")">
        <meta name="author" content="@yield("Kaan Pasa")">
        <link rel="icon" type="image/x-icon" href="@yield("icon")">
        @yield('head')
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="copyright" content="Kaan Pasa, https://github.com/kaanpasa">
        <link rel="stylesheet" href="/assets/css/maicons.css">
        <link rel="stylesheet" href="/assets/vendor/animate/animate.css">
        <link rel="stylesheet" href="/assets/css/bootstrap.css">
        <link rel="stylesheet" href="{{asset('assets/vendor/owl-carousel/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="/assets/css/theme.css">
        <!-----Slider CSS--->
        <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="/assets/css/ionicons.min.css">
        <link rel="stylesheet" href="/assets/css/style.css">
        <!--Rating CSS-->
        <link rel="stylesheet" href="/assets/css/pasa.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
