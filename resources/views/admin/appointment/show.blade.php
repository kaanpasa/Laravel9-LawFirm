@extends('layouts.adminwindow')

@section('title', 'Show Appointment')

@section('content')
<div style="margin:10px">
    <h1>{{$data->title}}</h1>
    <div class="panel panel-default">
        <div class="panel-heading">
            Detailed Appointment Data
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">

                    <tr>
                        <th>Id</th>
                        <td>{{$data->id}}</td>
                    </tr>

                    <tr>
                        <th>Name</th>
                        <td>{{$data->name}}</td>
                    </tr>

                    <tr>
                        <th>Email</th>
                        <td>{{$data->email}}</td>
                    </tr>

                    <tr>
                        <th>Phone</th>
                        <td>{{$data->phone}}</td>

                    </tr>

                    <tr>
                        <th>Subject</th>
                        <td>{{$data->subject}}</td>
                    </tr>

                    <tr>
                        <th>Message</th>
                        <td>{{$data->message}}</td>
                    </tr>

                    <tr>
                        <th>Ip Address</th>
                        <td>{{$data->ip}}</td>
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
                        <th>Admin Note</th>
                        <td>
                            <form role="form" action="{{route('admin.appointment.update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <textarea cols="100" id="note" name="note">{{$data->note}}</textarea><br>
                                <button type="submit" class="btn btn-primary">Update Note</button>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
            <div style="text-align: right">
            <a href="{{route('admin.appointment.destroy',['id'=>$data->id])}}" class="btn btn-danger btn-sm"
                   onclick="return confirm('Are you sure to delete?')">Delete</a>
            </div>
        </div>
    </div>
</div>
@endsection
