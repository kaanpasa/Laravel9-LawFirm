@extends('layouts.frontbase')

@section('title', 'User Appointments')

@section('content')

    <div class="page-banner overlay-dark bg-image" style="background-image: url(/storage/images/photos2.jpg);">
        <div class="banner-section">
            <div class="container text-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">User Appointments</li>
                    </ol>
                </nav>
                <h1 class="font-weight-normal">User Appointments</h1>
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
                    <th>User ID</th>
                    <th>Service ID</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Subject</th>
                    <th>Price</th>
                    <th>Payment</th>
                    <th>IP</th>
                    <th>Note</th>
                    <th>Status</th>
                    <th style="width: 40px">Show</th>
                    <th style="width: 40px">Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $data as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->user_id}}</td>
                            <td>{{$rs->service_id}}</td>
                            <td>{{$rs->date}}</td>
                            <td>{{$rs->time}}</td>
                            <td>{{$rs->subject}}</td>
                            <td>{{$rs->price}}</td>
                            <td>{{$rs->payment}}</td>
                            <td>{{$rs->IP}}</td>
                            <td>{{$rs->note}}</td>
                            <td>{{$rs->status}}</td>
                            <td><a href="{{route('admin.appointment.show',['id'=>$rs->id])}}" class="btn btn-success btn-sm"
                                   onclick="return !window.open(this.href,'','top=50 left=100 width=1100, height=700')" >Show</a></td>
                            <td><a href="{{route('admin.appointment.destroy',['id'=>$rs->id])}}" class="btn btn-danger btn-sm"
                                   onclick="return confirm('Are you sure to delete?')">Delete</a></td>
                        </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>


@endsection
