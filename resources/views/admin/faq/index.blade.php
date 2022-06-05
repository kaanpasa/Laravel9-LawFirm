@extends('layouts.adminbase')

@section('title', 'FAQ List')

@section('content')
    <div id="page-wrapper" style="background:#FFFFFF">
        <a href="{{route('admin.faq.create')}}" class="btn btn-success btn-sm">Add FAQ</a>
        <div class="panel panel-default" style="margin-top: 20px">
            <div class="panel-heading">
                Frequently Asked Questions
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Question</th>
                            <th>Status</th>
                            <th style="width: 40px">Edit</th>
                            <th style="width: 40px">Delete</th>
                            <th style="width: 40px">Show</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $data as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->question}}</td>
                            <td>{{$rs->status}}</td>
                            <td><a href="{{route('admin.faq.edit',['id'=>$rs->id])}}" class="btn btn-info btn-sm">Edit</a></td>
                            <td><a href="{{route('admin.faq.destroy',['id'=>$rs->id])}}" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure to delete?')">Delete</a></td>
                            <td><a href="{{route('admin.faq.show',['id'=>$rs->id])}}" class="btn btn-success btn-sm">Show</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
