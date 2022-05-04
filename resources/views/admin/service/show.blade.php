@extends('layouts.adminbase')

@section('title',$data->title)

@section('content')
<div id="page-wrapper" style="background:#FFFFFF">
    <h1>{{$data->title}}</h1>
    <div class="panel panel-default">
        <div class="panel-heading">
            Detailed Data
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <tr>
                        <th>Category</th>
                        <td>{{\App\Http\Controllers\AdminPanel\AdminServicesController::getParentsTree($data, $data->title)}}</td>
                    </tr>

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
                        <td>
                            @if ($data->image)
                                <img src="{{Storage::url($data->image)}}" style="height:300px">
                            @endif
                        </td>
                    </tr>

                    <tr>
                        <th>Detail</th>
                        <td>{{$data->detail}}</td>

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
                        <th>Updated at</th>
                        <td>{{$data->updated_at}}</td>
                    </tr>
                </table>
            </div>
            <div style="text-align: right">
            <a href="{{route('admin.service.edit',['id'=>$data->id])}}" class="btn btn-info btn-sm">Edit</a>
            <a href="{{route('admin.service.destroy',['id'=>$data->id])}}" class="btn btn-danger btn-sm"
                   onclick="return confirm('Are you sure to delete?')">Delete</a>
            </div>
        </div>
    </div>
</div>
@endsection
