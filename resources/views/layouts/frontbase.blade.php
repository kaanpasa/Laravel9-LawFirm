<html>

<head>
    <title>@yield('title')</title>
    @yield('head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="Kaan Pasa, https://github.com/kaanpasa">

    <title>@yield("title")</title>

    <link rel="stylesheet" href="/assets/css/maicons.css">

    <link rel="stylesheet" href="/assets/css/bootstrap.css">

    <link rel="stylesheet" href="/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="/vendor/animate/animate.css">

    <link rel="stylesheet" href="/assets/css/theme.css">
</head>
<body>
@include("home.header")
@section('sidebar')
    @include("home.sidebar")
@show

<div class="container">
    @include("home.slider")
    @yield('content')
</div>
@include("home.footer")
@yield('foot')
</body>
</html>
