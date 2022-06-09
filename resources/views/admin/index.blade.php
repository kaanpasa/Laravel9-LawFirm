@extends('layouts.adminbase')

@section('title', 'Admin Panel')

@section('content')

        <div id="page-inner" class="col-lg-9 container-fluid">
                <div>
                    <h5>Welcome {{Auth::user()->name}} , Love to see you back. </h5>
                </div>
            <hr>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-envelope-o"></i>
                </span>
                        <div class="text-box">
                            <p class="main-text">{{$messages->count('id')}} New</p>
                            <p class="text-muted">Messages</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-bell-o"></i>
                </span>
                        <div class="text-box">
                            <p class="main-text">{{$appointments->count('id')}} New</p>
                            <p class="text-muted">Appointments</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-rocket"></i>
                </span>
                        <div class="text-box">
                            <p class="main-text">{{$comments->count('id')}} New</p>
                            <p class="text-muted">Comments</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>




@endsection
