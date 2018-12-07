@extends('layouts.app')

@section('content')

    <a href="/withdrawals"  class="btn btn-default hidden-print">Go Back</a>
    <style>
    h5{
        margin-bottom: 0px;
        margin-top: 0px;

    }
    </style>
    <script>print();</script>
    @if(!Auth::guest())
            {!!Form::open(['action' => ['withdrawalsController@destroy', $withdrawals->id], 'method' => 'supplier', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger hidden-print'])}}
            {!!Form::close()!!}
            <a href="/withdrawals/{{$withdrawals->id}}/edit" style="margin-right: 20px;" class="hidden-print btn btn-default pull-right">Edit</a>
    @endif
    <a onclick="print()" class="hidden-print btn btn-default pull-right" style="margin-right: 20px;">Print</a>
    <div class="show-print">
   

    <table class="table" style=" margin-left: 50px; ">
        <tr>
            <td style=" padding-top: 0px; padding-bottom: 0px; " style=" width: 66px; "><h5>Date<h5></td>
            <td style=" padding-top: 0px; padding-bottom: 0px; "><h5>:<h5></td>
            <td style=" padding-top: 0px; padding-bottom: 0px; "><h5>{{$withdrawals->date}}<h5></td>
            <td style=" padding-top: 0px; padding-bottom: 0px; "><h5><h5></td>
        </tr>
        <tr>
            <td style=" padding-top: 0px; padding-bottom: 0px; "><h5>To<h5></td>
            <td style=" padding-top: 0px; padding-bottom: 0px; "><h5>:<h5></td>
            <td style=" padding-top: 0px; padding-bottom: 0px; "><h5 style=" margin-bottom: 0px; ">{{$withdrawals->info2}} {{$withdrawals->company}}<h5></td>
            <td style=" padding-top: 0px; padding-bottom: 0px; "><h5><h5></td>
        </tr>
        <tr>
            <td style=" padding-top: 0px; padding-bottom: 0px; "><h5><h5></td>
            <td style=" padding-top: 0px; padding-bottom: 0px; "><h5><h5></td>
            <td style=" padding-top: 0px; padding-bottom: 0px; "><h5 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawals->address}}<h5></td>
            <td style=" padding-top: 0px; padding-bottom: 0px; "><h5><h5></td>
        </tr>
        
    </table>
    </br>
    <center style=" "><u><h4 syle="text:bold; ">   AUTHORITY TO WITHDRAW   </h4></u></center>
    <table class="table table-striped" style=" margin-left: 50px; ">
        <!-- <tr>
            <th><h5></h5></th>
            <th><h5></h5></th>
            <th><h5></h5></th>
            <th><h5></h5></th>
        </tr> -->
        <tr style=" width: 150px; ">
            <td style=" padding-top: 5px; padding-bottom: 0px;  width: 150px; "><h5>Date to Withdraw<h5></td>
            <td style=" padding-top: 5px; padding-bottom: 0px; text-align:center ; width:50px;"><h5>:<h5></td>
            <td style=" padding-top: 5px; padding-bottom: 0px; text-align:center; border-bottom: 1px solid #ccc; width:30%;"><h5>{{$withdrawals->date_to_withdraw}}<h5></td>
            <td style=" padding-top: 5px; padding-bottom: 0px; "><h5><h5></td>
        </tr>
        <tr>
            <td style=" padding-top: 5px; padding-bottom: 0px; "><h5>Authorize Driver<h5></td>
            <td style=" padding-top: 5px; padding-bottom: 0px; text-align:center;"><h5>:<h5></td>
            <td style=" padding-top: 5px; padding-bottom: 0px; text-align:center; border-bottom: 1px solid #ccc;"><h5>{{$withdrawals->driver}}<h5></td>
            <td style=" padding-top: 5px; padding-bottom: 0px; "><h5><h5></td>
        </tr>
        <tr>
            <td style=" padding-top: 5px; padding-bottom: 0px; "><h5>Truck PLate No.<h5></td>
            <td style=" padding-top: 5px; padding-bottom: 0px; text-align:center;"><h5>:<h5></td>
            <td style=" padding-top: 5px; padding-bottom: 0px; text-align:center; border-bottom: 1px solid #ccc;"><h5>{{$withdrawals->plate_no}}<h5></td>
            <td style=" padding-top: 5px; padding-bottom: 0px; "><h5><h5></td>
        </tr>
        <tr>
            <td style=" padding-top: 5px; padding-bottom: 0px; "><h5>NOTE<h5></td>
            <td style=" padding-top: 5px; padding-bottom: 0px; text-align:center;"><h5>:<h5></td>
            <td style=" padding-top: 5px; padding-bottom: 0px; text-align:center; border-bottom: 1px solid #ccc;"><h5>MUSAHAMAT TRUCKING<h5></td>
            <td style=" padding-top: 5px; padding-bottom: 0px; "><h5><h5></td>
        </tr>
    </table>
    <table class="table table-striped" style="  border: 1px solid #ddd; margin-left: 40px; width: 90%; ">
   <tr style="  border: 1px solid #ddd; ">
          @if(!$withdrawals->kg3==null)
            <th style=""><h5 style=" margin-top: 0px; margin-bottom: 0px; ">P.O. Reference</h5></th>
            <th><h5 style=" margin-top: 0px; margin-bottom: 0px; ">Item Description</h5></th>
            <th><h5 style=" margin-top: 0px; margin-bottom: 0px; ">Qty</h5></th>
            <th><h5 style=" margin-top: 0px; margin-bottom: 0px; ">UoM</h5></th>
            <th><h5 style=" margin-top: 0px; margin-bottom: 0px; ">Destination</h5></th>
            @else
        <!-- for anaco crates -->
            <th><h5 style=" margin-top: 0px; margin-bottom: 0px; ">Item Description</h5></th>
            <th><h5 style=" margin-top: 0px; margin-bottom: 0px; ">Qty</h5></th>
            <th><h5 style=" margin-top: 0px; margin-bottom: 0px; ">UoM</h5></th>
            <th style=""><h5 style=" margin-top: 0px; margin-bottom: 0px; ">No. of Pallets</h5></th>
            <th><h5 style=" margin-top: 0px; margin-bottom: 0px; ">Destination</h5></th>
            @endif
        </tr>
        <tr >
        @if(!$withdrawals->kg3==null)
                <!-- for set -->
            <td style=" padding-top: 5px; padding-bottom: 0px; "><h5><h5></td>
            <td style=" padding-top: 5px; padding-bottom: 0px; border: 1px solid #ddd;"><h5 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawals->kg1}} {{$withdrawals->item1}} - Cover<h5></td>
            <td style=" padding-top: 5px; padding-bottom: 0px; border: 1px solid #ddd;"><h5 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawals->qty1}}<h5></td>
            <td style=" padding-top: 5px; padding-bottom: 0px; border: 1px solid #ddd;"><h5 style=" margin-top: 0px; margin-bottom: 0px; ">pieces<h5></td>
            <td style=" padding-top: 5px; padding-bottom: 0px; "><h5><h5></td>
        @else
        <!-- for anaco crates -->
            <!-- <td style=" padding-top: 5px; padding-bottom: 0px; text-align:center;"><h5 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawals->po_reference}}<h5></td> -->
            <td style=" padding-top: 5px; padding-bottom: 0px; border: 1px solid #ddd;"><h5 style=" margin-top: 0px; margin-bottom: 0px; "> {{$withdrawals->item1}} <h5></td>
            <td style=" padding-top: 5px; padding-bottom: 0px; border: 1px solid #ddd;"><h5 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawals->qty1}}<h5></td>
            <td style=" padding-top: 5px; padding-bottom: 0px; border: 1px solid #ddd;"><h5 style=" margin-top: 0px; margin-bottom: 0px; ">pieces<h5></td>
            <td style=" padding-top: 5px; padding-bottom: 0px; border: 1px solid #ddd;"><h5 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawals->kg1}}<h5></td>
            <td style=" padding-top: 5px; padding-bottom: 0px; text-align:center; "><h5 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawals->destination}}<h5></td>
            </tr>
            <tr>
            <!-- <td style=" padding-top: 5px; padding-bottom: 0px; text-align:center;"><h5 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawals->po_reference}}<h5></td> -->
            <td style=" padding-top: 5px; padding-bottom: 0px; border: 1px solid #ddd;"><h5 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawals->item2}} <h5></td>
            <td style=" padding-top: 5px; padding-bottom: 0px; border: 1px solid #ddd;"><h5 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawals->qty2}}<h5></td>
            <td style=" padding-top: 5px; padding-bottom: 0px; border: 1px solid #ddd;"><h5 style=" margin-top: 0px; margin-bottom: 0px; ">pieces<h5></td>
            <td style=" padding-top: 5px; padding-bottom: 0px; border: 1px solid #ddd;"><h5 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawals->kg2}}<h5></td>
            <td style=" padding-top: 5px; padding-bottom: 0px; text-align:center; "><h5 style=" margin-top: 0px; margin-bottom: 0px; "><h5></td>
            
        @endif
        </tr>
        @if(!$withdrawals->kg3==null)
        <tr >
            <td style=" padding-top: 5px; padding-bottom: 0px; text-align:center;"><h5 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawals->po_reference}}<h5></td>
            <td style=" padding-top: 5px; padding-bottom: 0px; border: 1px solid #ddd;"><h5 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawals->kg2}} {{$withdrawals->item2}} - Body<h5></td>
            <td style=" padding-top: 5px; padding-bottom: 0px; border: 1px solid #ddd;"><h5 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawals->qty2}}<h5></td>
            <td style=" padding-top: 5px; padding-bottom: 0px; border: 1px solid #ddd;"><h5 style=" margin-top: 0px; margin-bottom: 0px; ">pieces<h5></td>
            <td style=" padding-top: 5px; padding-bottom: 0px; text-align:center; "><h5 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawals->destination}}<h5></td>
            
        </tr>
        <tr >
            <td style=" padding-top: 5px; padding-bottom: 0px; "><h5><h5></td>
            <td style=" padding-top: 5px; padding-bottom: 0px; border: 1px solid #ddd;"><h5 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawals->kg3}} {{$withdrawals->item3}} - Pads<h5></td>
            <td style=" padding-top: 5px; padding-bottom: 0px; border: 1px solid #ddd;"><h5 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawals->qty3}}<h5></td>
            <td style=" padding-top: 5px; padding-bottom: 0px; border: 1px solid #ddd;"><h5 style=" margin-top: 0px; margin-bottom: 0px; ">pieces<h5></td>
            <td style=" padding-top: 5px; padding-bottom: 0px; "><h5><h5></td>
            
        </tr>
        @endif
       

        
    </table>
    <table class="table" style=" margin-left: 50px; ">
    </br>
        <tr >
            <td style=" padding-top: 5px; padding-bottom: 0px; "><h5>Prepared by:<h5></td>
            <td style=" padding-top: 5px; padding-bottom: 0px; " style=" height: 66px; width: 116px; "></td>
            <td style=" padding-top: 5px; padding-bottom: 0px; " ><h5  >Approved by:<h5></td>
            
        </tr>
        <tr>
            <td style=" padding-top: 5px; padding-bottom: 5px; "><h5><h5></td>
            <td style=" padding-top: 5px; padding-bottom: 5px; "></td>
            <td style=" padding-top: 5px; padding-bottom: 5px; "><h5><h5></td>
        </tr>
        <tr >
            <td style=" padding-top: 0px; padding-bottom: 0px; " style=" padding-top: 0px; padding-bottom: 0px; "><h5 style=" margin-top: 0px; margin-bottom: 0px; ">Febbie Lora:<h5></td>
            <td style=" padding-top: 0px; padding-bottom: 0px; "></td>
            <td style=" padding-top: 0px; padding-bottom: 0px; " style=" padding-top: 0px; padding-bottom: 0px; "><h5 style=" margin-top: 0px; margin-bottom: 0px; ">Liezel Ann Arceno<h5></td>
            
        </tr>
        <tr >
            <td style=" padding-top: 0px; padding-bottom: 0px; " style=" padding-top: 0px; padding-bottom: 0px; "><h5 style=" margin-top: 0px; margin-bottom: 0px; ">Consolidator<h5></td>
            <td style=" padding-top: 0px; padding-bottom: 0px; "></td>
            <td style=" padding-top: 0px; padding-bottom: 0px; " style=" padding-top: 0px; padding-bottom: 0px; "><h5 style=" margin-top: 0px; margin-bottom: 0px; ">Manager<h5></td>
            
        </tr>
        <tr >
            <td style=" padding-top: 0px; padding-bottom: 0px; " style=" padding-top: 0px; padding-bottom: 0px; "><h5 style=" margin-top: 0px; margin-bottom: 0px; ">Materials Procurement & Supply<h5></td>
            <td style=" padding-top: 0px; padding-bottom: 0px; "></td>
            <td style=" padding-top: 0px; padding-bottom: 0px; " style=" padding-top: 0px; padding-bottom: 0px; "><h5 style=" margin-top: 0px; margin-bottom: 0px; "> Materials Procurement & Supply<h5></td>
            
        </tr>
        </table>

@endsection