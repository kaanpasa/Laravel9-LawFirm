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
                        <th>User Id</th>
                        <td>{{$data->user_id}}</td>
                    </tr>

                    <tr>
                        <th>Service Id</th>
                        <td>{{$data->service_id}}</td>
                    </tr>

                    <tr>
                        <th>Date</th>
                        <td>{{$data->date}}</td>

                    </tr>

                    <tr>
                        <th>Time</th>
                        <td>{{$data->time}}</td>
                    </tr>

                    <tr>
                        <th>Subject</th>
                        <td>{{$data->subject}}</td>
                    </tr>

                    <tr>
                        <th>Price</th>
                        <td>{{$data->price}}</td>
                    </tr>

                    <tr>
                        <th>Payment</th>
                        <td>{{$data->payment}}</td>
                    </tr>

                    <tr>
                        <th>IP</th>
                        <td>{{$data->IP}}</td>
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
