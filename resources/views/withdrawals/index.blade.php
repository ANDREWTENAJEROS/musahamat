@extends('layouts.app')

@section('content')
    
<div >   
<div class="row">
    <div class="col-md-2">
        <a href="/withdrawals/create1" class="hidden-print btn btn-default " style="margin-right: 20px;">Withdraw Crates</a>
    </div> 
        <div class="col-md-2">
    <a href="/withdrawals/create" class="hidden-print btn btn-default" style="margin-right: 20px;">Withdraw Boxes</a>
    </div> 
<div class="col-md-2">
    <form action="{{route('withdrawals.index')}}" method="GET" role="search">
        {{-- {!! Form::open(['action' => 'withdrawalsController@search', 'method' => 'POST', 'role' => 'search'])!!} --}}
        {{csrf_field()}}
        
    

            
                <input class="hidden-print form-control " type="text" name="search_value" style="margin-bottom: 10px;" 
                placeholder="View on week" value="{{ isset($search_value) ? $search_value : '' }}">
            </div> 
            <div class="col-md-2">
                <button style="padding-bottom:8px"class="hidden-print btn btn-default">View
                    <i class="fs-12 fa fa-search" aria-hidden="true"></i>
                </button>
            </div> 
      

<div class="col-md-2">
 <a onclick="print()" class="hidden-print btn btn-default " style="margin-right: 20px;">Print Summary</a>
    <br><br>
    </div>
</div>
 <table class="table table-striped" style="margin-bottom: 0px;">
     
              <tr class="hidden-print">
              <th><h7>Week</h7> </th>
              <th><h7>Date Prepared</h7> </th>
              <th><h7>Boxplant</h7> </th>
              <th><h7>Date to Withdraw</h7> </th>
              <th><h7>Authorized Driver</h7> </th>
              <th><h7>Truck Plate no.</h7> </th>
              <th><h7>Reference</h7> </th>
              <th><h7>Item Description</h7></th>
              <th><h7>Qty</h7></th>
              <th><h7>UoM</h7></th>
              <th><h7>Destination</h7></th>
              <th></th>


                </tr>
                <tr class="visible-print">
                <!-- <tr> -->
                <th><h7>Week</h7> </th>
              <th><h7>Date Prepared</h7> </th>
              <th><h7>Boxplant</h7> </th>
              <th><h7>Date to Withdraw</h7> </th>
              <th><h7>Authorized Driver</h7> </th>
              <th><h7>Truck Plate no.</h7> </th>
              <th><h7>Reference</h7> </th>
              <th><h7>Item Description</h7></th>
              <th><h7>Qty</h7></th>
              <th><h7>UoM</h7></th>
              <th><h7>Destination</h7></th>
                </tr>
      
    @if(count($withdrawals) > 0)
        @foreach($withdrawals as $withdrawal)
       
                <tr class="hidden-print">
                <?php  $dayOfWeek = date("W", strtotime($withdrawal->date)); ?>
                    <td><h7>{{$dayOfWeek}} </h7></td>
                    <th><h7>{{$withdrawal->date}}</h7> </th>
                    <th><h7>{{$withdrawal->info1}}</h7> </th>
                    <th><h7>{{$withdrawal->date_to_withdraw}}</h7> </th>
                    <th><h7>{{$withdrawal->driver}}</h7> </th>
                    <th><h7>{{$withdrawal->plate_no}}</h7> </th>
                    <th><h7><a href="/withdrawals/{{$withdrawal->id}}">{{$withdrawal->po_reference}}</a></h7> </th>
                    <th><h7>{{$withdrawal->kg1}} {{$withdrawal->item1}}</h7></th>
                    <th><h7>{{$withdrawal->qty1}}</h7></th>
                    @if($withdrawal->qty3!=null)
                    <th><h7 style=" ">SET</h7></th>
                    @else
                    <th><h7 style=" ">PALLETS</h7></th>
                    @endif
                    <th><h7>{{$withdrawal->destination}}</h7></th>
                    <th><a href="/withdrawals/{{$withdrawal->id}}"  class="btn btn-default hidden-print">Print ATW</a></th>

                <tr>
        
               <tr class="visible-print">
             
                     <td><h6 style=" margin-top: 5px; margin-bottom: 5px; ">{{$dayOfWeek}} </h6></td>
                    <th><h6 style=" margin-top: 5px; margin-bottom: 5px; ">{{$withdrawal->date}}</h6> </th>
                    <th><h6 style=" margin-top: 5px; margin-bottom: 5px; ">{{$withdrawal->info1}}</h6> </th>
                    <th><h6 style=" margin-top: 5px; margin-bottom: 5px; ">{{$withdrawal->date_to_withdraw}}</h6> </th>
                    <th><h6 style=" margin-top: 5px; margin-bottom: 5px; ">{{$withdrawal->driver}}</h6> </th>
                    <th><h6 style=" margin-top: 5px; margin-bottom: 5px; ">{{$withdrawal->plate_no}}</h6> </th>
                    <th><h6 style=" margin-top: 5px; margin-bottom: 5px; "><a href="/withdrawal/{{$withdrawal->id}}">{{$withdrawal->po_reference}}</a></h6> </th>
                    <th><h6 style=" margin-top: 5px; margin-bottom: 5px; ">{{$withdrawal->kg1}} {{$withdrawal->item1}}</h6></th>
                    <th><h6 style=" margin-top: 5px; margin-bottom: 5px; ">{{$withdrawal->qty1}}</h6></th>
                    @if($withdrawal->qty3!=null)
                    <th><h6 style=" margin-top: 5px; margin-bottom: 5px; ">SET</h6></th>
                    @else
                    <th><h6 style=" margin-top: 5px; margin-bottom: 5px; ">PALLETS</h6></th>
                    @endif
                    <th><h6 style=" margin-top: 5px; margin-bottom: 5px; ">{{$withdrawal->destination}}</h6></th>
                <tr>
       
        @endforeach
    @else
        <p>No withdrawals found</p>
    @endif </table>
    

 <div class="pagination flex-m flex-w p-t-26 hidden-print" style="margin-right:190px; ">
 {{$withdrawals->links()}}		
</div>
</div>


@endsection