@extends('layouts.app')

@section('content')
    <a href="/supplier"  class="btn btn-default hidden-print">Go Back</a>
    
    @if(!Auth::guest())

            {!!Form::open(['action' => ['supplierController@destroy', $supplier->id], 'method' => 'supplier', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger hidden-print'])}}
            {!!Form::close()!!}

            <a href="/supplier/{{$supplier->id}}/edit" style="margin-right: 20px;" class="hidden-print btn btn-default pull-right">Edit</a>

    @endif
    <a onclick="print()" style="margin-right: 20px;" class="hidden-print btn btn-default pull-right">Print</a>

<content class="hidden-print">

    <h2 > {{$supplier->business_name}}</h3>

    <table>
        <tr>
            <td>Business Address: </td>
            <td><h5 style="    padding-right: 30px; padding-left: 20px;">{{$supplier->business_address}}</h5></td>
            
            
        </tr>
</table>
        <table>
        <tr>
            <td>Email address:</td>
            <td><h5 style="    padding-right: 30px; padding-left: 20px;">{{$supplier->business_email}}</h5></td>
            <td>Category: </td>
            <td><h5 style="    padding-right: 30px; padding-left: 20px;">{{$supplier->business_category}}</h5></td>
        </tr>
        <tr>
            <td>telephone number: </td>
            <td><h5 style="    padding-right: 30px; padding-left: 20px;">{{$supplier->business_tel}}</h5></td>
            <td>Fax number: </td>
            <td><h5 style="    padding-right: 30px; padding-left: 20px;">{{$supplier->business_fax}}</h5></td>
        </tr>
        <tr>
            <td>Nature of Business: </td>
            <td><h5 style="    padding-right: 30px; padding-left: 20px;">{{$supplier->business_nature}}</h5></td>
            <td>Type of Business organization:</td>
            <td><h5 style="    padding-right: 30px; padding-left: 20px;">{{$supplier->business_type_id}}</h5></td>
        </tr>
        <tr>
            <td>Capitalization: </td>
            <td><h5 style="    padding-right: 30px; padding-left: 20px;">₱ {{$supplier->business_capitalization}}</h5></td>
            <td>Year Established:</td>
            <td><h5 style="    padding-right: 30px; padding-left: 20px;">{{$supplier->business_year_established}}</h5></td>
        </tr>
        <tr>
            <td>Credit Terms: </td>
            <td><h5 style="    padding-right: 30px; padding-left: 20px;">₱ {{$supplier->business_credit_terms}}</h5></td>
            <td>Credit Limit: </td>
            <td><h5 style="    padding-right: 30px; padding-left: 20px;">₱ {{$supplier->business_credit_limit}}</h5></td>
        </tr>
    </table>

<div style="display:none">
<!-- <div class="hidden-print"> -->

</br>
    <div class="row">
                <div class="col-md-4 col-sm-4">
                {{Form::label('business_address', 'Business Address:')}}
                <h5>{{$supplier->business_address}}</h5>
                </div>
                <div class="col-md-4 col-sm-4">
                {{Form::label('business_email', 'Email Address:')}}
                <h5>{{$supplier->business_email}}</h5>
                </div>

                  <div class="col-md-4 col-sm-4">
                 {{Form::label('category', 'Category:')}}
                 <h5>{{$supplier->business_category}}</h5>
        </div>
    </div>
    </br>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                     {{Form::label('business_tel', 'tel number:')}}
                     <h5>{{$supplier->business_tel}}</h5>
                </div>

                <div class="col-md-4 col-sm-4">
                     {{Form::label('business_fax', 'fax number:')}}
                     <h5>{{$supplier->business_fax}}</h5>
                </div>

                <div class="col-md-4 col-sm-4">
                    {{Form::label('business_year_established', 'Year Established:')}}
                    <h5>{{$supplier->business_year_established}}</h5>
                </div> 
             </div>
             </br>
        <div class="row">
                <div class="col-md-4 col-sm-4">
                {{Form::label('business_capitalization', 'Capitalization:')}}
                <h5>{{$supplier->business_capitalization}}</h5>
                </div>
        
                <div class="col-md-4 col-sm-4">
                {{Form::label('business_nature', 'Business Nature:')}}
                <h5>{{$supplier->business_nature}}</h5>
                </div>

                <div class="col-md-4 col-sm-4">
                {{Form::label('business_type_id', 'Business Type:')}}
                <h5>{{$supplier->business_type_id}}</h5>
                </div>


           </div>
           <hr>
           <div class="row">  
                            <div class="col-md-3">
                            {{Form::label('business_credit_terms', 'Credit Terms:')}}

                            </div>
                            <div class="col-md-3">
                            <h5 class="pull-rigt">₱ {{$supplier->business_credit_terms}}</h5>
                            </div>
                            <div class="col-md-3">
                            {{Form::label('business_credit_limit', 'Credit Limit:')}}

                            </div>
                            <div class="col-md-3">
                            <h5 class="pull-rigt">₱ {{$supplier->business_credit_limit}}</h5>
                            </div>
                            </div>
</div>

    
    <?php $product_lines = DB::table('product_lines')->where('supplier', '=', $_SESSION['bid'])->get();?>
    @if(Auth::guest())
    <h4 class="page-break-after">Documents</h4>
    @else
    <table class="table table-striped" style="margin-bottom: 0px;">
        <tr>
        <th><h4>Documents</h4></th>
        
        <th><a onclick="" href="{{ route('product_lines.create', $supplier->id) }}" class="hidden-print btn btn-default pull-right" style="margin-right: 20px;">Add document</a>
    </th>
        <tr>
</table>
    @endif
@if(count($product_lines) > 0 )
<table class="table table-striped">
                            <tr>
                                
                                <th>Name</th>
                                <th></th>
                                <th>expiration date</th>
                                <th></th> 
                                

                            </tr>
            <tr>
                <td>Assessment and Accreditation Form</td>
                <td>{{$supplier->business_assessment_accreditation}}</td>
                <td></td>
                <td></td>

            </tr>
            <tr>
                <td>Company Profile</td>
                <td>{{$supplier->business_company_profile}}</td>
                <td></td>
                <td></td>

            </tr>
            <tr>
                <td>Business Permit</td>
                <td>{{$supplier->business_permit}}</td>
                <td></td>
                <td></td>

            </tr>
            <tr>
                <td>Certificate of Analysis</td>
                <td>{{$supplier->business_coa}}</td>
                <td></td>
                <td></td>

            </tr>
            <tr>
                <td>Certificate of Registration</td>
                <td>{{$supplier->business_info1}}</td>
                <td></td>
                <td></td>

            </tr>
        @foreach($product_lines as $product_lines)
            @if($product_lines->product_line_name == null)
            <tr>
                
                <td><a href="/product_lines/{{$product_lines->id}}/edit">{{$product_lines->certificate}}</a></td>
                <td></td>
                <td>{{$product_lines->expiration_date}}</td>
        
                <!-- <td><a href="/product_lines/{{$product_lines->id}}/edit" class="btn btn-default">Edit</a></td> -->
                <td style=" padding-bottom: 6px; padding-top: 6px; ">
                    {!!Form::open(['action' => ['product_linesController@destroy', $product_lines->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger hidden-print' , 'style' => 'padding-bottom: 0px; padding-top: 0px;'])}}
                    {!!Form::close()!!}
                </td>
            </tr>
            @endif
        @endforeach
        </table>
    @else
        <p>No product lines found</p>
    @endif
<hr>
<div class="pagebreak"> </div>

   <table class="table table-striped" style="margin-bottom: 0px;">
        <tr>
        <th><h4>Product Lines</h4></th>
        
        <th> @if(!Auth::guest())
          <a onclick="" href="{{ route('product_lines.create', $supplier->id) }}" class="hidden-print btn btn-default pull-right" style="margin-right: 20px;">Add Product Line</a>
          @endif
    </th>
        <tr>
</table>

    <?php $product_lines = DB::table('product_lines')->where('supplier', '=', $_SESSION['bid'])->get();?>

@if(count($product_lines) > 0)
<table class="table table-striped">
                            <tr>
                                <th>Name</th>
                                <th>certificate</th>
                                <th>expiration date</th>
                                <th>MFI Price</th>
                                <th>Agrotech Price</th>
                                <th></th> 
                                

                            </tr>
        @foreach($product_lines as $product_lines)
        

            @if($product_lines->product_line_name != null)
             <tr>
                <!-- <td>{{$product_lines->id}}</td> -->
                <!-- <td><a href="/product_lines/{{$product_lines->id}}">{{$product_lines->product_line_name}}</a></td> -->
                
                 <td><a class="" href="/product_lines/{{$product_lines->id}}/edit"> {{$product_lines->product_line_name}}</a></td>
                <td>{{$product_lines->certificate}}</td>
                <td>{{$product_lines->expiration_date}}</td>
                <td>₱ {{$product_lines->MFL_price}}</td>
                <td>₱ {{$product_lines->agritech_price}}</td>
                
                <!-- <td><a href="/product_lines/{{$product_lines->id}}/edit" class="btn btn-default">Edit</a></td> -->
                <td style=" padding-bottom: 6px; padding-top: 6px; ">
                    {!!Form::open(['action' => ['product_linesController@destroy', $product_lines->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger hidden-print', 'style' => 'padding-bottom: 0px; padding-top: 0px;'])}}
                    {!!Form::close()!!}
                </td>
            </tr>
            @endif
        @endforeach
        </table>
    @else
        <p>No product lines found</p>
    @endif
    
<hr>
</br>
</br>

</content>


<!-- <content class=""> -->
<content class="visible-print">

<h4 > {{$supplier->business_name}}</h4>

<table>
    <tr>
        <td><h6 style="    padding-right: 30px; padding-left: 5px;">Business Address: </h6></td>
        <td><h6 style="    padding-right: 30px; padding-left: 20px;"> {{$supplier->business_address}}</h6></td>
        
        
    </tr>
</table>
    <table>
    <tr>
        <td><h6 style="    padding-right: 30px; padding-left: 5px;">Email address: </h6></td>
        <td><h6 style="    padding-right: 30px; padding-left: 20px;">{{$supplier->business_email}}</h6></td>
        <td><h6 style="    padding-right: 30px; padding-left: 5px;">Category: </h6></td>
        <td><h6 style="    padding-right: 30px; padding-left: 20px;">{{$supplier->business_category}}</h6></td>
    </tr>
    <tr>
        <td><h6 style="    padding-right: 30px; padding-left: 5px;">telephone number: </h6></td>
        <td><h6 style="    padding-right: 30px; padding-left: 20px;">{{$supplier->business_tel}}</h6></td>
        <td><h6 style="    padding-right: 30px; padding-left: 5px;">Fax number: </h6></td>
        <td><h6 style="    padding-right: 30px; padding-left: 20px;">{{$supplier->business_fax}}</h6></td>
    </tr>
    <tr>
        <td><h6 style="    padding-right: 30px; padding-left: 5px;">Nature of Business: </h6> </td>
        <td><h6 style="    padding-right: 30px; padding-left: 20px;">{{$supplier->business_nature}}</h6></td>
        <td><h6 style="    padding-right: 30px; padding-left: 5px;">Type of Business organization: </h6></td>
        <td><h6 style="    padding-right: 30px; padding-left: 20px;">{{$supplier->business_type_id}}</h6></td>
    </tr>
    <tr>
        <td><h6 style="    padding-right: 30px; padding-left: 5px;">Capitalization: </h6></td>
        <td><h6 style="    padding-right: 30px; padding-left: 20px;">₱ {{$supplier->business_capitalization}}</h6></td>
        <td><h6 style="    padding-right: 30px; padding-left: 5px;">Year Established:</h6></td>
        <td><h6 style="    padding-right: 30px; padding-left: 20px;">{{$supplier->business_year_established}}</h6></td>
    </tr>
    <tr>
        <td><h6 style="    padding-right: 30px; padding-left: 5px;">Credit Terms:</h6> </td>
        <td><h6 style="    padding-right: 30px; padding-left: 20px;">₱ {{$supplier->business_credit_terms}}</h6></td>
        <td><h6 style="    padding-right: 30px; padding-left: 5px;">Credit Limit: </h6></td>
        <td><h6 style="    padding-right: 30px; padding-left: 20px;">₱ {{$supplier->business_credit_limit}}</h6></td>
    </tr>
</table>

<div style="display:none">
<!-- <div class="hidden-print"> -->

</br>
<div class="row">
            <div class="col-md-4 col-sm-4">
            <h6  style="margin-top: 0px; margin-bottom: 0px;">{{Form::label('business_address', 'Business Address:')}}</h6>
            <h6 style="margin-top: 0px; margin-bottom: 0px;">{{$supplier->business_address}}</h6>
            </div>
            <div class="col-md-4 col-sm-4">
            <h6 style="margin-top: 0px; margin-bottom: 0px;">{{Form::label('business_email', 'Email Address:')}}</h6>
            <h6 style="margin-top: 0px; margin-bottom: 0px;">{{$supplier->business_email}}</h6>
            </div>

              <div class="col-md-4 col-sm-4">
              <h6 style="margin-top: 0px; margin-bottom: 0px;"> {{Form::label('category', 'Category:')}}</h6>
             <h6 style="margin-top: 0px; margin-bottom: 0px;">{{$supplier->business_category}}</h6>
    </div>
</div>
</br>
        <div class="row">
            <div class="col-md-4 col-sm-4">
            <h6>   {{Form::label('business_tel', 'tel number:')}}</h6>
                 <h6>{{$supplier->business_tel}}</h6>
            </div>

            <div class="col-md-4 col-sm-4">
            <h6>   {{Form::label('business_fax', 'fax number:')}}</h6>
                 <h6>{{$supplier->business_fax}}</h6>
            </div>

            <div class="col-md-4 col-sm-4">
            <h6>   {{Form::label('business_year_established', 'Year Established:')}}</h6>
                <h6>{{$supplier->business_year_established}}</h6>
            </div> 
         </div>
         </br>
    <div class="row">
            <div class="col-md-4 col-sm-4">
            <h6> {{Form::label('business_capitalization', 'Capitalization:')}}</h6>
            <h6>{{$supplier->business_capitalization}}</h6>
            </div>
    
            <div class="col-md-4 col-sm-4">
            <h6>  {{Form::label('business_nature', 'Business Nature:')}}</h6>
            <h6>{{$supplier->business_nature}}</h6>
            </div>

            <div class="col-md-4 col-sm-4">
            <h6> {{Form::label('business_type_id', 'Business Type:')}}</h6>
            <h6>{{$supplier->business_type_id}}</h6>
            </div>


       </div>
       <hr>
       <div class="row">  
                        <div class="col-md-3">
                        <h6> {{Form::label('business_credit_terms', 'Credit Terms:')}}</h6>

                        </div>
                        <div class="col-md-3">
                        <h6 class="pull-rigt">₱ {{$supplier->business_credit_terms}}</h6>
                        </div>
                        <div class="col-md-3">
                        <h6> {{Form::label('business_credit_limit', 'Credit Limit:')}}</h6>

                        </div>
                        <div class="col-md-3">
                        <h6 class="pull-rigt">₱ {{$supplier->business_credit_limit}}</h6>
                        </div>
                        </div>
</div>


<?php $product_lines = DB::table('product_lines')->where('supplier', '=', $_SESSION['bid'])->get();?>
@if(Auth::guest())
<h5 class="page-break-after">Documents</h5>
@else
<table class="table table-striped" style="margin-bottom: 0px;">
    <tr>
    <th><h5>Documents</h5></th>    
</th>
    <tr>
</table>
@endif
@if(count($product_lines) > 0 )
<table class="table table-striped">
                        <tr>
                            
                            <th><h6 style="margin-top: 0px; margin-bottom: 0px;">Name</h6></th>
                            <th></th>
                            <th><h6 style="margin-top: 0px; margin-bottom: 0px;">expiration date</h6></th>
                            <th></th> 
                            

                        </tr>
        <tr>
            <td><h6 style="margin-top: 0px; margin-bottom: 0px;">Assessment and Accreditation Form</h6></td>
            <td><h6 style="margin-top: 0px; margin-bottom: 0px;">{{$supplier->business_assessment_accreditation}}</h6></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td><h6 style="margin-top: 0px; margin-bottom: 0px;">Company Profile</td>
            <td><h6 style="margin-top: 0px; margin-bottom: 0px;">{{$supplier->business_company_profile}}</h6></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td><h6 style="margin-top: 0px; margin-bottom: 0px;">Business Permit</h6></td>
            <td><h6 style="margin-top: 0px; margin-bottom: 0px;">{{$supplier->business_permit}}</h6></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td><h6 style="margin-top: 0px; margin-bottom: 0px;">Certificate of Analysis</h6></td>
            <td><h6 style="margin-top: 0px; margin-bottom: 0px;">{{$supplier->business_coa}}</h6></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td><h6  style="margin-top: 0px; margin-bottom: 0px;">Certificate of Registration</h6></td>
            <td><h6 style="margin-top: 0px; margin-bottom: 0px;">{{$supplier->business_info1}}</h6></td>
            <td></td>
            <td></td>

        </tr>
    @foreach($product_lines as $product_lines)
        @if($product_lines->product_line_name == null)
        <tr>
            
            <td ><a href="/product_lines/{{$product_lines->id}}/edit"><h6 style=" margin-bottom: 0px; margin-top: 0px; ">{{$product_lines->certificate}}</h6></a></td>
            <td></td>
            <td ><h6 style="padding-top: 0px;padding-bottom: 0px;margin-top: 0px;margin-bottom: 0px; ">{{$product_lines->expiration_date}}</h6></td>
            
        </tr>
        @endif
    @endforeach
    </table>
@else
    <p>No product lines found</p>
@endif
<hr>
<div class="pagebreak"> </div>

<div class="row">
<div class="col-md-6">
    <h5>Product Lines</h5>
</div>
<div class="col-md-6">
</div>
</div>
<?php $product_lines = DB::table('product_lines')->where('supplier', '=', $_SESSION['bid'])->get();?>

@if(count($product_lines) > 0)
<table class="table table-striped">
                        <tr>
                            <th ><h6 style="margin-top: 0px; margin-bottom: 0px;">Name</h6></th>
                            <th ><h6 style="margin-top: 0px; margin-bottom: 0px;">certificate</h6></th>
                            <th ><h6 style="margin-top: 0px; margin-bottom: 0px;">expiration date</h6></th>
                            <th ><h6 style="margin-top: 0px; margin-bottom: 0px;">MFI Price</h6></th>
                            <th ><h6 style="margin-top: 0px; margin-bottom: 0px;">Agrotech Price</h6></th>
                            <th></th> 
                        </tr>
    @foreach($product_lines as $product_lines)
    

        @if($product_lines->product_line_name != null)
         <tr>
            <td style=" padding-top: 0px; padding-bottom: 0px; "><a class="" href="/product_lines/{{$product_lines->id}}/edit"> <h6>{{$product_lines->product_line_name}}</h6></a></td>
            <td style=" padding-top: 0px; padding-bottom: 0px; "><h6>{{$product_lines->certificate}}</h6></td>
            <td style=" padding-top: 0px; padding-bottom: 0px; "><h6>{{$product_lines->expiration_date}}</h6></td>
            <td style=" padding-top: 0px; padding-bottom: 0px; "><h6>₱ {{$product_lines->MFL_price}}</h6></td>
            <td style=" padding-top: 0px; padding-bottom: 0px; "><h6>₱ {{$product_lines->agritech_price}}</h6></td>
        </tr>
        @endif
    @endforeach
    </table>
@else
    <p>No product lines found</p>
@endif

<hr>
</br>
</br>

</content>
@endsection