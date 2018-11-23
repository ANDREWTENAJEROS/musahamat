@extends('layouts.app')

@section('content')
    
    <a href="/supplier/{{$product_lines->supplier}}"  class="btn btn-default hidden-print">Go Back</a>
<h2>Edit certificate</h2>
    {!! Form::open(['action' => ['product_linesController@update', $product_lines->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    

        <div class="">
            
                </div>

                 <div class="row">
            <div class="col-md-8">
            {{Form::label('certificate', 'certificate:')}}
            {{Form::text('certificate', $product_lines->certificate, ['class' => 'form-control', 'placeholder' => '₱'])}}
             
                    </div>
            <div class="col-md-4">
            {{Form::label('expiration_date', 'expiration date')}}
            {{Form::date('expiration_date', $product_lines->expiration_date, ['class' => 'form-control', 'placeholder' => 'expiration date'])}}
            </div>
        </div>

        <hr>
        <div class="row">
        <h4>Product Line</h4>
            <div class="col-md-4">
                         {{Form::label('product_line_name', 'Product line name:')}}
                         {{Form::text('product_line_name', $product_lines->product_line_name, ['class' => 'form-control', 'placeholder' => ' '])}}
                        </div>
            <div class="col-md-4">
                        {{Form::label('MFL_price', 'MFI Price:')}}
                        {{Form::number('MFL_price', $product_lines->MFL_price, ['class' => 'form-control', 'placeholder' => '₱'])}}
            </div>
            <div class="col-md-4">
                        {{Form::label('agritech_price', 'Agrotech price:')}}
                        {{Form::number('agritech_price', $product_lines->agritech_price, ['class' => 'form-control', 'placeholder' => '₱'])}}
            </div>
        </div>
</br>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection