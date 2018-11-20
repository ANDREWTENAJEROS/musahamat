@extends('layouts.app')

@section('content')
    <h1></h1>
    {!! Form::open(['action' => 'product_linesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        </div>
        <!-- <div class="form-group">
            {{Form::label('room_id', 'Room Number')}}
            {!! Form::select('room_id', array('101' => '101', '102' => '102','201' => '201','202' => '202',)) !!}
            
        </div> -->
        <script>
            var storedValue = localStorage.getItem("server");
            console.log(storedValue);
        </script>

       
       <div class="">
                    {{Form::label('supplier', 'Supplier name:')}}
                    {{Form::text('supplier', $_SESSION['bid'], ['class' => 'form-control', 'required' => 'required', 'placeholder' => ' '])}}
        </div>

        <div class="">
                    {{Form::label('product_line_name', 'Product line:')}}
                    {{Form::text('product_line_name', '', ['class' => 'form-control', 'required' => 'required', 'placeholder' => ' '])}}
        </div>
        <div class="row">
            <div class="col-md-6">
                        {{Form::label('MFL_price', 'MFL Price:')}}
                        {{Form::number('MFL_price', '', ['class' => 'form-control', 'required' => 'required', 'placeholder' => '₱'])}}
            </div>
            <div class="col-md-6">
                        {{Form::label('agritech_price', 'Agritech price:')}}
                        {{Form::number('agritech_price', '', ['class' => 'form-control', 'required' => 'required', 'placeholder' => '₱'])}}
            </div>
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
</br>
        
        {{Form::submit('add', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection