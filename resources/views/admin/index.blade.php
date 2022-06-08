@extends('layouts.adminbase')

@section('title', 'Admin Panel')

@section('content')

        <div id="page-inner" class="col-lg-9 container-fluid">
                <div>
                    <h2>Index Page</h2>
                    <h5>Welcome {{Auth::user()->name}} , Love to see you back. </h5>
                </div>
            <hr>
        </div>

@endsection
