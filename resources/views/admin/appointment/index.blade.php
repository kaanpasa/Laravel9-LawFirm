@extends('layouts.adminbase')

@section('title', 'New Appointment List')

@section('content')
    <div id="page-wrapper" style="background:#FFFFFF">
        <div class="panel panel-default" style="margin-top: 20px">
            <div class="panel-heading">
                New Appointments
            </div>
            <div class="panel-body">
                <div class="table-responsive">
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
                           @if($rs->status == 'Read')
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
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
