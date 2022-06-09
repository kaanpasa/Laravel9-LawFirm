@extends('layouts.frontbase')

@section('title', $data->title)

@section('head')
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@endsection

@section('content')
    <div class="page-section pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <nav aria-label="Breadcrumb">
                        <ol class="breadcrumb bg-transparent py-0 mb-5">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('categoryservices',['id'=>$data->category->id, 'slug'=>$data->category->title])}}">{{$data->category->title}}</a></li>
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
                            <div class="form-row form-group">
                                <div class="box">
                                    @php
                                        $average = round($data->comment->average('rate'))
                                    @endphp
                                    {{$average}}
                                    <a class="b1"><ion-icon @if ($average<1) name="star-outline" @else name="star" @endif></ion-icon></a>
                                    <a class="b2"><ion-icon @if ($average<2) name="star-outline" @else name="star" @endif></ion-icon></a>
                                    <a class="b3"><ion-icon @if ($average<3) name="star-outline" @else name="star" @endif></ion-icon></a>
                                    <a class="b4"><ion-icon @if ($average<4) name="star-outline" @else name="star" @endif></ion-icon></a>
                                    <a class="b5"><ion-icon @if ($average<5) name="star-outline" @else name="star" @endif></ion-icon></a>
                                </div>
                            </div>
                            <span class="divider">|</span>
                            <div class="post-comment-count">
                                <a href="#">{{$data->comment->count('id')}} Review(s) / Add Review</a>
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
                        <h2>Reviews ({{$reviews->count('id')}})</h2>
                        @foreach($reviews as $rs)
                            <div>
                                {{$rs->user->name}}
                                {{$rs->created_at}}
                                <strong>{{$rs->rate}} stars</strong>

                            </div>
                            <div>
                                <strong>{{$rs->subject}}</strong>
                                <p>{{$rs->review}}</p>
                            </div>
                        @endforeach

                        @auth
                            <div class="comment-form-wrap pt-5">
                                <h3 class="mb-5">Write Your Review</h3>
                                <form action="{{route('storecomment')}}" method="post">
                                    @csrf
                                    <div class="form-row form-group">
                                        <input class="input" type="hidden" name="service_id" value="{{$data->id}}">
                                        <div class="col-md-6">
                                            <label for="name">Name *</label>
                                            <input type="text" class="form-control" id="name" name="name">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="email">Email *</label>
                                            <input type="email" class="form-control" id="email" name="email">
                                        </div>
                                    </div>
                                    <div class="form-row form-group">
                                        <div class=" col-md-9">
                                            <label for="subject">Subject</label>
                                            <input type="text" class="form-control" id="subject" name="subject">
                                        </div>

                                        <div class=" col-md-3">
                                            <strong>Your Rating: </strong>
                                            <div style="width:300px;">
                                                <select name="rate">
                                                    <option value="0">Select a rate:</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="review">Review</label>
                                        <textarea name="review" id="review" cols="30" rows="8" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Submit" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                        @else
                            <a href="/login" class="btn btn-primary">Login for submit a review</a>
                        @endauth
                    </article> <!-- .blog-details -->

                </div>
                <div class="col-lg-4"><!--Sidebar-->
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
