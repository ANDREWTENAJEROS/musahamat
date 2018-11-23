@extends('layouts.app')

@section('content')
       
<div class="">
   
    <a href="/supplier/create" class="hidden-print btn btn-default pull-left" style="margin-right: 20px;">New Supplier</a>
    <a onclick="print()" class="hidden-print btn btn-default pull-right" style="margin-right: 20px;">Print</a>
    <br><br>
 <table class="table table-striped" style="margin-bottom: 0px;">
     
              <tr class="hidden-print">
                    <th><h3>Suppliers</h3> </th>
                    <th><center><h3>Category </h3></center></th>
                </tr>
                <tr class="visible-print">
                    <th style=" padding-bottom: 0px; "><h5>Suppliers</h5> </th>
                    <th style=" padding-bottom: 0px; "><center><h5>Category </h5></center></th>
                </tr>
      
    @if(count($supplier) > 0)
        @foreach($supplier as $supplier)
       
                <tr class="hidden-print">
                    <td><a href="/supplier/{{$supplier->id}}"><h4>{{$supplier->business_name}} </h4></a></td>
                
                     <th><h4><center> {{$supplier->business_category}}</center></h4></td>
                <tr>
        
               <tr class="visible-print">
                    <td> <h6 style=" margin-top: 5px; margin-bottom: 5px; ">{{$supplier->business_name}} </h6></td>
                
                     <td><h6 style=" margin-top: 5px; margin-bottom: 5px; "><center> {{$supplier->business_category}} </center></h6></td>
                <tr>
       
        @endforeach
    @else
        <p>No supplier found</p>
    @endif </table>
</div>


@endsection