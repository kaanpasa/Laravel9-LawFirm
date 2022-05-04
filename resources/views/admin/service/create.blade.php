@extends('layouts.adminbase')

@section('title', ' Add Service')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection
@section('content')
<div id="page-wrapper" style="background:#FFFFFF">
    <h1>Add Service</h1>
    <div class="row">
        <div class="col-md-12">
            <!-- Form Elements -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add Service
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form role="form" action="{{route('admin.service.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Category</label>

                                    <select class="form-control select2" name="category_id">
                                        @foreach($data as $rs)
                                            <option value="{{$rs->id}}">{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Title" />
                                </div>

                                <div class="form-group">
                                    <label>Keywords</label>
                                    <input type="text" class="form-control" name="keywords" placeholder="Keywords" />
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" class="form-control" name="description" placeholder="Description" />
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
                                    <label>Detail</label>
                                    <textarea class="form-control" id="detail" name="detail">

                                    </textarea>
                                    <script>
                                        ClassicEditor
                                            .create( document.querySelector( '#detail' ) )
                                            .then( editor => {
                                                console.log( editor );
                                            } )
                                            .catch( error => {
                                                console.error( error );
                                            } );
                                    </script>
                                </div>

                                <div class="form-group">
                                    <label>User Id</label>
                                    <input type="text" class="form-control" name="user_id" placeholder="User Id" />
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status">
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>

                                <div class="card-footer">
                                    <button type="submit">Save</button>
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
