@extends('layouts.app')

@section('content')
    <h1>Transactions Details</h1>
    @if(count($transactions_details) > 0)
        @foreach($transactions_details as $transactions_detail)
            <div class="well">
                <div class="row">
                    <!-- <div class="col-md-4 col-sm-4">

                    </div> -->
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/transactions_details/{{$transactions_detail->id}}">Transaction detail number: {{$transactions_detail->id}}</a></h3>
                        <h4>Transaction: {{$transactions_detail->transaction_id}}</h4>
                        <h4>room number: {{$transactions_detail->room_id}}</h4>
                        <h4>{{$transactions_detail->created_at}} by {{$transactions_detail->user->name}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        {{$transactions_details->links()}}
    @else
        <p>No transactions_details found</p>
    @endif
@endsection