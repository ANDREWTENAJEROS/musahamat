@extends('layouts.app')

@section('content')
    <a href="/supplier" class="btn btn-default">Go Back</a>
    @if(!Auth::guest())
    <a href="/supplier/{{$supplier->id}}/print" style="margin-right: 20px;" class="btn btn-default pull-right">PRINT</a>

            {!!Form::open(['action' => ['supplierController@destroy', $supplier->id], 'method' => 'supplier', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}

            <a href="/supplier/{{$supplier->id}}/edit" style="margin-right: 20px;" class="btn btn-default pull-right">Edit</a>

    @endif
    
    <h2>{{$supplier->business_name}}</h2>
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

        <!--    <hr>
       </br>
         <div class="row">  
                            <div class="col-md-2 col-sm-2">

             {{Form::label('business_assessment_accreditation', 'Assessment and Accreditation From')}}</br>
                <label>
                   <h5>{{$supplier->business_assessment_accreditation}}</h5>
            </div>

            <div class="col-md-2 col-sm-2">

             {{Form::label('business_company_profile', 'Company Profile')}}</br>
                <label>
                   <h5>{{$supplier->business_company_profile}}</h5>
            </div>

                                    <div class="col-md-2 col-sm-2">

             {{Form::label('business_permit', 'Business Permit')}}</br>
                <label>
                   <h5>{{$supplier->business_permit}}</h5>
            </div>
            <div class="col-md-2 col-sm-2">

             {{Form::label('business_fpa_license', 'FPA license')}}</br>
                <label>
                   <h5>{{$supplier->business_fpa_license}}</h5>
            </div>
            <div class="col-md-2 col-sm-2">

             {{Form::label('business_coa', 'Certificate of Analysis')}}</br>
                <label>
                   <h5>{{$supplier->business_coa}}</h5>
            </div>
            </div > -->

    <hr>
    <div class="justify-content-center">
    <div class="row">

            <div class="col-md-6  ">
            {{Form::label('business_assessment_accreditation', 'Assessment and Accreditation From')}}
            </div>
            <div class="col-md-6  ">
            <h5>{{$supplier->business_assessment_accreditation}}</h5>
            </div>  
            
    </div>
    </br>
    <div class="row">

            <div class="col-md-6  ">
            {{Form::label('business_company_profile', 'Company Profile')}}
            </div>
            <div class="col-md-6  ">
            <h5>{{$supplier->business_company_profile}}</h5>
            </div>  
            
    </div>
    </br>
    <div class="row">

            <div class="col-md-6  ">
            {{Form::label('business_permit', 'Business Permit')}}
            </div>
            <div class="col-md-6  ">
            <h5>{{$supplier->business_permit}}</h5>
            </div>  
            
    </div>
    </br>
    <div class="row">

            <div class="col-md-6  ">
            {{Form::label('business_fpa_license', 'FPA license')}}
            </div>
            <div class="col-md-6  ">
            <h5>{{$supplier->business_fpa_license}}</h5>
            </div>  
            
    </div>
    </br>
    <div class="row">

            <div class="col-md-6 ">
            {{Form::label('business_coa', 'Certificate of Analysis')}}
            </div>
            <div class="col-md-6  ">
            <h5>{{$supplier->business_coa}}</h5>
            </div>  
           
    </div>
    </br>

    <div class="row">

<div class="col-md-6 ">
{{Form::label('business_info1', 'Certificate of Registration')}}
</div>
<div class="col-md-6  ">
<h5>{{$supplier->business_info1}}</h5>
</div>  

</div>
<hr>



@if(!Auth::guest())
<div class="row">
    <div class="col-md-4  ">
    <h4>Certificates</h4>
    </div >
@else
<h4>Certificates</h4>
<hr>
@endif

@if(!Auth::guest())

            <div class="col-md-4  ">
             </div >
            <div class="col-md-4  " >
            <a onclick="" href="{{ route('product_lines.index', $supplier->id) }}" class="btn btn-default pull-right" style="margin-right: 0px;">View Certificates </a>
           
            <a onclick="" href="{{ route('product_lines.create', $supplier->id) }}" class="btn btn-default pull-right" style="margin-right: 20px;">Add </a>
            </div >
        </br><hr>
    <script>
            var storedValue = {{$supplier->id}};
            localStorage.setItem("server", storedValue);

        //     print(storedValue);       
        //     console.log(storedValue);

        </script>
    
     

 
    </div> 
    {{--  --}}
   
    </div>
    @endif
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
           {{-- <div class="well">
                <div class="row">
                    <!-- <div class="col-md-4 col-sm-4">

                    </div> -->
                    <div class="col-md-2">
                       Name: {{$product_lines->product_line_name}}
                    </div>
                    <div class="col-md-4">
                    certificate: {{$product_lines->certificate}}
                    </div>
                    <div class="col-md-2">
                    expiration date: {{$product_lines->expiration_date}}
                    </div>
                    <div class="col-md-2">
                    MFI Price: {{$product_lines->MFL_price}}
                    </div>
                    <div class="col-md-2">
                    Agrotech Price: {{$product_lines->agritech_price}}
                    </div>
                </div>
            </div>--}}


              <tr>
                <!-- <td>{{$product_lines->id}}</td> -->
                <!-- <td><a href="/product_lines/{{$product_lines->id}}">{{$product_lines->product_line_name}}</a></td> -->
                <td>{{$product_lines->product_line_name}}</td>
                <td>{{$product_lines->certificate}}</td>
                <td>{{$product_lines->expiration_date}}</td>
                <td>{{$product_lines->MFL_price}}</td>
                <td>{{$product_lines->agritech_price}}</td>
                
                <!-- <td><a href="/product_lines/{{$product_lines->id}}/edit" class="btn btn-default">Edit</a></td> -->
                <td>
                    {!!Form::open(['action' => ['product_linesController@destroy', $product_lines->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}
                </td>
            </tr>
        @endforeach
        </table>
    @else
        <p>No product lines found</p>
    @endif
<hr>
</br>
</br>

@endsection