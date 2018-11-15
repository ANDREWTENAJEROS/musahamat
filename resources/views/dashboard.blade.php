@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">My Transactions</div>

                <div class="panel-body">
                    <a href="/transactions/create" class="btn btn-primary">Create transaction</a>
                    <h3>Your transactions</h3>
                    @if(count($transactions) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Transaction number</th>
                                <th>Guest Name</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($transactions as $transaction)
                                <tr>
                                    <td><a href="/transactions/{{$transaction->id}}">{{$transaction->id}}</a></td>
                                    <td><a href="/transactions/{{$transaction->id}}">{{$transaction->guest_id}}</a></td>
                                    <td><a href="/transactions/{{$transaction->id}}/edit" class="btn btn-default">Edit</a></td>
                                    <td>
                                        {!!Form::open(['action' => ['TransactionsController@destroy', $transaction->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You have no transactions</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
