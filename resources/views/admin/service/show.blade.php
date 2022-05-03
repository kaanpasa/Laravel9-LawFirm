@extends('layouts.adminbase')

@section('title',$data->title)

@section('content')

    <h1>{{$data->title}}</h1>
    <div class="panel panel-default">
        <div class="panel-heading">
            Detailed Data
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <tr>
                        <th>Title</th>
                        <td>{{$data->title}}</td>
                    </tr>

                    <tr>
                        <th>Keywords</th>
                        <td>{{$data->keywords}}</td>
                    </tr>

                    <tr>
                        <th>Description</th>
                        <td>{{$data->description}}</td>
                    </tr>

                    <tr>
                        <th>Image</th>
                        <td>{{$data->image}}</td>
                    </tr>

                    <tr>
                        <th>Status</th>
                        <td>{{$data->status}}</td>
                    </tr>

                    <tr>
                        <th>Created at</th>
                        <td>{{$data->created_at}}</td>
                    </tr>

                    <tr>
                        <th>Updayed at</th>
                        <td>{{$data->updated_at}}</td>
                    </tr>
                </table>
            </div>
            <div style="text-align: right">
            <a href="{{route('admin.category.edit',['id'=>$data->id])}}" class="btn btn-info btn-sm">Edit</a>
            <a href="{{route('admin.category.destroy',['id'=>$data->id])}}" class="btn btn-danger btn-sm"
                   onclick="return confirm('Are you sure to delete?')">Delete</a>
            </div>
        </div>
    </div>

@endsection
