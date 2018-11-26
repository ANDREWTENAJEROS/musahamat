@extends('layouts.app')

@section('content')
    <a href="/supplier"  class="btn btn-default hidden-print">Go Back</a>
    
    @if(!Auth::guest())
            {!!Form::open(['action' => ['withdrawalsController@destroy', $withdrawals->id], 'method' => 'supplier', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger hidden-print'])}}
            {!!Form::close()!!}
            <a href="/withdrawals/{{$withdrawals->id}}/edit" style="margin-right: 20px;" class="hidden-print btn btn-default pull-right">Edit</a>
    @endif
    <table class="table">
        <tr>
            <td>Date</td>
            <td>:</td>
            <td>{{$withdrawals->date}}</td>
            <td></td>
        </tr>
        <tr>
            <td>To</td>
            <td>    :   </td>
            <td>{{$withdrawals->company}}</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td style=" padding-top: 0px;">{{$withdrawals->address}}</td>
            <td></td>
        </tr>
    </table>
    </br>
    <center><h4 syle="text:bold;">AUTHORITY TO WITHDRAW</h4></center>
    <table class="table table-striped">
        <!-- <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr> -->
        <tr>
            <td>Date to Withdraw</td>
            <td>:</td>
            <td>{{$withdrawals->date_to_withdraw}}</td>
            <td></td>
        </tr>
        <tr>
            <td>Authorize Driver</td>
            <td>:</td>
            <td>{{$withdrawals->driver}}</td>
            <td></td>
        </tr>
        <tr>
            <td>Truck PLate No.</td>
            <td>:</td>
            <td>{{$withdrawals->plate_no}}</td>
            <td></td>
        </tr>
        <tr>
            <td>NOTE</td>
            <td>:</td>
            <td>MUSAHAMAT TRUCKING</td>
            <td></td>
        </tr>
    </table>
    <table class="table table-striped" style="  border: 1px solid #ddd;">
   <tr style="  border: 1px solid #ddd;">
            <th style="">P.O. Reference</th>
            <th>Item Description</th>
            <th>Qty</th>
            <th>UoM</th>
            <th>Destination</th>
        </tr>
        <tr >
        @if(!$withdrawals->kg2==null)
            <td></td>
            <td style="  border: 1px solid #ddd;">{{$withdrawals->kg1}} {{$withdrawals->item1}} - Cover</td>
            <td style="  border: 1px solid #ddd;">{{$withdrawals->qty1}}</td>
            <td style="  border: 1px solid #ddd;">pieces</td>
            <td></td>
        @else
            <td>{{$withdrawals->po_reference}}</td>
            <td style="  border: 1px solid #ddd;">{{$withdrawals->kg1}} {{$withdrawals->item1}} - Cover</td>
            <td style="  border: 1px solid #ddd;">{{$withdrawals->qty1}}</td>
            <td style="  border: 1px solid #ddd;">pieces</td>
            <td>{{$withdrawals->destination}}</td>
        @endif
        </tr>
        @if(!$withdrawals->kg2==null)
        <tr >
            <td>{{$withdrawals->po_reference}}</td>
            <td style="  border: 1px solid #ddd;">{{$withdrawals->kg2}} {{$withdrawals->item2}} - Body</td>
            <td style="  border: 1px solid #ddd;">{{$withdrawals->qty2}}</td>
            <td style="  border: 1px solid #ddd;">pieces</td>
            <td>{{$withdrawals->destination}}</td>
            
        </tr>
        <tr >
            <td></td>
            <td style="  border: 1px solid #ddd;">{{$withdrawals->kg3}} {{$withdrawals->item3}} - Pads</td>
            <td style="  border: 1px solid #ddd;">{{$withdrawals->qty3}}</td>
            <td style="  border: 1px solid #ddd;">pieces</td>
            <td></td>
            
        </tr>
        @endif
        
    </table>
</content>
@endsection