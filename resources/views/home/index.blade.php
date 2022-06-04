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

                            Pasa Law Firm has a solution partnership network with many law firms, lawyers and professional organizations in Turkey and abroad. For this reason, he provides legal services in many places, including Turkey and abroad.
                        </p>
                        <a href="about.html" class="btn btn-primary">Learn More</a>
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

    <!-- Blog bölümü -->
    <div class="page-section bg-light">
        <div class="container">
            <h1 class="text-center wow fadeInUp">Latest Blog</h1>
            <div class="row mt-5">
                <div class="col-lg-4 py-2 wow zoomIn">
                    <div class="card-blog">
                        <div class="header">
                            <div class="post-category">
                                <a href="#">Bar</a>
                            </div>
                            <a href="blog-details.html" class="post-thumb">
                                <img src="/assets/img/blog/kripto.jpg" alt="">
                            </a>
                        </div>
                        <div class="body">
                            <h5 class="post-title"><a href="blog-details.html">Cancellation of Zoning Plan</a></h5>
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
                </div>
                <div class="col-lg-4 py-2 wow zoomIn">
                    <div class="card-blog">
                        <div class="header">
                            <div class="post-category">
                                <a href="#">Covid19</a>
                            </div>
                            <a href="blog-details.html" class="post-thumb">
                                <img src="/assets/img/blog/kripto.jpg" alt="">
                            </a>
                        </div>
                        <div class="body">
                            <h5 class="post-title"><a href="blog-details.html">Criptocurrency Law</a></h5>
                            <div class="site-info">
                                <div class="avatar mr-2">
                                    <div class="avatar-img">
                                        <img src="/assets/img/person/pasa.jpeg" alt="">
                                    </div>
                                    <span>Kaan Pasa</span>
                                </div>
                                <span class="mai-time"></span> 4 weeks ago
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 py-2 wow zoomIn">
                    <div class="card-blog">
                        <div class="header">
                            <div class="post-category">
                                <a href="#">Covid19</a>
                            </div>
                            <a href="blog-details.html" class="post-thumb">
                                <img src="/assets/img//blog/kripto.jpg" alt="">
                            </a>
                        </div>
                        <div class="body">
                            <h5 class="post-title"><a href="blog-details.html">Work accident Report</a></h5>
                            <div class="site-info">
                                <div class="avatar mr-2">
                                    <div class="avatar-img">
                                        <img src="/assets/img/person/pasa.jpeg" alt="">
                                    </div>
                                    <span>Kaan Pasa</span>
                                </div>
                                <span class="mai-time"></span> 2 months ago
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 text-center mt-4 wow zoomIn">
                    <a href="blog.html" class="btn btn-primary">Read More</a>
                </div>

            </div>
        </div>
    </div> <!-- .page-section -->

    <!--Make an Appointment-->

    <div class="page-section">
        <div class="container">
            <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

            <form class="main-form">
                <div class="row mt-5 ">
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                        <input type="text" class="form-control" placeholder="Full name">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                        <input type="text" class="form-control" placeholder="Email address..">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                        <input type="date" class="form-control">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                        <select name="departement" id="departement" class="custom-select">
                            @foreach($data as $rs)
                            <option value="{{$rs->title}}">{{$rs->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                        <input type="text" class="form-control" placeholder="Number..">
                    </div>
                    <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                        <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
            </form>
        </div>
    </div>


@endsection
