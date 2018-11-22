@extends('layouts.app')

@section('content')
    <h1></h1>
    <a href="/supplier/{{$_SESSION['bid']}}"  class="btn btn-default hidden-print">Go Back</a>

    {!! Form::open(['action' => 'product_linesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        </div>
       <h3>Add Document for {{$_SESSION['id']}}</h3>
       <div id="divCheckbox" style="display: none;">
                    {{Form::label('supplier', 'Supplier id:')}}
                    {{Form::text('supplier', $_SESSION['bid'], ['class' => 'form-control', 'required' => 'required', 'placeholder' => ' '])}}
        </div>

        <div class="">
            
                </div>

                 <div class="row">
            <div class="col-md-8">
            {{Form::label('certificate', 'certificate:')}}
            {{Form::text('certificate', '', ['class' => 'form-control', 'required' => 'required', 'placeholder' => ' '])}}
             
                    </div>
            <div class="col-md-4">
            {{Form::label('expiration_date', 'expiration date')}}
            {{Form::date('expiration_date', '', ['class' => 'form-control', 'placeholder' => 'expiration date'])}}
            </div>
        </div>

        <hr>
        <div class="row">
        <h4>Product Line</h4>
            <div class="col-md-4">
                         {{Form::label('product_line_name', 'Product line name:')}}
                        {{Form::text('product_line_name', '', ['class' => 'form-control', 'placeholder' => ' '])}}
                        </div>
            <div class="col-md-4">
                        {{Form::label('MFL_price', 'MFL Price:')}}
                        {{Form::number('MFL_price', '', ['class' => 'form-control', 'placeholder' => '₱'])}}
            </div>
            <div class="col-md-4">
                        {{Form::label('agritech_price', 'Agrotech price:')}}
                        {{Form::number('agritech_price', '', ['class' => 'form-control', 'placeholder' => '₱'])}}
            </div>
        </div>
       
</br>
        
        {{Form::submit('add', ['class'=>'btn btn-primary pull-right'])}}
    {!! Form::close() !!}
@endsection