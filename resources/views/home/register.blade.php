@extends('layouts.frontbase')

@section('title', "User Register")

@section('content')

    <div class="page-banner overlay-dark bg-image" style="background-image: url(/storage/images/photos2.jpg);">
        <div class="banner-section">
            <div class="container text-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Register</li>
                    </ol>
                </nav>
                <h1 class="font-weight-normal" style="font-size:40px">User Register</h1>
            </div> <!-- .container -->
        </div> <!-- .banner-section -->
    </div>

    @include('auth.register')

@endsection
