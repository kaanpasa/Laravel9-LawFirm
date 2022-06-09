<header>
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 text-sm">
                    <div class="site-info">
                        <a href="#"><span class="mai-call text-primary"></span> +90 553 136 8650</a>
                        <span class="divider">|</span>
                        <a href="mailto:info@pasalaw.com"><span class="mai-mail text-primary"></span>info@pasalaw.com</a>
                    </div>
                </div>
                <div class="col-sm-4 text-right text-sm">
                    <div class="social-mini-button">
                        <a href="https://www.facebook.com/krbkuni" target="_blank"><span class="mai-logo-facebook-f"></span></a>
                        <a href="htpps://twitter.com/krbkuni" target="_blank"><span class="mai-logo-twitter"></span></a>
                        <a href="https://instagram.com/kaannpasa" target="_blank"><span class="mai-logo-instagram"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}"><span class="text-primary">Pasa</span>-Law</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            @php
                $mainCategories = \App\Http\Controllers\HomeController::maincategorylist();
            @endphp
            <div class="collapse navbar-collapse" id="navbarSupport">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/loginadmin">Admin</a>
                    </li>
                    <li class="nav-item w3dropdown">
                        <a class="nav-link w3dropbtn" href="#">Categories</a>
                        <ul class="category-list w3dropdown-content" style="list-style-type:none">
                            @foreach($mainCategories as $rs)
                            <li class="nav-item dropdown side-dropdown" aria-expanded="true">
                                <a href="{{route('categoryservices',['id'=>$rs->id, 'slug'=>$rs->title])}}" data-toggle="dropdown" aria-expanded="true">{{$rs->title}}</a>
                                <div class="custom-menu">
                                    <div class="row" style="margin-left:10px">
                                        @if(count($rs->children))
                                            @include('home.categorytree',['children'=>$rs->children])
                                        @endif
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('faq')}}">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('aboutus')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('references')}}">References</a>
                    </li>
                    @auth
                        <li class="nav-item w3dropdown">
                            <a class="nav-link w3dropbtn" href="{{route('userpanel.index')}}"><b>{{Auth::user()->name}}</b></a>
                            <ul class="category-list w3dropdown-content" style="list-style-type:none">
                                <li><a class="nav-item dropdown side-dropdown" href="{{route('userpanel.index')}}">My Account</a></li>
                                <li><a class="nav-item dropdown side-dropdown" href="#">My Appointments</a></li>
                                <li><a class="nav-item dropdown side-dropdown" href="#">My Reviews</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-primary ml-lg-3"><a href="/logoutuser" style="color:white">Logout</a></button>
                        </li>
                    @endauth
                    @guest
                    <li class="nav-item">
                        <button class="btn btn-primary ml-lg-3"><a href="/loginuser" style="color:white">Login </a> / <a href="/registeruser" style="color:white">Register</a></button>
                    </li>
                    @endguest
                </ul>
            </div> <!-- .navbar-collapse -->
        </div> <!-- .container -->
    </nav>
</header>

