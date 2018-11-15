@extends('layouts.app')

@section('content')
    <h1>Edit transactions_detail</h1>
    {!! Form::open(['action' => ['transactions_detailsController@update', $transactions_details->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
            {{Form::label('room_id', 'room_id')}}
            {{Form::text('room_id', $transactions_details->room_id, ['class' => 'form-control', 'placeholder' => 'Room Number'])}}
        </div>
        <div class="form-group">
            {{Form::label('start_date', 'start_date')}}
            {{Form::date('start_date', '', ['class' => 'form-control', 'placeholder' => 'start date'])}}
        </div>
        <div class="form-group">
            {{Form::label('end_date', 'end_date')}}
            {{Form::date('end_date', '', ['class' => 'form-control', 'placeholder' => 'end date'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection