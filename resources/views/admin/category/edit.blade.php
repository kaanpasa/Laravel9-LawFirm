@extends('layouts.adminbase')

@section('title', 'Edit Category: '.$data->title)<!--Title Data-->

@section('content')
<div id="page-wrapper" style="background:#FFFFFF"><!--Page Wrapper-->
    <h1>Edit Category: {{$data->title}}</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Category</div><!--Panel Heading-->
                <div class="panel-body"><!--Panel Body-->
                    <div class="row">
                        <div class="col-md-12">
                            <form role="form" action="{{route('admin.category.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data"><!--Form Start-->
                                @csrf
                                <div class="form-group">
                                    <label>Parent Category</label><!--Parent Category form element-->
                                    <select class="form-control select2" name="parent_id">
                                        <option value="0" selected="selected">Main Category</option>
                                        <!--Taking Parent Category titles from database-->
                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}" @if ($rs->id == $data->parent_id) selected="selected" @endif><!--Checking for if there is image or not-->
                                                {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group"><!--Title form element-->
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title" value="{{$data->title}}"/>
                                </div>

                                <div class="form-group"><!--Keyword form element-->
                                    <label>Keywords</label>
                                    <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}"/>
                                </div>

                                <div class="form-group"><!--Description form element-->
                                    <label>Description</label>
                                    <textarea id="des" type="text" class="form-control" name="description" value="{{$data->description}}">{!! $data->description !!}</textarea>
                                    <script>
                                        ClassicEditor
                                            .create( document.querySelector( '#des' ) )
                                            .then( editor => {
                                                console.log( editor );
                                            } )
                                            .catch( error => {
                                                console.error( error );
                                            } );
                                    </script>
                                </div>

                                <div class="form-group"><!--Image form element-->
                                    <label>Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image"><!--Choosing image button-->
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group"><!--Status form element-->
                                    <label>Status</label>
                                    <select class="form-control" name="status">
                                        <option selected>{{$data->status}}</option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>

                                <div class="card-footer"><!--Save button form element-->
                                    <button type="submit">Update data</button>
                                </div>
                            </form><!--Form end-->
                        </div>
                    </div>
                </div><!--Panel body end-->
            </div>
        </div>
    </div>
</div><!--Page Wrapper-->
@endsection
