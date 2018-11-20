@extends('layouts.app')

@section('content')
  
    <hr>
   
    @if(!Auth::guest())
        @if(Auth::user()->id == $transactions_details->user_id)
        {{
            session_start();
         $_SESSION['superhero'] = "batman";

        }}
            <a href="/transactions_details/{{$transactions_details->id}}/edit" class="btn btn-default">Edit</a>

            {!!Form::open(['action' => ['transactions_detailsController@destroy', $transactions_details->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection
