@extends('layouts.app')

@section('content')
    <h1>Create transactions detail</h1>
    {!! Form::open(['action' => 'transactions_detailsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
            {{Form::label('companies', 'transaction ID')}}
            {!! Form::select('companies', $companies) !!}

        </div>
        <div class="form-group">
            {{Form::label('room_id', 'Room Number')}}
            {!! Form::select('room_id', array('101' => '101', '102' => '102','201' => '201','202' => '202',)) !!}
            
        </div>

       
        <div class="form-group">
            {{Form::label('start_date', 'start date')}}
            {{Form::date('start_date', '', ['class' => 'form-control', 'placeholder' => 'start date'])}}
            
        </div>
        <div class="form-group">
            {{Form::label('end_date', 'end date')}}
            {{Form::date('end_date', '', ['class' => 'form-control', 'min'=>'$todayDate', 'placeholder' => 'end date'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection