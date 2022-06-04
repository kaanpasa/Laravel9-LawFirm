@extends('layouts.adminbase')

@section('title', 'Settings')

@section('head')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection

@section('content')

        <div id="page-inner" class="col-lg-9 container-fluid">
                <div>
                    <h1 style="color: #ff0000">Welcome to Settings Page</h1>
                </div>
            <hr>

            <div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Settings
                    </div>
                    <div class="panel-body">
                        <ul class="nav nav-tabs">
                            <li href="#general" data-toggle="tab" class="active">
                                <a class="nav-link active" id="custom-tabs-one-general-tab" data-toggle="pill" href="#custom-tabs-one-general" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">General</a>
                            </li>
                            <li href="#smtp" data-toggle="tab">
                                <a class="nav-link" id="custom-tabs-one-smtp-tab" data-toggle="pill" href="#custom-tabs-one-smtp" role="tab" aria-controls="custom-tabs-one-smtp" aria-selected="false">Smtp Email</a>
                            </li>
                            <li href="#social" data-toggle="tab">
                                <a class="nav-link" id="custom-tabs-one-social-tab" data-toggle="pill" href="#custom-tabs-one-social" role="tab" aria-controls="custom-tabs-one-social" aria-selected="false">Social Media</a>
                            </li>
                            <li href="#about" data-toggle="tab">
                                <a class="nav-link" id="custom-tabs-one-about-tab" data-toggle="pill" href="#custom-tabs-one-about" role="tab" aria-controls="custom-tabs-one-about" aria-selected="false">About Us</a>
                            </li>
                            <li href="#contact" data-toggle="tab">
                                <a class="nav-link" id="custom-tabs-one-contact-tab" data-toggle="pill" href="#custom-tabs-one-contact" role="tab" aria-controls="custom-tabs-one-contact" aria-selected="false">Contact Page</a>
                            </li>
                            <li href="#references" data-toggle="tab">
                                <a class="nav-link" id="custom-tabs-one-references-tab" data-toggle="pill" href="#custom-tabs-one-references" role="tab" aria-controls="custom-tabs-one-references" aria-selected="false">References</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="custom-tabs-one-tabContent">
                            <div class="tab-pane fade active in" id="general">
                                <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" value="{{$data->title}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Keywords</label>
                                    <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" name="description" value="{{$data->description }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Company</label>
                                    <input type="text" name="company" value="{{$data->company}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name="address" value="{{$data->address}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone" value="{{$data->phone}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" value="{{$data->email}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control select2" name="status">
                                        <option selected="selected">{{$data->status}}</option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>
                            </div>

                            <div class="tab-pane fade in" id="smtp">
                                <div class="form-group">
                                    <label>Smtp Server</label>
                                    <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Smtp Email</label>
                                    <input type="text" name="smtpemail" value="{{$data->smtpemail}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Smtp Password</label>
                                    <input type="password" name="smtpassword" value="{{$data->smtppassword}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Smtp Port</label>
                                    <input type="number" name="smtpport" value="{{$data->smtpport}}" class="form-control">
                                </div>
                            </div>

                            <div class="tab-pane fade in" id="social">
                                <div class="form-group">
                                    <label>Fax</label>
                                    <input type="text" name="fax" value="{{$data->fax}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Facebook</label>
                                    <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Instagram</label>
                                    <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Twitter</label>
                                    <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Youtube</label>
                                    <input type="text" name="youtube" value="{{$data->youtube}}" class="form-control">
                                </div>
                            </div>

                            <div class="tab-pane fade in" id="about">
                                <div class="form-group">
                                    <label>About Us</label>
                                    <textarea id="abo" name="aboutus" value="{!! $data->aboutus !!}" class="form-control"></textarea>
                                    <script>
                                        ClassicEditor
                                            .create( document.querySelector( '#abo' ) )
                                            .then( editor => {
                                                console.log( editor );
                                            } )
                                            .catch( error => {
                                                console.error( error );
                                            } );
                                    </script>
                                </div>
                            </div>

                            <div class="tab-pane fade in" id="contact">
                                <div class="form-group">
                                    <label>Contact</label>
                                    <textarea id="con" name="contact" value="{{$data->contact}}" class="form-control"></textarea>
                                    <script>
                                        ClassicEditor
                                            .create( document.querySelector( '#con' ) )
                                            .then( editor => {
                                                console.log( editor );
                                            } )
                                            .catch( error => {
                                                console.error( error );
                                            } );
                                    </script>
                                </div>
                            </div>

                            <div class="tab-pane fade in" id="references">
                                <div class="form-group">
                                    <label>References</label>
                                    <textarea id="ref" name="references" value="{{$data->references}}" class="form-control"></textarea>
                                    <script>
                                        ClassicEditor
                                            .create( document.querySelector( '#ref' ) )
                                            .then( editor => {
                                                console.log( editor );
                                            } )
                                            .catch( error => {
                                                console.error( error );
                                            } );
                                    </script>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update Settings</button>
                            </div>
                        </div>
                    </div>
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
