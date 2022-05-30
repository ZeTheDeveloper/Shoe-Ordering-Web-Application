@extends('layouts.auth')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <a href="logout">Log Out</a> <br>
                <div class="card-body">
                    Hi there, awesome customer for this site!
                    Hello customer {{session('customer')}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
