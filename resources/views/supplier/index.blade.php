@extends('layouts.app')

@section('content')
    <h1>Supplier</h1>
    @if(count($supplier) > 0)
        @foreach($supplier as $supplier)
            <div class="well">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                    <h2> <a href="/supplier/{{$supplier->id}}"> {{$supplier->business_name}}</a> </h2>
                    </div>
                    <div class="col-md-8 col-sm-8">
                    <h4>Category:  {{$supplier->business_category}} </h4>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No supplier found</p>
    @endif
@endsection