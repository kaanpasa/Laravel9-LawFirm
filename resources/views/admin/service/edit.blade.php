@extends('layouts.adminbase')

@section('title', 'Edit Service: '.$data->title)

@section('content')
<div id="page-wrapper" style="background:#FFFFFF">
    <h1>Edit Service: {{$data->title}}</h1>
    <div class="row">
        <div class="col-md-12">
            <!-- Form Elements -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit Service
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form role="form" action="{{route('admin.service.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label>Category</label>

                                    <select class="form-control select2" name="category_id">
                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}" @if ($rs->id == $data->category_id) selected="selected" @endif>
                                                {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title" value="{{$data->title}}"/>
                                </div>

                                <div class="form-group">
                                    <label>Keywords</label>
                                    <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}"/>
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" class="form-control" name="description" value="{{$data->description}}"/>
                                </div>

                                <div class="form-group">
                                    <label>Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image">
                                            <label class="custom-file-input" for="exampleInputFile">Choose File</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">Upload</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Details</label>
                                    <input type="text" class="form-control" name="details" value="{{$data->detail}}"/>
                                </div>

                                <div class="form-group">
                                    <label>User Id</label>
                                    <input type="number" class="form-control" name="user_id" value="{{$data->user_id}}"/>
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status">
                                        <option selected>{{$data->status}}</option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>

                                <div class="card-footer">
                                    <button type="submit">Update data</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Form Elements -->
        </div>
    </div>
</div>
@endsection
