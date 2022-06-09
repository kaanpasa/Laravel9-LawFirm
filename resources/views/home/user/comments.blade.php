@extends('layouts.frontbase')

@section('title', 'User Comments & Reviews')

@section('content')

    <div class="page-banner overlay-dark bg-image" style="background-image: url(/storage/images/photos2.jpg);">
        <div class="banner-section">
            <div class="container text-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">User Comments & Reviews</li>
                    </ol>
                </nav>
                <h1 class="font-weight-normal">User Comments & Reviews</h1>
            </div> <!-- .container -->
        </div> <!-- .banner-section -->
    </div>
    <div class="row" style="margin-left:5px;margin-right:5px">
        <div class="page-section col-lg-3 wow fadeInUp">
            @include('home.user.usermenu')
        </div>

        <div class="page-section col-lg-9 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Service Name</th>
                    <th>Subject</th>
                    <th>Review</th>
                    <th>Rate</th>
                    <th>Status</th>
                    <th style="width: 40px">Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $comments as $rs)
                    <tr>
                        <td>{{$rs->id}}</td>
                        <td>{{$rs->service->title}}</td>
                        <td>{{$rs->subject}}</td>
                        <td>{{$rs->review}}</td>
                        <td>{{$rs->rate}}</td>
                        <td>{{$rs->status}}</td>
                        <td><a href="{{route('userpanel.commentdestroy',['id'=>$rs->id])}}" class="btn btn-danger btn-sm"
                               onclick="return confirm('Are you sure to delete?')">Delete</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>


@endsection
