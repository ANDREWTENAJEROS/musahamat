@extends('layouts.app')

@section('content')
    <a href="/transactions_details" class="btn btn-default">Go Back</a>
    <h2>Transaction detail: {{$transactions_details->id}}</h2>
    <h2>Room: {{$transactions_details->room_id}}</h2>
    @if($transactions_details->room_id==101)
    <h3>Room Capacity: <?php $user = DB::table('roomtype')->where('roomtypeid', '1' )->first(); echo $user->capacity;?></h3>
    @elseif($transaction->room_id==102)
    <h3>Room Capacity: <?php $user = DB::table('roomtype')->where('roomtypeid', '1' )->first(); echo $user->capacity;?></h3>
    @elseif($transaction->room_id==201)
    <h3>Room Capacity: <?php $user = DB::table('roomtype')->where('roomtypeid', '2' )->first(); echo $user->capacity;?></h3>
    @elseif($transaction->room_id==202)
    <h3>Room Capacity: <?php $user = DB::table('roomtype')->where('roomtypeid', '2' )->first(); echo $user->capacity;?></h3>
    @else
    <h3>Room Capacity: <?php $user = DB::table('roomtype')->where('roomtypeid', '1' )->first(); echo $user->capacity;?></h3>
    @endif
    <h3>Transaction: {{$transactions_details->transaction_id}}</h3>
    <h3>Start date: {{$transactions_details->start_date}}</h3>
    <h3>end date: {{$transactions_details->end_date}}</h3>
    <h3>Staff: {{$transactions_details->user->name}}</h3>
    <h3>transaction details date: {{$transactions_details->created_at}}</h3>



    <hr>
   
    @if(!Auth::guest())
        @if(Auth::user()->id == $transactions_details->user_id)
            <a href="/transactions_details/{{$transactions_details->id}}/edit" class="btn btn-default">Edit</a>

            {!!Form::open(['action' => ['transactions_detailsController@destroy', $transactions_details->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection
