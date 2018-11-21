@extends('layouts.app')

@section('content')
    <h1>Suppliers</h1>     
   
        </br>
    @if(count($supplier) > 0)
        @foreach($supplier as $supplier)
            <div class="well" style=" padding-bottom: 10px; padding-top: 5px; ">
                <div class="row">
                    <div class="col-md-8">
                    <h4> <a href="/supplier/{{$supplier->id}}"> {{$supplier->business_name}}</a> </h4>
                    </div>
                    <div class="col-md-4">
                    <h4>Category:  {{$supplier->business_category}} </h4>
                    
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No supplier found</p>
    @endif
@endsection