<html>
    <head>
        <title>@yield('title')</title>
        @yield('head')
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="copyright" content="Kaan Pasa, https://github.com/kaanpasa">

        <title>@yield("title")</title>

        <link rel="stylesheet" href="assets/css/maicons.css">
        <link rel="stylesheet" href="assets/vendor/animate/animate.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="{{asset('assets/vendor/owl-carousel/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="assets/css/theme.css">
        <!-----Slider CSS--->
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets/css/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    </head>

    <body class="bg-light">
    @include("home.header")
    @include("home.slider")
    @section('topbar')
        @include("home.topbar")
    @show
    <div class="container">
        @yield('content')
    </div>
    @include("home.footer")
    @yield('foot')
    </body>
</html>
