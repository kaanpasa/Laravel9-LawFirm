@extends('layouts.adminbase')

@section('title', 'Category List')

@section('content')
    <div id="page-wrapper" style="background:#FFFFFF">
        <div class="panel panel-default" style="margin-top: 20px">
            <div class="panel-heading">
                Categories
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Keywords</th>
                            <th>Descripton</th>
                            <th>Image</th>
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
                            <td>{{$rs->keywords}}</td>
                            <td>{{$rs->description}}</td>
                            <td>{{$rs->image}}</td>
                            <td>{{$rs->status}}</td>
                            <td><a href="/admin/category/edit/{{$rs->id}}" class="btn btn-primary btn-sm">Edit</a></td>
                            <td><a href="/admin/category/delete/{{$rs->id}}" class="btn btn-danger btn-sm">Delete</a></td>
                            <td><a href="/admin/category/show/{{$rs->id}}" class="btn btn-success btn-sm">Show</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
