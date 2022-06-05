@extends('layouts.frontbase')

@section('title', "FAQ")
@section('head')
    <link rel="stylesheet" href="/assets/admin/css/pasa.css">
@endsection
@section('content')

    <div class="page-banner overlay-dark bg-image" style="background-image: url(/storage/images/photos2.jpg);">
        <div class="banner-section">
            <div class="container text-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">FAQ</li>
                    </ol>
                </nav>
                <h1 class="font-weight-normal">FAQ</h1>
            </div> <!-- .container -->
        </div> <!-- .banner-section -->
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="panel-group" id="accordion">
                        @foreach($datalist as $rs)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <h2 data-toggle="collapse" data-parent="#accordion" href="#collapse{{$rs->id}}" class="collapsed" style="cursor:pointer">{{$rs->question}}</h2>
                                </h4>
                            </div>
                            <div id="collapse{{$rs->id}}" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    {!! $rs->answer !!}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
