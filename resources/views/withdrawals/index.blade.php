@extends('layouts.app')

@section('content')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div >   
{!! Form::open(['action' => 'withdrawalsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
<div class="visible-print">
<h6>ATW Summary for Boxes & Crates</h6>
<h6>Weekly Accomplishment Report & Plan (WARP)</h6>


@foreach($withdrawals as $withdrawal)
        <?php $dayOfWeek = date("W", strtotime($withdrawal->date));?> 
@endforeach
@if(count($withdrawals) > 0)
<h6>Week {{$dayOfWeek}}</h6>
@endif

</div>
<ul class="list-inline">
                
              <li><a href="/withdrawals/create1" class="hidden-print btn btn-default " style="margin: 10px; ">Withdraw Crates</a></li>
              <li><a href="/withdrawals/create" class="hidden-print btn btn-default" style="margin: 10px;">Withdraw Boxes</a></li>


              <li>    {{Form::text('findweek','', ['class' => 'form-control hidden-print','min'=>'1','max'=>'52', 'style'=>'margin: 10px; width:80px' , 'required' => 'required' ,'placeholder' => 'week'])}}</li>
              <li>    {{Form::text('findyear', '', ['class' => 'form-control hidden-print', 'style'=>'margin: 10px; width:80px', 'required' => 'required' ,'placeholder' => 'year'])}}</li>
              <li>
                <select name="type" class="form-control hidden-print">
                    <option class="dropdown-item" value="set">Set</option>
                    <option class="dropdown-item" value="pallets">Pallets</option>
                    <option class="dropdown-item" value="All">All</option>
                </select>
              </li>
              <li>
                 {{Form::submit('Search', ['class'=>'btn btn-primary hidden-print', 'style'=>'margin: 10px;'])}}
                 {!! Form::close() !!}
                </li>
              <li><a href="/withdrawals/" class="hidden-print btn btn-default" style="margin: 10px; ">Clear search</a></li>
              <li> <a onclick="print()" class="hidden-print btn btn-default " style="margin: 10px; ">Print Summary</a></li>


</ul>

 <table class="table table-striped table-hover" style="margin-bottom: 0px;">
     
              <tr  class="hidden-print">
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
                <tr class="visible-print">
                <!-- <tr> -->
                <th><h7>Week</h7> </th>
              <th ><h7>Date Prepared</h7> </th>
              <th ><h7>Boxplant</h7> </th>
              <th ><h7>Date to Withdraw</h7> </th>
              <th ><h7>Authorized Driver</h7> </th>
              <th ><h7>Truck Plate no.</h7> </th>
              <th ><h7>Reference</h7> </th>
              <th ><h7>Item Description</h7></th>
              <th ><h7>Qty</h7></th>
              <th ><h7>UoM</h7></th>
              <th ><h7>Destination</h7></th>
                </tr>
      
                </tr>
                <tr  style="border: 1px solid rgb(221, 221, 221);">
                <!-- <tr> -->
                <th><h7></h7> </th>
              <th><h7></h7> </th>
              <th><h7></h7> </th>
              <th><h7></h7> </th>
              <th><h7></h7> </th>
              <th><h7>HKJ1-MABINI</h7> </th>
              <th><h7></h7> </th>
              <th><h7></h7></th>
              <th><h7></h7></th>
              <th><h7></h7></th>
              <th><h7></h7></th>

                </tr>
    @if(count($withdrawals) > 0)
        @foreach($withdrawals as $withdrawal)
        <?php $dayOfWeek = date("W", strtotime($withdrawal->date));?>

                @if($withdrawal->destination=='HKJ1')
                <tr class='clickable-row hidden-print' data-href='/withdrawals/{{$withdrawal->id}}'>

                    <td><h7>
                    @if($withdrawal->week==null)
                      {{$dayOfWeek}}
                    @else
                       {{$withdrawal->week}}
                    @endif
                    </h7></td>
                    <td><h7>{{$withdrawal->date}}</h7> </td>
                    <td><h7>{{$withdrawal->info1}}</h7> </td>
                    <td><h7>{{$withdrawal->date_to_withdraw}}</h7> </td>
                    <td><h7>{{$withdrawal->driver}}</h7> </td>
                    <td style="text-align:center"><h7>{{$withdrawal->plate_no}}</h7> </td>
                    <td><h7><a href="/withdrawals/{{$withdrawal->id}}">{{$withdrawal->po_reference}}</a></h7> </td>
                    @if($withdrawal->qty3!=null)                     
                    <td><h7>{{$withdrawal->kg1}} {{$withdrawal->item1}}</h7></td>                     
                    @else                     
                    <td><h7> {{$withdrawal->item1}}</h7></td>                     
                    @endif
                    <td><h7>{{$withdrawal->qty1}}</h7></ <td>
                    @if($withdrawal->qty3!=null)
                    <td><h7 style=" ">SET</h7></td>
                    @else
                    <td><h7 style=" ">PALLETS</h7></td>
                    @endif
                    <td><h7>{{$withdrawal->destination}}</h7></td>
 
                    

                <tr>
             
               <tr class="visible-print clickable-row"  style="border: 1px solid rgb(221, 221, 221);"    data-href='/withdrawals/{{$withdrawal->id}}'>
             
                     <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$dayOfWeek}} </h6></td>
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->date}}</h6> </td>
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->info1}}</h6> </td>
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->date_to_withdraw}}</h6> </td>
                    <td><h7 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->driver}}</h7> </td>
                    <td style="text-align:center"><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->plate_no}}</h6> </td>
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; "><a href="/withdrawal/{{$withdrawal->id}}">{{$withdrawal->po_reference}}</a></h6> </td>
@if($withdrawal->qty3!=null)                            <td><h7 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->kg1}} {{$withdrawal->item1}}</h7></td>                     @else                                          <td><h8 style=" margin-top: 0px; margin-bottom: 0px; "> {{$withdrawal->item1}}</h8></td>                     @endif
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->qty1}}</h6></td>


                    

                    @if($withdrawal->qty3!=null)
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">SET</h6></td>
                    @else
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">PALLETS</h6></td>
                    @endif
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->destination}}</h6></td>
                <tr>
          @endif
        @endforeach


       

        
    @else
        <td></td><td></td><td></td><td></td><td></td><td><h7>No  ithdrawals for HKJ1</h7></td>
    @endif
    
     <!-- HKJ2 FOREACH -->
    </tr>
                <tr  style="border: 1px solid rgb(221, 221, 221);">
                <!-- <tr> -->
                <th><h7></h7> </th>
              <th><h7></h7> </th>
              <th><h7></h7> </th>
              <th><h7></h7> </th>
              <th><h7></h7> </th>
              <th><h7>HKJ2-TAGDANGUA</h7> </th>
              <th><h7></h7> </th>
              <th><h7></h7></th>
              <th><h7></h7></th>
              <th><h7></h7></th>
              <th><h7></h7></th>

                </tr>
    @if(count($withdrawals) > 0)
        @foreach($withdrawals as $withdrawal)
        <?php $dayOfWeek = date("W", strtotime($withdrawal->date));?>

                @if($withdrawal->destination=='HKJ2')
                <tr class='clickable-row hidden-print'  data-href='/withdrawals/{{$withdrawal->id}}'>

                    <td><h7>
                    @if($withdrawal->week==null)
                      {{$dayOfWeek}}
                    @else
                       {{$withdrawal->week}}
                    @endif
                    </h7></td>
                    <td><h7>{{$withdrawal->date}}</h7> </td>
                    <td><h7>{{$withdrawal->info1}}</h7> </td>
                    <td><h7>{{$withdrawal->date_to_withdraw}}</h7> </td>
                    <td><h7>{{$withdrawal->driver}}</h7> </td>
                    <td style="text-align:center"><h7>{{$withdrawal->plate_no}}</h7> </td>
                    <td><h7><a href="/withdrawals/{{$withdrawal->id}}">{{$withdrawal->po_reference}}</a></h7> </td>
                    @if($withdrawal->qty3!=null)                     <td><h7>{{$withdrawal->kg1}} {{$withdrawal->item1}}</h7></td>                     @else                     <td><h7> {{$withdrawal->item1}}</h7></td>                     @endif
                    <td><h7>{{$withdrawal->qty1}}</h7></td>
                    @if($withdrawal->qty3!=null)
                    <td><h7 style=" ">SET</h7></td>
                    @else
                    <td><h7 style=" ">PALLETS</h7></td>
                    @endif
                    <td><h7>{{$withdrawal->destination}}</h7></td>
 

                <tr>
                
               <tr class="visible-print clickable-row"  style="border: 1px solid rgb(221, 221, 221);" style="border: 1px solid rgb(221, 221, 221);" data-href='/withdrawals/{{$withdrawal->id}}'>
             
                     <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$dayOfWeek}} </h6></td>
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->date}}</h6> </td>
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->info1}}</h6> </td>
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->date_to_withdraw}}</h6> </td>
                    <td><h7 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->driver}}</h7> </td>
                    <td style="text-align:center"><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->plate_no}}</h6> </td>
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; "><a href="/withdrawal/{{$withdrawal->id}}">{{$withdrawal->po_reference}}</a></h6> </td>
@if($withdrawal->qty3!=null)                            <td><h7 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->kg1}} {{$withdrawal->item1}}</h7></td>                     @else                                          <td><h8 style=" margin-top: 0px; margin-bottom: 0px; "> {{$withdrawal->item1}}</h8></td>                     @endif
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->qty1}}</h6></td>
                    @if($withdrawal->qty3!=null)
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">SET</h6></td>
                    @else
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">PALLETS</h6></td>
                    @endif
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->destination}}</h6></td>
                <tr>
       @endif
        @endforeach



        
    @else
        <td></td><td></td><td></td><td></td><td></td><td><h7>No  ithdrawals for HKJ2</h7></td>
    @endif
    
    
     <!-- HKJ3 FOREACH -->
     </tr>
                <tr  style="border: 1px solid rgb(221, 221, 221);">
                <!-- <tr> -->
                <th><h7></h7> </th>
              <th><h7></h7> </th>
              <th><h7></h7> </th>
              <th><h7></h7> </th>
              <th><h7></h7> </th>
              <th><h7>HKJ3-PANTUKAN</h7> </th>
              <th><h7></h7></th>
              <th><h7></h7></th>
              <th><h7></h7></th>
              <th><h7></h7></th>
              <th><h7></h7></th>

                </tr>
    @if(count($withdrawals) > 0)
        @foreach($withdrawals as $withdrawal)
        <?php $dayOfWeek = date("W", strtotime($withdrawal->date));?>

                @if($withdrawal->destination=='HKJ3')
                <tr class='clickable-row hidden-print'  data-href='/withdrawals/{{$withdrawal->id}}'>

                    <td><h7>
                    @if($withdrawal->week==null)
                      {{$dayOfWeek}}
                    @else
                       {{$withdrawal->week}}
                    @endif
                    </h7></td>
                    <td><h7>{{$withdrawal->date}}</h7> </td>
                    <td><h7>{{$withdrawal->info1}}</h7> </td>
                    <td><h7>{{$withdrawal->date_to_withdraw}}</h7> </td>
                    <td><h7>{{$withdrawal->driver}}</h7> </td>
                    <td style="text-align:center"><h7>{{$withdrawal->plate_no}}</h7> </td>
                    <td><h7><a href="/withdrawals/{{$withdrawal->id}}">{{$withdrawal->po_reference}}</a></h7> </td>
                    @if($withdrawal->qty3!=null)                     <td><h7>{{$withdrawal->kg1}} {{$withdrawal->item1}}</h7></td>                     @else                     <td><h7> {{$withdrawal->item1}}</h7></td>                     @endif
                    <td><h7>{{$withdrawal->qty1}}</h7></td>
                    @if($withdrawal->qty3!=null)
                    <td><h7 style=" ">SET</h7></td>
                    @else
                    <td><h7 style=" ">PALLETS</h7></td>
                    @endif
                    <td><h7>{{$withdrawal->destination}}</h7></td>
 

                <tr>
               
               <tr class="visible-print clickable-row"  style="border: 1px solid rgb(221, 221, 221);" data-href='/withdrawals/{{$withdrawal->id}}'>
             
                     <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$dayOfWeek}} </h6></td>
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->date}}</h6> </td>
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->info1}}</h6> </td>
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->date_to_withdraw}}</h6> </td>
                    <td><h7 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->driver}}</h7> </td>
                    <td style="text-align:center"><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->plate_no}}</h6> </td>
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; "><a href="/withdrawal/{{$withdrawal->id}}">{{$withdrawal->po_reference}}</a></h6> </td>
@if($withdrawal->qty3!=null)                            <td><h7 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->kg1}} {{$withdrawal->item1}}</h7></td>                     @else                                          <td><h8 style=" margin-top: 0px; margin-bottom: 0px; "> {{$withdrawal->item1}}</h8></td>                     @endif
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->qty1}}</h6></td>
                    @if($withdrawal->qty3!=null)
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">SET</h6></td>
                    @else
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">PALLETS</h6></td>
                    @endif
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->destination}}</h6></td>
                <tr>
        @endif
        @endforeach



        
    @else
        <td></td><td></td><td></td><td></td><td></td><td><h7>No  ithdrawals for HKJ3</h7></td>
    @endif
    
    
     <!-- HKJ4 FOREACH -->
     </tr>
                <tr  style="border: 1px solid rgb(221, 221, 221);">
                <!-- <tr> -->
                <th><h7></h7> </th>
              <th><h7></h7> </th>
              <th><h7></h7> </th>
              <th><h7></h7> </th>
              <th><h7></h7> </th>
              <th><h7>HKJ4-EXP. PANTUKAN</h7> </th>
              <th><h7></h7></th>
              <th><h7></h7></th>
              <th><h7></h7></th>
              <th><h7></h7></th>
              <th><h7></h7></th>

                </tr>
    @if(count($withdrawals) > 0)
        @foreach($withdrawals as $withdrawal)
        <?php $dayOfWeek = date("W", strtotime($withdrawal->date));?>

                @if($withdrawal->destination=='HKJ4')
                <tr class='clickable-row hidden-print'  data-href='/withdrawals/{{$withdrawal->id}}'>

                    <td><h7>
                    @if($withdrawal->week==null)
                      {{$dayOfWeek}}
                    @else
                       {{$withdrawal->week}}
                    @endif
                    </h7></td>
                    <td><h7>{{$withdrawal->date}}</h7> </td>
                    <td><h7>{{$withdrawal->info1}}</h7> </td>
                    <td><h7>{{$withdrawal->date_to_withdraw}}</h7> </td>
                    <td><h7>{{$withdrawal->driver}}</h7> </td>
                    <td style="text-align:center"><h7>{{$withdrawal->plate_no}}</h7> </td>
                    <td><h7><a href="/withdrawals/{{$withdrawal->id}}">{{$withdrawal->po_reference}}</a></h7> </td>
                    @if($withdrawal->qty3!=null)       
                    <td><h7>{{$withdrawal->kg1}} {{$withdrawal->item1}}</h7></td>
                    @else                     
                    <td><h7> {{$withdrawal->item1}}</h7></td>                    
                    @endif
                    <td><h7>{{$withdrawal->qty1}}</h7></td>
                    @if($withdrawal->qty3!=null)
                    <td><h7 style=" ">SET</h7></td>
                    @else
                    <td><h7 style=" ">PALLETS</h7></td>
                    @endif
                    <td><h7>{{$withdrawal->destination}}</h7></td>
 

                <tr>
               
               <tr class="visible-print clickable-row"  style="border: 1px solid rgb(221, 221, 221);" data-href='/withdrawals/{{$withdrawal->id}}'>
             
                     <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$dayOfWeek}} </h6></td>
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->date}}</h6> </td>
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->info1}}</h6> </td>
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->date_to_withdraw}}</h6> </td>
                    <td><h7 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->driver}}</h7> </td>
                    <td style="text-align:center"><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->plate_no}}</h6> </td>
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; "><a href="/withdrawal/{{$withdrawal->id}}">{{$withdrawal->po_reference}}</a></h6> </td>
@if($withdrawal->qty3!=null)                            <td><h7 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->kg1}} {{$withdrawal->item1}}</h7></td>                     @else                                          <td><h8 style=" margin-top: 0px; margin-bottom: 0px; "> {{$withdrawal->item1}}</h8></td>                     @endif
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->qty1}}</h6></td>
                    @if($withdrawal->qty3!=null)
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">SET</h6></td>
                    @else
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">PALLETS</h6></td>
                    @endif
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->destination}}</h6></td>
                <tr>
        @endif
        @endforeach



        
    @else
        <td></td><td></td><td></td><td></td><td></td><td><h7>No  ithdrawals for HKJ4</h7></td>
    @endif
    
    
     <!-- HKJ5 FOREACH -->
     </tr>
                <tr  style="border: 1px solid rgb(221, 221, 221);">
                <!-- <tr> -->
                <th><h7></h7> </th>
              <th><h7></h7> </th>
              <th><h7></h7> </th>
              <th><h7></h7> </th>
              <th><h7></h7> </th>
              <th><h7>HKJ5-LAMANAN</h7> </th>
              <th><h7></h7> </th>
              <th><h7></h7></th>
              <th><h7></h7></th>
              <th><h7></h7></th>
              <th><h7></h7></th>

                </tr>
    @if(count($withdrawals) > 0)
        @foreach($withdrawals as $withdrawal)
        <?php $dayOfWeek = date("W", strtotime($withdrawal->date));?>

                @if($withdrawal->destination=='HKJ5')
                <tr class='clickable-row hidden-print'  data-href='/withdrawals/{{$withdrawal->id}}'>

                    <td><h7>
                    @if($withdrawal->week==null)
                      {{$dayOfWeek}}
                    @else
                       {{$withdrawal->week}}
                    @endif
                    </h7></td>
                    <td><h7>{{$withdrawal->date}}</h7> </td>
                    <td><h7>{{$withdrawal->info1}}</h7> </td>
                    <td><h7>{{$withdrawal->date_to_withdraw}}</h7> </td>
                    <td><h7>{{$withdrawal->driver}}</h7> </td>
                    <td style="text-align:center"><h7>{{$withdrawal->plate_no}}</h7> </td>
                    <td><h7><a href="/withdrawals/{{$withdrawal->id}}">{{$withdrawal->po_reference}}</a></h7> </td>
                    @if($withdrawal->qty3!=null)                     <td><h7>{{$withdrawal->kg1}} {{$withdrawal->item1}}</h7></td>                     @else                     <td><h7> {{$withdrawal->item1}}</h7></td>                     @endif
                    <td><h7>{{$withdrawal->qty1}}</h7></td>
                    @if($withdrawal->qty3!=null)
                    <td><h7 style=" ">SET</h7></td>
                    @else
                    <td><h7 style=" ">PALLETS</h7></td>
                    @endif
                    <td><h7>{{$withdrawal->destination}}</h7></td>
 

                <tr>
               
               <tr class="visible-print clickable-row"  style="border: 1px solid rgb(221, 221, 221);" data-href='/withdrawals/{{$withdrawal->id}}'>
             
                     <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$dayOfWeek}} </h6></td>
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->date}}</h6> </td>
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->info1}}</h6> </td>
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->date_to_withdraw}}</h6> </td>
                    <td><h7 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->driver}}</h7> </td>
                    <td style="text-align:center"><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->plate_no}}</h6> </td>
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; "><a href="/withdrawal/{{$withdrawal->id}}">{{$withdrawal->po_reference}}</a></h6> </td>
@if($withdrawal->qty3!=null)                            <td><h7 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->kg1}} {{$withdrawal->item1}}</h7></td>                     @else                                          <td><h8 style=" margin-top: 0px; margin-bottom: 0px; "> {{$withdrawal->item1}}</h8></td>                     @endif
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->qty1}}</h6></td>
                    @if($withdrawal->qty3!=null)
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">SET</h6></td>
                    @else
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">PALLETS</h6></td>
                    @endif
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->destination}}</h6></td>
                <tr>
        @endif
        @endforeach



        
    @else
        <td></td><td></td><td></td><td></td><td></td><td><h7>No  ithdrawals for HKJ5</h7></td>
    @endif
    
    
    
     <!-- HKJ6 FOREACH -->
     </tr>
                <tr  style="border: 1px solid rgb(221, 221, 221);">
                <!-- <tr> -->
                <th><h7></h7> </th>
              <th><h7></h7> </th>
              <th><h7></h7> </th>
              <th><h7></h7> </th>
              <th><h7></h7> </th>
              <th><h7>HKJ6-KAPATAGAN</h7> </th>
              <th><h7></h7> </th>
              <th><h7></h7></th>
              <th><h7></h7></th>
              <th><h7></h7></th>
              <th><h7></h7></th>

                </tr>
    @if(count($withdrawals) > 0)
        @foreach($withdrawals as $withdrawal)
        <?php $dayOfWeek = date("W", strtotime($withdrawal->date));?>

                @if($withdrawal->destination=='HKJ6')
                <tr class='clickable-row hidden-print'  data-href='/withdrawals/{{$withdrawal->id}}'>

                    <td><h7>
                    @if($withdrawal->week==null)
                      {{$dayOfWeek}}
                    @else
                       {{$withdrawal->week}}
                    @endif
                    </h7></td>
                    <td><h7>{{$withdrawal->date}}</h7> </td>
                    <td><h7>{{$withdrawal->info1}}</h7> </td>
                    <td><h7>{{$withdrawal->date_to_withdraw}}</h7> </td>
                    <td><h7>{{$withdrawal->driver}}</h7> </td>
                    <td style="text-align:center"><h7>{{$withdrawal->plate_no}}</h7> </td>
                    <td><h7><a href="/withdrawals/{{$withdrawal->id}}">{{$withdrawal->po_reference}}</a></h7> </td>
                    @if($withdrawal->qty3!=null)                     <td><h7>{{$withdrawal->kg1}} {{$withdrawal->item1}}</h7></td>                     @else                     <td><h7> {{$withdrawal->item1}}</h7></td>                     @endif
                    <td><h7>{{$withdrawal->qty1}}</h7></td>
                    @if($withdrawal->qty3!=null)
                    <td><h7 style=" ">SET</h7></td>
                    @else
                    <td><h7 style=" ">PALLETS</h7></td>
                    @endif
                    <td><h7>{{$withdrawal->destination}}</h7></td>
 

                <tr>
                
               <tr class="visible-print clickable-row"  style="border: 1px solid rgb(221, 221, 221);" data-href='/withdrawals/{{$withdrawal->id}}'>
             
                     <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$dayOfWeek}} </h6></td>
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->date}}</h6> </td>
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->info1}}</h6> </td>
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->date_to_withdraw}}</h6> </td>
                    <td><h7 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->driver}}</h7> </td>
                    <td style="text-align:center"><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->plate_no}}</h6> </td>
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; "><a href="/withdrawal/{{$withdrawal->id}}">{{$withdrawal->po_reference}}</a></h6> </td>
@if($withdrawal->qty3!=null)                            <td><h7 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->kg1}} {{$withdrawal->item1}}</h7></td>                     @else                                          <td><h8 style=" margin-top: 0px; margin-bottom: 0px; "> {{$withdrawal->item1}}</h8></td>                     @endif
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->qty1}}</h6></td>
                    @if($withdrawal->qty3!=null)
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">SET</h6></td>
                    @else
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">PALLETS</h6></td>
                    @endif
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->destination}}</h6></td>
                <tr>
       @endif
        @endforeach



        
    @else
        <td></td><td></td><td></td><td></td><td></td><td><h7>No  ithdrawals for HKJ6</h7></td>
    @endif
    
     <!-- HKJ7 FOREACH -->
     </tr>
                <tr  style="border: 1px solid rgb(221, 221, 221);">
                <!-- <tr> -->
                <th><h7></h7> </th>
              <th><h7></h7> </th>
              <th><h7></h7> </th>
              <th><h7></h7> </th>
              <th><h7></h7> </th>
              <th><h7>HKJ7-MONKAYO</h7> </th>
              <th><h7></h7> </th>
              <th><h7></h7></th>
              <th><h7></h7></th>
              <th><h7></h7></th>
              <th><h7></h7></th>

                </tr>
    @if(count($withdrawals) > 0)
        @foreach($withdrawals as $withdrawal)
        <?php $dayOfWeek = date("W", strtotime($withdrawal->date));?>

                @if($withdrawal->destination=='HKJ7')
                <tr class='clickable-row hidden-print'  data-href='/withdrawals/{{$withdrawal->id}}'>

                    <td><h7>
                    @if($withdrawal->week==null)
                      {{$dayOfWeek}}
                    @else
                       {{$withdrawal->week}}
                    @endif
                    </h7></td>
                    <td><h7>{{$withdrawal->date}}</h7> </td>
                    <td><h7>{{$withdrawal->info1}}</h7> </td>
                    <td><h7>{{$withdrawal->date_to_withdraw}}</h7> </td>
                    <td><h7>{{$withdrawal->driver}}</h7> </td>
                    <td style="text-align:center"><h7>{{$withdrawal->plate_no}}</h7> </td>
                    <td><h7><a href="/withdrawals/{{$withdrawal->id}}">{{$withdrawal->po_reference}}</a></h7> </td>
                    @if($withdrawal->qty3!=null)                     <td><h7>{{$withdrawal->kg1}} {{$withdrawal->item1}}</h7></td>                     @else                     <td><h7> {{$withdrawal->item1}}</h7></td>                     @endif
                    <td><h7>{{$withdrawal->qty1}}</h7></td>
                    @if($withdrawal->qty3!=null)
                    <td><h7 style=" ">SET</h7></td>
                    @else
                    <td><h7 style=" ">PALLETS</h7></td>
                    @endif
                    <td><h7>{{$withdrawal->destination}}</h7></td>
 

                <tr>
                
               <tr class="visible-print clickable-row"  style="border: 1px solid rgb(221, 221, 221);" data-href='/withdrawals/{{$withdrawal->id}}'>
             
                     <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$dayOfWeek}} </h6></td>
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->date}}</h6> </td>
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->info1}}</h6> </td>
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->date_to_withdraw}}</h6> </td>
                    <td><h7 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->driver}}</h7> </td>
                    <td style="text-align:center"><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->plate_no}}</h6> </td>
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; "><a href="/withdrawal/{{$withdrawal->id}}">{{$withdrawal->po_reference}}</a></h6> </td>
@if($withdrawal->qty3!=null)                            <td><h7 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->kg1}} {{$withdrawal->item1}}</h7></td>                     @else                                          <td><h8 style=" margin-top: 0px; margin-bottom: 0px; "> {{$withdrawal->item1}}</h8></td>                     @endif
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->qty1}}</h6></td>
                    @if($withdrawal->qty3!=null)
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">SET</h6></td>
                    @else
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">PALLETS</h6></td>
                    @endif
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->destination}}</h6></td>
                <tr>
       @endif
        @endforeach



        
    @else
        <td></td><td></td><td></td><td></td><td></td><td><h7>No  ithdrawals for HKJ7</h7></td>
    @endif
    
    
     <!-- NEH FOREACH -->
     </tr>
                <tr  style="border: 1px solid rgb(221, 221, 221);">
                <!-- <tr> -->
                <th><h7></h7> </th>
              <th><h7></h7> </th>
              <th><h7></h7> </th>
              <th><h7></h7> </th>
              <th><h7></h7> </th>
              <th><h7>NADER</h7> </th>
              <th><h7></h7> </th>
              <th><h7></h7></th>
              <th><h7></h7></th>
              <th><h7></h7></th>
              <th><h7></h7></th>

                </tr>
    @if(count($withdrawals) > 0)
        @foreach($withdrawals as $withdrawal)
        <?php $dayOfWeek = date("W", strtotime($withdrawal->date));?>

                @if($withdrawal->destination=='NEH')
                <tr class='clickable-row hidden-print'  data-href='/withdrawals/{{$withdrawal->id}}'>

                    <td><h7>
                    @if($withdrawal->week==null)
                      {{$dayOfWeek}}
                    @else
                       {{$withdrawal->week}}
                    @endif
                    </h7></td>
                    <td><h7>{{$withdrawal->date}}</h7> </td>
                    <td><h7>{{$withdrawal->info1}}</h7> </td>
                    <td><h7>{{$withdrawal->date_to_withdraw}}</h7> </td>
                    <td><h7>{{$withdrawal->driver}}</h7> </td>
                    <td style="text-align:center"><h7>{{$withdrawal->plate_no}}</h7> </td>
                    <td><h7><a href="/withdrawals/{{$withdrawal->id}}">{{$withdrawal->po_reference}}</a></h7> </td>
                    @if($withdrawal->qty3!=null)                     <td><h7>{{$withdrawal->kg1}} {{$withdrawal->item1}}</h7></td>                     @else                     <td><h7> {{$withdrawal->item1}}</h7></td>                     @endif
                    <td><h7>{{$withdrawal->qty1}}</h7></td>
                    @if($withdrawal->qty3!=null)
                    <td><h7 style=" ">SET</h7></td>
                    @else
                    <td><h7 style=" ">PALLETS</h7></td>
                    @endif
                    <td><h7>{{$withdrawal->destination}}</h7></td>
 

                <tr>
               
               <tr class="visible-print clickable-row"  style="border: 1px solid rgb(221, 221, 221);" data-href='/withdrawals/{{$withdrawal->id}}'>
             
                     <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$dayOfWeek}} </h6></td>
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->date}}</h6> </td>
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->info1}}</h6> </td>
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->date_to_withdraw}}</h6> </td>
                    <td><h7 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->driver}}</h7> </td>
                    <td style="text-align:center"><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->plate_no}}</h6> </td>
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; "><a href="/withdrawal/{{$withdrawal->id}}">{{$withdrawal->po_reference}}</a></h6> </td>
@if($withdrawal->qty3!=null)                            <td><h7 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->kg1}} {{$withdrawal->item1}}</h7></td>                     @else                                          <td><h8 style=" margin-top: 0px; margin-bottom: 0px; "> {{$withdrawal->item1}}</h8></td>                     @endif
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->qty1}}</h6></td>
                    @if($withdrawal->qty3!=null)
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">SET</h6></td>
                    @else
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">PALLETS</h6></td>
                    @endif
                    <td><h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$withdrawal->destination}}</h6></td>
                <tr>
        @endif
        @endforeach



        
    @else
        <td></td><td></td><td></td><td></td><td></td><td><h7>No  ithdrawals for NADER</h7></td>
    @endif
    
    
    
     </table>
    

 <div class="pagination flex-m flex-w p-t-26 hidden-print" style="margin-right:190px; ">
 {{$withdrawals->links()}}		
</div>
</div>
<script>
      jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
});
      </script>

@endsection