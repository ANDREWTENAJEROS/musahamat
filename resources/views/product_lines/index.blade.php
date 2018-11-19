@extends('layouts.app')

@section('content')
    <h1>Product lines</h1>
    @if(count($product_lines) > 0)
        @foreach($product_lines as $product_lines)
            <div class="well">
                <div class="row">
                    <!-- <div class="col-md-4 col-sm-4">

                    </div> -->
                    <div class="col-md-2">
                       Name: {{$product_lines->product_line_name}}
                    </div>
                    <div class="col-md-4">
                    certificate: {{$product_lines->certificate}}
                    </div>
                    <div class="col-md-2">
                    expiration date: {{$product_lines->expiration_date}}
                    </div>
                    <div class="col-md-2">
                    MFL Price: {{$product_lines->MFL_price}}
                    </div>
                    <div class="col-md-2">
                    Agritech Price: {{$product_lines->agritech_price}}
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No product lines found</p>
    @endif
@endsection