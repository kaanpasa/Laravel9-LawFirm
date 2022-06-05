@extends('layouts.adminbase')

@section('title','FAQ Answer')

@section('content')
<div id="page-wrapper" style="background:#FFFFFF">
    <div class="panel panel-default">
        <div class="panel-heading">
            FAQ Answer
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">

                    <tr>
                        <th>Question</th>
                        <td>{{$data->question}}</td>
                    </tr>

                    <tr>
                        <th>Answer</th>
                        <td>{!! $data->answer !!}</td>
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
            <a href="{{route('admin.faq.edit',['id'=>$data->id])}}" class="btn btn-info btn-sm">Edit</a>
            <a href="{{route('admin.faq.destroy',['id'=>$data->id])}}" class="btn btn-danger btn-sm"
                   onclick="return confirm('Are you sure to delete?')">Delete</a>
            </div>
        </div>
    </div>
</div>
@endsection
