@extends('layouts.app')

@section('content')
       
 <center><div style="width:100%">
   
    <a href="/supplier/create" class="hidden-print btn btn-default pull-left" style="margin-right: 20px;">New Supplier</a>
    <a onclick="print()" class="hidden-print btn btn-default pull-right" style="margin-right: 20px;">Print</a>
    <br><br>
<table class="table table-striped " style="margin-bottom: 0px; ">
     
              <tr class="hidden-print">
                    <th><h4>Suppliers</h4> </th>
                    <th><h4>Address</h4> </th>
                    <th><h4>TIN</h4> </th>
                    <th><h4>Category </h4></th>

                </tr>
                <tr class="visible-print">
                  <th style=" padding-bottom: 0px; "><h5></h5> </th>
                    <th style=" padding-bottom: 0px; "><h5>Suppliers</h5> </th>
                    <th style=" padding-bottom: 0px; "><h5>Address</h5> </th>
                    <th style=" padding-bottom: 0px; "><h5>TIN</h5> </th>
                    <th style=" padding-bottom: 0px; "><h5>Category </h5></th>
                    <!-- <th style=" padding-bottom: 0px; "><h5>Items supplied</h5> </th> -->
                </tr>
      
      <?php $count = 0;?>
    @if(count($supplier) > 0)
        @foreach($supplier as $suppliers)
       
                <tr style="border-top: 1px solid rgb(204, 204, 204);"class="hidden-print">
                    <td><a href="/supplier/{{$suppliers->id}}"><h5>{{$suppliers->business_name}} </h5></a></td>
                    <th><h6 style="width: 300px;"> {{$suppliers->business_address}}</h6></td>
                     <!-- <th><h6> {{$suppliers->business_info2}}</h6></td> -->
                     <th><h6>{{$suppliers->business_info2}}</h6></td>
                     <th><h6> {{$suppliers->business_category}}</h6></td>
                     



                </tr>
                
            <div style="margin-left:10px;" class="hidden-print">
                        <?php $product_lines = DB::table('product_lines')->where('supplier', '=',$suppliers->id)->get();?>
                        <?php $countN = 0; $items_supplied = DB::table('product_lines')->where('supplier', '=',$suppliers->id)->whereNotNull('product_line_name')->get();?>

                        @if(count($product_lines) > 0)
                            @if(count($items_supplied) > 0)
                        
                            <tr>
                                <td></td>
                                <td style="text-align:left margin-bottom: 0px; border-bottom: 1px solid rgb(70, 70, 70);" class="hidden-print"><h5 style="margin-bottom: 0px;">Items Supplied:</h5></td>
                            </tr>
                            @endif    
                            
                            <?php $count = 0; $first = 0; ?>
<tr class="hidden-print">
<!-- <td></td> -->
                            @foreach($product_lines as $product_line)
                            @if($first == 0)
                             
                            <td></td>
                            <?php $first = 1; ?>
                            @endif
                            @if($product_line->product_line_name!=null)
                            
                                 @if($count != 1)
                                 <?php $count = $count + 1;?>
                                <td>
                                <h6 style=" margin-bottom: 5px; margin-top: 0px; ">   {{$product_line->product_line_name}}</h6>
                                </td>
                                @else
                                <?php $count = 0; ?>
                                </tr><td style =" padding-top: 0px; padding-bottom: 0px; "></td>
                                <td style = "padding-top: 0px; padding-bottom: 0px;"></td>
                                <tr class="hidden-print"><td  style =" padding-top: 0px; padding-bottom: 0px;"></td>
                                <td><h6 style = " margin-bottom: 0px; margin-top: 0px; ">   {{$product_line->product_line_name}}</h6>
                                </td>
                                @endif
                               
                              @endif
                            @endforeach
                            </tr>
                        @endif
            </div>    
               
               <!-- PRINT RECORD INFORMATION -->
        <?php $countN = $countN + 1;?>
               <tr class="visible-print" style="border-top: 1px solid rgb(204, 204, 204); margin-top:10px;">
                    <td > <h6 style=" margin-top: 0px; margin-bottom: 0px; "> </h6></td>
                    <td> <h6 style=" margin-top: 0px; margin-bottom: 0px; ">{{$suppliers->business_name}} </h6></td>
                    <th> <h6 style=" margin-top: 0px; margin-bottom: 0px; width: 300px;"> {{$suppliers->business_address}}</h6></td>
                    <!-- <th> <h6 style=" margin-top: 0px; margin-bottom: 0px; "> {{$suppliers->business_info2}}</h6></td> -->
                    <th> <h6 style=" margin-top: 0px; margin-bottom: 0px; "> {{$suppliers->business_info2}}</h6></td>
                    <td> <h6 style=" margin-top: 0px; margin-bottom: 0px; "> {{$suppliers->business_category}}</h6></td>
                <tr>
                      <!-- PRINT PRODUCT LINES   -->
            <div style="margin-left:10px;" class="visible-print">
                        <?php $product_lines = DB::table('product_lines')->where('supplier', '=',$suppliers->id)->get();?>
                        <?php $items_supplied = DB::table('product_lines')->where('supplier', '=',$suppliers->id)->whereNotNull('product_line_name')->get();?>
                        <?php $count_products = 0;?>

                        @if(count($product_lines) > 0)
                            @if(count($items_supplied) > 0)
                            <tr class="visible-print">
                                <td></td>
                                <td style="text-align:left margin-bottom: 0px; border-bottom: 1px solid rgb(229, 229, 229); " class="visible-print"><h5 style="margin-bottom: 0px;">Items Supplied:</h5></td>
                            </tr>
                            @endif    
                            
                            <?php $count = 0; $first = 0; ?>
<tr class="visible-print">
<!-- <td></td> -->
                            @foreach($product_lines as $product_line)
                            @if($first == 0)
                             
                            <td></td>
                            <?php $first = 1; ?>
                            @endif
                            @if($product_line->product_line_name!=null)
                            
                                 @if($count != 1)
                                 <?php $count = $count + 1;?>
                                
                                <td>
                                <h6 style=" margin-bottom: 5px; margin: 0px; ">   {{$product_line->product_line_name}}</h6>
                                </td>
                                @else
                                <?php $count = 0; ?>
                                </tr><td style =" padding-top: 0px; padding-bottom: 0px; "></td>
                                <td style = "padding-top: 0px; padding-bottom: 0px;"></td>
                                <tr class="visible-print"><td  style =" padding-top: 0px; padding-bottom: 0px;"></td>
                                <td style =" padding-top: 0px; padding-bottom: 0px; "><h6 style = " margin-bottom: 0px; margin-top: 0px; ">   {{$product_line->product_line_name}}</h6>
                                </td>
                                @endif
                               
                              @endif
                            @endforeach
                            </tr>
                        @endif
                       
            </div>   
       
        @endforeach
    @else
        <p>No supplier found</p>
    @endif </table>
   


 <div class="pagination flex-m flex-w p-t-26 hidden-print" style="margin-right:190px; ">
 {{$supplier->links()}}		
</div>
</div></center>

@endsection