@extends('layouts.frontbase')

@section('title', 'User Panel')

@section('content')

    <div class="page-banner overlay-dark bg-image" style="background-image: url(/storage/images/photos2.jpg);">
        <div class="banner-section">
            <div class="container text-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">User Panel</li>
                    </ol>
                </nav>
                <h1 class="font-weight-normal">User Panel</h1>
            </div> <!-- .container -->
        </div> <!-- .banner-section -->
    </div>
    <div class="row" style="margin-left:5px;margin-right:5px">
        <div class="page-section col-lg-3 wow fadeInUp">
            @include('home.user.usermenu')
        </div>

        <div class="page-section col-lg-9 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <h2>User Information</h2><hr>
                @include('profile.show')
        </div>

    </div>


@endsection
