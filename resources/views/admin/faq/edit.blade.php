@extends('layouts.adminbase')

@section('title', 'Edit FAQ')

@section('head')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js" rel="stylesheet">
@endsection

@section('content')
<div id="page-wrapper" style="background:#FFFFFF">
    <h1>Edit FAQ</h1>
    <div class="row">
        <div class="col-md-12">
            <!-- Form Elements -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit FAQ
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form role="form" action="{{route('admin.faq.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label>Id</label>
                                    <input type="text" class="form-control" name="id" value="{{$data->id}}"/>
                                </div>

                                <div class="form-group">
                                    <label>Question</label>
                                    <input type="text" class="form-control" name="question" value="{{$data->question}}"/>
                                </div>

                                <div class="form-group">
                                    <label>Answer</label>
                                    <textarea class="form-control" id="answer" name="answer" value="{{$data->answer}}">{{$data->answer}}</textarea>
                                    <script>
                                        ClassicEditor
                                            .create( document.querySelector( '#answer' ) )
                                            .then( editor => {
                                                console.log( editor );
                                            } )
                                            .catch( error => {
                                                console.error( error );
                                            } );
                                    </script>
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
@section('foot')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
        $(function(){
            $('.textarea').summernote()
        })
    </script>
@endsection

