@extends('layouts.frontbase')

@section('title', 'Pasa Law')


@section('content')

    <!--Our Lawyers https://www.dkmlawgroup.com/attorneys-->

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
                            <span class="text-sm text-grey">Insurance</span>
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
                            <span class="text-sm text-grey">Commercial Litigation</span>
                        </div>
                    </div>
                </div>
                <div class="item" style="width:20%">
                    <div class="card-lawyer">
                        <div class="header">
                            <img src="/assets/img/lawyers/oconnor.jpg" alt="">
                        </div>
                        <div class="body">
                            <p class="text-xl mb-0">Melissa L. O'Connor</p>
                            <span class="text-sm text-grey">Civil Litigation</span>
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
                            <span class="text-sm text-grey">Divorce</span>
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
                            <span class="text-sm text-grey">Accidents</span>
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
                            <option value="consulting">Consulting</option>
                            <option value="insurance">Insurance</option>
                            <option value="comlit">Commercial Litigation</option>
                            <option value="civlit">Civil Litigation</option>
                            <option value="divorce">Divorce</option>
                            <option value="accidents">Accidents</option>
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
                                <img src="../assets/img/blog/blog_1.jpg" alt="">
                            </a>
                        </div>
                        <div class="body">
                            <h5 class="post-title"><a href="blog-details.html">Critical AYM selection from bar association presidents</a></h5>
                            <div class="site-info">
                                <div class="avatar mr-2">
                                    <div class="avatar-img">
                                        <img src="/assets/img/person/pasa.jpeg" alt="">
                                    </div>
                                    <span>Kaan Pasa</span>
                                </div><!--https://www.gazeteduvar.com.tr/baro-baskanlarindan-kritik-aym-secimi-32-avukat-adaylik-icin-basvurdu-haber-1548122-->
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
                                <img src="../assets/img/blog/blog_2.jpg" alt="">
                            </a>
                        </div>
                        <div class="body">
                            <h5 class="post-title"><a href="blog-details.html">Recovery Room: News beyond the pandemic</a></h5>
                            <div class="site-info">
                                <div class="avatar mr-2">
                                    <div class="avatar-img">
                                        <img src="../assets/img/person/person_1.jpg" alt="">
                                    </div>
                                    <span>Roger Adams</span>
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
                                <img src="../assets/img/blog/blog_3.jpg" alt="">
                            </a>
                        </div>
                        <div class="body">
                            <h5 class="post-title"><a href="blog-details.html">What is the impact of eating too much sugar?</a></h5>
                            <div class="site-info">
                                <div class="avatar mr-2">
                                    <div class="avatar-img">
                                        <img src="../assets/img/person/person_2.jpg" alt="">
                                    </div>
                                    <span>Diego Simmons</span>
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

@endsection
