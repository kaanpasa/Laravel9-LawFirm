@extends('layouts.frontbase')

@section('title', $data->title)



@section('content')
    <div class="page-section pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <nav aria-label="Breadcrumb">
                        <ol class="breadcrumb bg-transparent py-0 mb-5">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/services">Services</a></li>
                            <li class="breadcrumb-item"><a href="#">{{$data->category->title}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$data->title}}</li>
                        </ol>
                    </nav>
                </div>
            </div> <!-- .row -->


            <div class="row">
                <div class="col-lg-8">
                    <article class="blog-details">
                        <div class="post-thumb">
                            @if ($data->image)
                                <img src="{{Storage::url($data->image)}}" style="height:300px">
                            @endif
                        </div>
                        <div class="post-meta">
                            <div class="post-author">
                                <span class="text-grey">By</span> <a href="#">Kaan Pasa</a>
                            </div>
                            <span class="divider">|</span>
                            <div class="post-date">
                                <a href="#">22 May, 2022</a>
                            </div>
                            <span class="divider">|</span>
                            <div>
                                <a href="#">{{$data->category->title}}</a>
                            </div>
                            <span class="divider">|</span>
                            <div class="post-comment-count">
                                <a href="#">8 Comments</a>
                            </div>
                        </div>
                        <h2 class="post-title h1">{{$data->title}}</h2>
                        <div class="post-content">
                            <p>{!!$data->detail!!}</p>
                        </div>
                        <div class="post-tags">
                            <a href="#" class="tag-link">Civil Law</a>
                            <a href="#" class="tag-link">Family Law</a>
                        </div>
                    </article> <!-- .blog-details -->

                    <div class="comment-form-wrap pt-5">
                        <h3 class="mb-5">Leave a comment</h3>
                        <form action="#" class="">
                            <div class="form-row form-group">
                                <div class="col-md-6">
                                    <label for="name">Name *</label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                                <div class="col-md-6">
                                    <label for="email">Email *</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="message">Message *</label>
                                <textarea name="msg" id="message" cols="30" rows="8" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Post Comment" class="btn btn-primary">
                            </div>

                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar-block">
                            <h3 class="sidebar-title">Categories</h3>
                            <ul class="categories">
                                <li><a href="#">Constitutional Law</a></li>
                                <li><a href="#">Administrative Law</a></li>
                                <li><a href="#">Criminal Law</a></li>
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
    </div> <!-- .page-section -->



@endsection
