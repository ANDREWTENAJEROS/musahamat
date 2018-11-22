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

<div class="visible-print">

    <div class="row"> 
        <div class="col-md-10">        <img style="width:12%; position:relative; display: inline-block;  margin-left:20px;" src="/mlogo.png">

            <h3 style="margin-left:30px;display: inline-block;">MUSAHAMAT FARMS INCORPORATED</h3>
            <center><h7 style="text-align:center;">Pryce Tower Condominium, JP Laurel Ave, Bajada, Davao City</h7><center>
        </div>        
    </div>
<hr>
</div>

    <h2 > {{$supplier->business_name}}</h2>

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

<div class="row">
    <div class="col-md-6">
        <h4>Product Lines</h4>
    </div>
    <div class="col-md-6">

    @if(!Auth::guest())
    <a onclick="" href="{{ route('product_lines.create', $supplier->id) }}" class="hidden-print btn btn-default pull-right" style="margin-right: 20px;">Add Product Line</a>
    @endif
    </div>
</div>
    <?php $product_lines = DB::table('product_lines')->where('supplier', '=', $_SESSION['bid'])->get();?>

@if(count($product_lines) > 0)
<table class="table table-striped">
                            <tr>
                                <th>Name</th>
                                <th>certificate</th>
                                <th>expiration date</th>
                                <th>MFL Price</th>
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
                <td>{{$product_lines->MFL_price}}</td>
                <td>{{$product_lines->agritech_price}}</td>
                
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

@endsection