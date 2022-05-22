@extends('layouts.frontbase')

@section('title',$category->title . ' Services')

@section('content')
    <nav aria-label="Breadcrumb">
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
                            <div class="card-blog">
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
                            @endforeach
                        </div>

                    </div> <!-- .row -->
                </div>
                <div class="col-lg-4"><!--Right Bar-->
                    <div class="sidebar">
                        <div class="sidebar-block">
                            <h3 class="sidebar-title">Recent Blog</h3>
                            <div class="blog-item">
                                <a class="post-thumb" href="">
                                    <img src="/assets/img/blog/blog_1.jpg" alt="">
                                </a>
                                <div class="content">
                                    <h5 class="post-title"><a href="#">Even the all-powerful Pointing has no control</a></h5>
                                    <div class="meta">
                                        <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                                        <a href="#"><span class="mai-person"></span> Admin</a>
                                        <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div>
@endsection
