<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield('title')</title>
        <link href="/assets/admin/css/bootstrap.css" rel="stylesheet" />
        <link href="/assets/admin/css/font-awesome.css" rel="stylesheet" />
        <link href="/assets/admin/css/custom.css" rel="stylesheet" />
        <link href="/assets/admin/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        @yield('head')
    </head>

    <body>
        @section('sidebar')
            @include("admin.sidebar")
        @show
        <div class="container">
            @yield('content')
        </div>
        @include("admin.footer")
        @yield('foot')
    </body>
</html>
