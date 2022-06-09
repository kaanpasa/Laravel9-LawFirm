@extends('layouts.frontbase')

@section('title',$category->title . ' Services')

@section('content')
    <nav aria-label="Breadcrumb" style="margin-top:20px">
        <ol class="breadcrumb bg-transparent py-0 mb-5">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$category->title}}</li>
        </ol>
    </nav>

    <div class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row"><!-- -->
                        <div class="col-sm-6 py-3">
                            @foreach($services as $rs)
                            <div class="card-blog ">
                                <div class="header">
                                    <div class="post-category">
                                        <a href="/categoryservices/{{$category->id}}">{{$category->title}}</a>
                                    </div>
                                    <a href="/service/{{$rs->id}}" class="post-thumb">
                                        <img src="{{Storage::url($rs->image)}}" alt="{{$category->title}}">
                                    </a>
                                </div>
                                <div class="body">
                                    <h5 class="post-title"><a href="/service/{{$rs->id}}">{{$rs->title}}</a></h5>
                                    <div class="site-info">
                                        <div class="avatar mr-2">
                                            <div class="avatar-img">
                                                <img src="/assets/img/person/pasa.jpeg" alt="">
                                            </div>
                                            <span>Kaan Pasa</span>
                                        </div>
                                        <span class="mai-time"></span> 1 week ago
                                    </div>
                                </div>
                            </div>
                                <br>
                            @endforeach
                        </div>

                    </div> <!-- .row -->
                </div>
                <div class="col-lg-4"><!--Sidebar-->
                    <div class="sidebar">
                        <div class="sidebar-block">
                            <h3 class="sidebar-title">Categories</h3>
                            <ul class="categories">
                                <li><a href="/categoryservices/17/Equality%20Law">Equality Law</a></li>
                                <li><a href="/categoryservices/18/Corporate%20Law">Corporate Law</a></li>
                                <li><a href="/categoryservices/11/Family%20Law">Family Law</a></li>
                                <li><a href="#">Procedural Law</a></li>
                                <li><a href="#">Business Law</a></li>
                                <li><a href="#">Civil Law</a></li>
                                <li><a href="#">Commercial Law</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div>
@endsection
