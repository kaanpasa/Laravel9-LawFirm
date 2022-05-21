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
            <a class="navbar-brand" href="/"><span class="text-primary">Pasa</span>-Law</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            @php
                $mainCategories = \App\Http\Controllers\HomeController::maincategorylist();
            @endphp
            <div class="collapse navbar-collapse" id="navbarSupport">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin">About</a>
                    </li>
                    <li class="nav-item w3dropdown">
                        <a class="nav-link dropdown-toggle w3dropbtn" href="/service/1">Categories</a>
                        <ul class="category-list w3dropdown-content">
                            @foreach($mainCategories as $rs)
                            <li class="dropdown side-dropdown" aria-expanded="true">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">{{$rs->title}}</a>
                                <div class="custom-menu">
                                    <div class="row">
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
                        <a class="nav-link dropdown-toggle w3dropbtn" href="/service/1">Services</a>
                        <ul class="category-list w3dropdown-content">
                            <li class="dropdown side-dropdown" aria-expanded="true">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Civil Law</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="doctors.html">Lawyers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary ml-lg-3" href="#">Login / Register</a>
                    </li>
                </ul>
            </div> <!-- .navbar-collapse -->
        </div> <!-- .container -->
    </nav>
</header>

