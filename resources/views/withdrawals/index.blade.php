@extends('layouts.app')

@section('content')

<div >   
{!! Form::open(['action' => 'withdrawalsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

<div class="row" style=" z-index:0;">
    <div class="col-md-2">
        <a href="/withdrawals/create1" class="hidden-print btn btn-default " style="margin-right: 20px; margin-bottom: 20px;">Withdraw Crates</a>
    </div> 
    <div class="col-md-2">
    <a href="/withdrawals/create" class="hidden-print btn btn-default" style="margin-right: 20px; margin-bottom: 20px;">Withdraw Boxes</a>
    </div> 

    <div class="col-md-1">
    {{Form::text('findweek','', ['class' => 'form-control hidden-print', 'style'=>'margin-right: 20px; margin-bottom: 20px; width:80px' , 'required' => 'required' ,'placeholder' => 'week'])}}
    </div> 

    <div class="col-md-1">
    {{Form::text('findyear', '', ['class' => 'form-control hidden-print', 'style'=>'margin-right: 20px; margin-bottom: 20px; width:80px', 'required' => 'required' ,'placeholder' => 'year'])}}
    </div> 
        <!--  <input class="hidden-print form-control " type="text" name="search_value" style="margin-bottom: 10px;"  -->
         <!-- placeholder="View on week" value=""> -->

    <div class="col-md-2">
        <!-- <button href="/withdrawals/week" style="padding-bottom:8px"class="hidden-print btn btn-default">        </button> -->
        {{Form::submit('Search', ['class'=>'btn btn-primary hidden-print', 'style'=>'margin-right: 20px; margin-bottom: 20px;'])}}

    {!! Form::close() !!}
    </div> 
    <div class="col-md-2">

        <a href="/withdrawals/" class="hidden-print btn btn-default" style="margin-right: 20px; margin-bottom: 20px;">Clear search</a>
        </div>
      

<div class="col-md-2">
 <a onclick="print()" class="hidden-print btn btn-default " style="margin-right: 20px; ">Print Summary</a>
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
      
                </tr>
                <tr  style="border: 1px solid rgb(221, 221, 221);">
                <!-- <tr> -->
                <th><h7></h7> </th>
              <th><h7></h7> </th>
              <th><h7></h7> </th>
              <th><h7></h7> </th>
              <th><h7></h7> </th>
              <th><h7>HKJ1</h7> </th>
              <th><h7></h7> </th>
              <th><h7></h7></th>
              <th><h7></h7></th>
              <th><h7></h7></th>
              <th><h7></h7></th>
              <th><h7></h7></th>

                </tr>
    @if(count($withdrawals) > 0)
        @foreach($withdrawals as $withdrawal)
        <?php $dayOfWeek = date("W", strtotime($withdrawal->date));?>

                @if($withdrawal->destination=='HKJ1')
                <tr class="hidden-print">

                    <td><h7>
                    @if($withdrawal->week==null)
                      {{$dayOfWeek}}
                    @else
                       {{$withdrawal->week}}
                    @endif
                    </h7></td>
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
          @endif
        @endforeach


       

        
    @else
        <p>No withdrawals for HKJ1</p>
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
              <th><h7>HKJ2</h7> </th>
              <th><h7></h7> </th>
              <th><h7></h7></th>
              <th><h7></h7></th>
              <th><h7></h7></th>
              <th><h7></h7></th>
              <th><h7></h7></th>

                </tr>
    @if(count($withdrawals) > 0)
        @foreach($withdrawals as $withdrawal)
        <?php $dayOfWeek = date("W", strtotime($withdrawal->date));?>

                @if($withdrawal->destination=='HKJ2')
                <tr class="hidden-print">

                    <td><h7>
                    @if($withdrawal->week==null)
                      {{$dayOfWeek}}
                    @else
                       {{$withdrawal->week}}
                    @endif
                    </h7></td>
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
       @endif
        @endforeach



        
    @else
        <p>No withdrawals for HKJ2</p>
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
              <th><h7>HKJ3</h7> </th>
              <th><h7></h7> </th>
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
                <tr class="hidden-print">

                    <td><h7>
                    @if($withdrawal->week==null)
                      {{$dayOfWeek}}
                    @else
                       {{$withdrawal->week}}
                    @endif
                    </h7></td>
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
        @endif
        @endforeach



        
    @else
        <p>No withdrawals for HKJ3</p>
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
              <th><h7>HKJ4</h7> </th>
              <th><h7></h7> </th>
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
                <tr class="hidden-print">

                    <td><h7>
                    @if($withdrawal->week==null)
                      {{$dayOfWeek}}
                    @else
                       {{$withdrawal->week}}
                    @endif
                    </h7></td>
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
        @endif
        @endforeach



        
    @else
        <p>No withdrawals for HKJ4</p>
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
              <th><h7>HKJ5</h7> </th>
              <th><h7></h7> </th>
              <th><h7></h7></th>
              <th><h7></h7></th>
              <th><h7></h7></th>
              <th><h7></h7></th>
              <th><h7></h7></th>

                </tr>
    @if(count($withdrawals) > 0)
        @foreach($withdrawals as $withdrawal)
        <?php $dayOfWeek = date("W", strtotime($withdrawal->date));?>

                @if($withdrawal->destination=='HKJ5')
                <tr class="hidden-print">

                    <td><h7>
                    @if($withdrawal->week==null)
                      {{$dayOfWeek}}
                    @else
                       {{$withdrawal->week}}
                    @endif
                    </h7></td>
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
        @endif
        @endforeach



        
    @else
        <p>No withdrawals for HKJ5</p>
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
              <th><h7>HKJ6</h7> </th>
              <th><h7></h7> </th>
              <th><h7></h7></th>
              <th><h7></h7></th>
              <th><h7></h7></th>
              <th><h7></h7></th>
              <th><h7></h7></th>

                </tr>
    @if(count($withdrawals) > 0)
        @foreach($withdrawals as $withdrawal)
        <?php $dayOfWeek = date("W", strtotime($withdrawal->date));?>

                @if($withdrawal->destination=='HKJ6')
                <tr class="hidden-print">

                    <td><h7>
                    @if($withdrawal->week==null)
                      {{$dayOfWeek}}
                    @else
                       {{$withdrawal->week}}
                    @endif
                    </h7></td>
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
       @endif
        @endforeach



        
    @else
        <p>No withdrawals for HKJ6</p>
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
              <th><h7>HKJ7</h7> </th>
              <th><h7></h7> </th>
              <th><h7></h7></th>
              <th><h7></h7></th>
              <th><h7></h7></th>
              <th><h7></h7></th>
              <th><h7></h7></th>

                </tr>
    @if(count($withdrawals) > 0)
        @foreach($withdrawals as $withdrawal)
        <?php $dayOfWeek = date("W", strtotime($withdrawal->date));?>

                @if($withdrawal->destination=='HKJ7')
                <tr class="hidden-print">

                    <td><h7>
                    @if($withdrawal->week==null)
                      {{$dayOfWeek}}
                    @else
                       {{$withdrawal->week}}
                    @endif
                    </h7></td>
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
       @endif
        @endforeach



        
    @else
        <p>No withdrawals for HKJ7</p>
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
              <th><h7></h7></th>

                </tr>
    @if(count($withdrawals) > 0)
        @foreach($withdrawals as $withdrawal)
        <?php $dayOfWeek = date("W", strtotime($withdrawal->date));?>

                @if($withdrawal->destination=='NEH')
                <tr class="hidden-print">

                    <td><h7>
                    @if($withdrawal->week==null)
                      {{$dayOfWeek}}
                    @else
                       {{$withdrawal->week}}
                    @endif
                    </h7></td>
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
        @endif
        @endforeach



        
    @else
        <p>No withdrawals for NADER</p>
    @endif
    
    
    
     </table>
    

 <div class="pagination flex-m flex-w p-t-26 hidden-print" style="margin-right:190px; ">
 {{$withdrawals->links()}}		
</div>
</div>


@endsection