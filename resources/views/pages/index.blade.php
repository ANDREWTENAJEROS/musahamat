@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <!-- <h2>Musahamat Suppliers Profile</h2> -->
        <img style="width:50%" src="/mlogo.png">
        
        @if(Auth::guest())
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
        @else

        <div class="row">
        </br>
        <div class="col-md-3 ">
        <a href="/supplier/" class="btn btn-default">View all suppliers </a>
        </div>
        <div class="col-md-3 ">
        <a href="/supplier/create" class="btn btn-default">create new supplier entry </a>
        </div>
        <div class="col-md-3 ">
        <a href="/product_lines/" class="btn btn-default">View all Product lines </a>
        </div>
        <div class="col-md-3 ">
        <a href="/product_lines/create" class="btn btn-default">create new product line</a>
        </div>
        </div>
        @endif
    </div>
@endsection
