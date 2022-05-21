@extends('layouts.adminbase')

@section('title', 'Add Category')<!-- Title data-->

@section('content')
<div id="page-wrapper" style="background:#FFFFFF"><!--Page Wrapper-->
    <h1>Add Category</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Add Category</div><!--Panel Heading-->
                <div class="panel-body"><!--Panel Body-->
                    <div class="row">
                        <div class="col-md-12">
                            <form role="form" action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data"><!--Form Start-->
                                @csrf
                                <div class="form-group">
                                    <label>Parent Category</label><!--Parent Category form element-->
                                    <select class="form-control" name="parent_id">
                                        <option value="0" selected="selected">Main Category</option>
                                        <!--Taking Parent Category titles from database-->
                                        @foreach($data as $rs)
                                            <option value="{{$rs->id}}">{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group"><!--Title form element-->
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Title" />
                                </div>

                                <div class="form-group"><!--Keyword form element-->
                                    <label>Keywords</label>
                                    <input type="text" class="form-control" name="keywords" placeholder="Keywords" />
                                </div>

                                <div class="form-group"><!--Description form element-->
                                    <label>Description</label>
                                    <input type="text" class="form-control" name="description" placeholder="Description" />
                                </div>

                                <div class="form-group"><!--Image form element-->
                                    <label for="exampleInputFile">Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image"><!--Choosing image button-->
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group"><!--Status form element-->
                                    <label>Status</label>
                                    <select class="form-control" name="status">
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>

                                <div class="card-footer"><!--Save button form element-->
                                    <button type="submit">Save</button>
                                </div>
                            </form><!--Form End-->
                        </div>
                    </div>
                </div><!--Panel Body End-->
            </div>
        </div>
    </div>
</div><!--Page Wrapper End-->
@endsection
