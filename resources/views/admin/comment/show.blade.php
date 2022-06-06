@extends('layouts.adminwindow')

@section('title', 'Comment of: '.$data->user->name)

@section('content')
<div style="margin:10px">
    <h1>Comment of: {{$data->user->name}}</h1>
    <div class="panel panel-default">
        <div class="panel-heading">
            Comment
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">

                    <tr>
                        <th>Id</th>
                        <td>{{$data->id}}</td>
                    </tr>

                    <tr>
                        <th>Service</th>
                        <td>{{$data->service->title}}</td>
                    </tr>

                    <tr>
                        <th>Name</th>
                        <td>{{$data->user->name}}</td>
                    </tr>

                    <tr>
                        <th>IP Address</th>
                        <td>{{$data->IP}}</td>
                    </tr>

                    <tr>
                        <th>Subject</th>
                        <td>{{$data->subject}}</td>
                    </tr>

                    <tr>
                        <th>Rate</th>
                        <td>{{$data->rate}} Stars</td>

                    </tr>

                    <tr>
                        <th>Review</th>
                        <td>{{$data->review}}</td>
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

                    <tr>
                        <th>Visible Status</th>
                        <td>
                            <form role="form" action="{{route('admin.comment.update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <select name="status">
                                    <option selected>{{$data->status}}</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                                <button type="submit" class="btn btn-primary">Update Status</button>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
            <div style="text-align: right">
            <a href="{{route('admin.service.destroy',['id'=>$data->id])}}" class="btn btn-danger btn-sm"
                   onclick="return confirm('Are you sure to delete?')">Delete</a>
            </div>
        </div>
    </div>
</div>
@endsection
