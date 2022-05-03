@extends('layouts.adminbase')

@section('title', 'Service List')

@section('content')
    <div id="page-wrapper" style="background:#FFFFFF">
        <a href="{{route('admin.service.create')}}" class="btn btn-success btn-sm">Add Service</a>
        <div class="panel panel-default" style="margin-top: 20px">
            <div class="panel-heading">
                Services
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Keywords</th>
                            <th>Descripton</th>
                            <th>Image</th>
                            <th>Details</th>
                            <th>User Id</th>
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
                            <td>{{$rs->title}}</td>
                            <td>{{$rs->title}}</td>
                            <td>{{$rs->keywords}}</td>
                            <td>{{$rs->description}}</td>
                            <td>
                                @if($rs->image)
                                    <img src="{{Storage::url($rs->image)}}">
                                @endif
                            </td>
                            <td>{{$rs->detail}}</td>
                            <td>{{$rs->user_id}}</td>
                            <td>{{$rs->status}}</td>
                            <td><a href="{{route('admin.service.edit',['id'=>$rs->id])}}" class="btn btn-info btn-sm">Edit</a></td>
                            <td><a href="{{route('admin.service.destroy',['id'=>$rs->id])}}" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure to delete?')">Delete</a></td>
                            <td><a href="{{route('admin.service.show',['id'=>$rs->id])}}" class="btn btn-success btn-sm">Show</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
