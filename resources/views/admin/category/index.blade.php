@extends('layouts.adminbase')

@section('title', 'Category List')

@section('content')
    <div id="page-wrapper" style="background:#FFFFFF"><!--Page Wrapper-->
        <a href="{{route('admin.category.create')}}" class="btn btn-success btn-sm">Add Category</a><!--Add category button-->
        <div class="panel panel-default" style="margin-top: 20px">
            <div class="panel-heading">Categories</div><!--Panel Heading-->
            <div class="panel-body"><!--Panel Body-->
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover"><!--Table Start-->
                        <thead><!--Table Head Column-->
                        <tr><!--Table Head Values-->
                            <th>Id</th>
                            <th>Parent</th>
                            <th>Title</th>
                            <th>Descripton</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th style="width: 40px">Edit</th>
                            <th style="width: 40px">Delete</th>
                            <th style="width: 40px">Show</th>
                        </tr>
                        </thead>
                        <tbody><!--Table Body Column-->
                        @foreach( $data as $rs)<!--Table Body values from database-->
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}}</td><!--Parent title from CategoryController-->
                                <td>{{$rs->title}}</td>
                                <td>{{$rs->description}}</td>
                                <td>
                                    @if ($rs->image)<!--Checks if there is image or not-->
                                    <img src="{{Storage::url($rs->image)}}" style="height:40px">
                                    @endif
                                </td>
                                <td>{{$rs->status}}</td>
                                <td><a href="{{route('admin.category.edit',['id'=>$rs->id])}}" class="btn btn-info btn-sm">Edit</a></td><!--Buttons for edit, delete and show category-->
                                <td><a href="{{route('admin.category.destroy',['id'=>$rs->id])}}" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure to delete?')">Delete</a></td>
                                <td><a href="{{route('admin.category.show',['id'=>$rs->id])}}" class="btn btn-success btn-sm">Show</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table><!--Table End-->
                </div>
            </div><!--Panel Body End-->
        </div>
    </div><!--Page Wrapper-->
@endsection
