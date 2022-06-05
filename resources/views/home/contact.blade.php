@extends('layouts.frontbase')

@section('title', "Contact | ".$setting->title)

@section('content')

    <div class="page-banner overlay-dark bg-image" style="background-image: url(/storage/images/photos2.jpg);">
        <div class="banner-section">
            <div class="container text-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ol>
                </nav>
                <h1 class="font-weight-normal">Contact</h1>
            </div> <!-- .container -->
        </div> <!-- .banner-section -->
    </div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001.6780495275607!2d32.658370743317164!3d41.20699213173132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x408353568ca1908d%3A0xedc4cea46c4fdfa2!2sKarab%C3%BCk%20%C3%9Cniversitesi%20M%C3%BChendislik%20Fak%C3%BCltesi!5e0!3m2!1str!2str!4v1654442742026!5m2!1str!2str" width="100%" height="300" style="border:1px;animation-name: fadeInUp" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <div class="row" style="margin-left:5px;margin-right:5px">

        <form action="{{route("storemessage")}}" class="contact-form mt-5" enctype="multipart/form-data" role="form" style="width:50%" method="post">
            @include('home.messages')
            @csrf
            <div class="row mb-3">
                <div class="col-sm-6 py-2 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name & Surname">
                </div>

                <div class="col-sm-6 py-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Email address" type="email">
                </div>

                <div class="form-group col-6 py-2 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control" placeholder="Phone" type="tel">
                </div>

                <div class="col-6 py-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                    <label>Subject</label>
                    <input type="text" name="subject" class="form-control" placeholder="Subject">
                </div>

                <div class="col-12 py-2 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <label>Message</label>
                    <textarea name="message" class="form-control" rows="8" placeholder="Enter Message.."></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary wow zoomIn" style="visibility:visible; animation-name: zoomIn;">Send Message</button>
        </form>
        <div class="page-section" style="width:50%">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="text-lg">
                            <p>{!!$setting->contact!!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
