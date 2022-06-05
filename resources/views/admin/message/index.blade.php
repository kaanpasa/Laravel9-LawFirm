@extends('layouts.adminbase')

@section('title', 'Contact Form Messages List')

@section('content')
    <div id="page-wrapper" style="background:#FFFFFF">
        <div class="panel panel-default" style="margin-top: 20px">
            <div class="panel-heading">
                Messages
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Status</th>
                            <th style="width: 40px">Show</th>
                            <th style="width: 40px">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $data as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->name}}</td>
                            <td>{{$rs->phone}}</td>
                            <td>{{$rs->email}}</td>
                            <td>{{$rs->subject}}</td>
                            <td>{{$rs->status}}</td>
                            <td><a href="{{route('admin.message.show',['id'=>$rs->id])}}" class="btn btn-success btn-sm"
                                onclick="return !window.open(this.href,'','top=50 left=100 width=1100, height=700')" >Show</a></td>
                            <td><a href="{{route('admin.message.destroy',['id'=>$rs->id])}}" class="btn btn-danger btn-sm"
                                   onclick="return confirm('Are you sure to delete?')">Delete</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
