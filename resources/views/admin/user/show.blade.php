@extends('layouts.adminwindow')

@section('title', 'User Detail: '.$data->name)

@section('content')
<div style="margin:10px">
    <h1>{{$data->title}}</h1>
    <div class="panel panel-default">
        <div class="panel-heading">
            User detail: {{$data->name}}
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
                        <th>Roles</th>
                        <td>
                            @foreach($data->roles as $role)
                                {{$role->name}}
                                <a href="{{route('admin.user.destroyrole',['uid'=>$data->id, 'rid'=>$role->id])}}" class="  "
                                   onclick="return confirm('Are you sure to delete?')">[×]</a>
                            @endforeach
                        </td>
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
                        <th>Add Role to User</th>
                        <td>
                            <form role="form" action="{{route('admin.user.addrole', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <select name="role_id">
                                    @foreach($roles as $role)
                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                                <button type="submit" class="btn btn-primary">Add Role</button>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
            <div style="text-align: right">
            <a href="{{route('admin.user.destroy',['id'=>$data->id])}}" class="btn btn-danger btn-sm"
                   onclick="return confirm('Are you sure to delete?')">Delete</a>
            </div>
        </div>
    </div>
</div>
@endsection
