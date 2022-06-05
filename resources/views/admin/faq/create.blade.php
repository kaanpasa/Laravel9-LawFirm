@extends('layouts.adminbase')

@section('title', ' Add FAQ')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection
@section('content')
<div id="page-wrapper" style="background:#FFFFFF">
    <div class="row">
        <div class="col-md-12">
            <!-- Form Elements -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add FAQ
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form role="form" action="{{route('admin.faq.store')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label>Question</label>
                                    <textarea type="text" class="form-control" name="question" placeholder="Question"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Answer</label>
                                    <textarea class="form-control" id="answer" name="answer" placeholder="Answer"></textarea>
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
