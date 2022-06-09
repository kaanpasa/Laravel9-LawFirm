@extends('layouts.frontbase')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('content')

    @include("home.slider")


    <div class="bg-light"> <!--Topbar-->
        <!--Welcome paragraph -->
        <div class="page-section pb-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 py-3 wow fadeInUp">
                        <h1>Welcome to Your Justice<br> Center</h1>
                        <p class="text-grey mb-4">
                            Pasa Law Firm, founded in Karabük by Lawyer Kaan Pasa; It provides advocacy and legal consultancy services to its domestic and foreign clients in various fields of law, together with its expert lawyer staff. Pasa Law Firm, which has adopted the understanding of knowledgeable, relevant and fast legal service since the day it was founded, aims to provide the best legal service to its clients in order to obtain their rights.
                            <br>
                            Pasa Law Firm has a solution partnership network with many law firms, lawyers and professional organizations in Turkey and abroad. For this reason, he provides legal services in many places, including Turkey and abroad.
                        </p>
                        <a href="{{route('aboutus')}}" class="btn btn-primary">Learn More</a>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                        <div class="img-place custom-img-1">
                            <img src="../assets/img/welcome.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-section">
        <div class="container">
            <h1 class="text-center mb-5 wow fadeInUp">Our Lawyers</h1>

            <div class="row wow fadeInUp" id="lawyerSlideshow">
                <div class="item" style="width:20%">
                    <div class="card-lawyer">
                        <div class="header">
                            <img src="/assets/img/lawyers/davis.jpg" alt="Brian R. Davis">
                        </div>
                        <div class="body">
                            <p class="text-xl mb-0">Brian R. Davis</p>
                            <span class="text-sm text-grey">Businesss litigation</span>
                        </div>
                    </div>
                </div>
                <div class="item" style="width:20%">
                    <div class="card-lawyer">
                        <div class="header">
                            <img src="/assets/img/lawyers/kastan.jpg" alt="">
                        </div>
                        <div class="body">
                            <p class="text-xl mb-0">Joshua N. Kastan</p>
                            <span class="text-sm text-grey">Commercial litigation</span>
                        </div>
                    </div>
                </div>
                <div class="item" style="width:20%">
                    <div class="card-lawyer">
                        <div class="header">
                            <img src="/assets/img/lawyers/oconnor.jpg" alt="">
                        </div>
                        <div class="body">
                            <p class="text-xl mb-0">Melissa O'Connor</p>
                            <span class="text-sm text-grey">Civil litigation</span>
                        </div>
                    </div>
                </div>
                <div class="item" style="width:20%">
                    <div class="card-lawyer">
                        <div class="header">
                            <img src="/assets/img/lawyers/mclay.jpg" alt="">
                        </div>
                        <div class="body">
                            <p class="text-xl mb-0">Robert S. Mclay</p>
                            <span class="text-sm text-grey">Administrative litigation</span>
                        </div>
                    </div>
                </div>
                <div class="item" style="width:20%">
                    <div class="card-lawyer">
                        <div class="header">
                            <img src="/assets/img/lawyers/ross.jpg" alt="">
                        </div>
                        <div class="body">
                            <p class="text-xl mb-0">Jessica J. Ross</p>
                            <span class="text-sm text-grey">Procedural litigaiton</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Make an Appointment-->

    <div class="page-section">
        <div class="container">
            <h1 class="text-center wow fadeInUp">Make an Appointment</h1>
            @include('home.messages')
            @auth
            <form class="main-form" action="{{route('storeappointment')}}" method="post">
                @csrf
                <div class="row mt-5 ">
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                        <input name="date" type="date" class="form-control" min="<?php echo date('Y-m-d');?>">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                        <select name="time" class="custom-select">
                            <option>09:00</option><option>10:00</option><option>11:00</option><option>13:00</option>
                            <option>14:00</option><option>15:00</option><option>16:00</option><option>17:00</option>
                            <option>18:00</option><option>19:00</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                        <select name="service_id" id="service_id" class="custom-select">
                            @foreach($data as $rs)
                            <option value="{{$rs->id}}">{{$rs->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInUp" data-wow-delay="300ms">
                        <input name="subject" type="text" class="form-control" placeholder="Subject..">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
            </form>
            @endauth
            @guest
                <div class="row" >
                    <div class="col-lg-8">
                        <h4 class="alert alert-info">Please Login or Register For Make An Appointment</h4>
                    </div>
                    <div class="col-lg-4" style="text-align:center">
                        <button class="btn btn-primary ml-lg-3" style="margin-top:10px"><a href="/loginuser" style="color:white">Login </a> / <a href="/registeruser" style="color:white">Register</a></button>
                    </div>
                </div>
            @endguest
        </div>
    </div>




@endsection
