@extends('layouts.app')

@section('content')
    <h1>New Supplier</h1>
    {!! Form::open(['action' => 'supplierController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('business_name', 'Supplier Name:')}}
            {{Form::text('business_name', '', ['class' => 'form-control', 'required' => 'required' ,'placeholder' => ' '])}}

            <div class="row">
                <div class="col-md-6 col-sm-6">
                    {{Form::label('business_address', 'Business Address:')}}
                    {{Form::text('business_address', '', ['class' => 'form-control', 'required' => 'required', 'placeholder' => ' '])}}
                </div>
                <div class="col-md-6 col-sm-6">
                    {{Form::label('business_email Name', 'Email Address:')}}
                    {{Form::email('business_email', '', ['class' => 'form-control', 'placeholder' => ' '])}}
             </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4">

                {{Form::label('business_tel', 'tel number:')}}
                {{Form::tel('business_tel', '', ['class' => 'form-control', 'required' => 'required', 'placeholder' => ' '])}}
                </div>

                <div class="col-md-4 col-sm-4">
                {{Form::label('business_fax', 'fax number:')}}
                {{Form::tel('business_fax', '', ['class' => 'form-control', 'required' => 'required', 'placeholder' => ' '])}}
                </div>

                <div class="col-md-4 col-sm-4">
                 {{Form::label('category', 'Category:')}}
                 {{Form::text('business_category', '', ['class' => 'form-control', 'required' => 'required', 'placeholder' => ' '])}}
            </div>

                
           </div>
           <div class="row">
                <div class="col-md-3 col-sm-3">
                {{Form::label('business_capitalization', 'Capitalization:')}}
                {{Form::text('business_capitalization', '', ['class' => 'form-control', 'placeholder' => '₱'])}}
                </div>
        
                <div class="col-md-3 col-sm-3">
                {{Form::label('business_nature', 'Nature of Business:')}}
                {{Form::text('business_nature', '', ['class' => 'form-control', 'required' => 'required', 'placeholder' => ' '])}}
                </div>

                <div class="col-md-3 col-sm-3">
                {{Form::label('business_type_id', 'Type of Business Organization:')}}
                {{Form::text('business_type_id', '', ['class' => 'form-control', 'required' => 'required', 'placeholder' => ' '])}}
                </div>

                <div class="col-md-3 col-sm-3">
                {{Form::label('business_year_established', 'Year Established:')}}
                {{Form::number('business_year_established', '', ['class' => 'form-control', 'required' => 'required', 'placeholder' => ' '])}}
                </div>



           </div>
           <hr>
           <div class="row">
                <div class="col-md-6 col-sm-6">
                    {{Form::label('business_credit_terms', 'Credit Terms:')}}
                    {{Form::number('business_credit_terms', '', ['class' => 'form-control', 'required' => 'required', 'placeholder' => '₱'])}}
                </div>
                <div class="col-md-6 col-sm-6">
                    {{Form::label('business_credit_limit', 'Credit Limit:')}}
                    {{Form::number('business_credit_limit', '', ['class' => 'form-control', 'required' => 'required', 'placeholder' => '₱'])}}
                 </div> 
           </div>
           <hr>
       <!-- <div class="justify-content-center"> -->
         <div class="row">  
                <div class="col-md-4 ">

                    {{Form::label('business_assessment_accreditation', 'Assessment and Accreditation From')}}</br>
                    <label>
                        {{ Form::radio('business_assessment_accreditation', 'Compiled' , false ,[ 'required' => 'required']) }}
                        <span>Compiled</span>
                    </label>
                    <label>
                        {{ Form::radio('business_assessment_accreditation', 'not-compiled' , false) }} 
                        <span>not-compiled</span>
                    </label>
                </div>

                <div class="col-md-4  ">

                    {{Form::label('business_company_profile', 'Company Profile')}}</br>
                    <label>
                        {{ Form::radio('business_company_profile', 'Compiled' , false,[ 'required' => 'required']) }}
                        <span>Compiled</span>
                    </label>
                    <label>
                        {{ Form::radio('business_company_profile', 'not-compiled' , false) }} 
                        <span>not-compiled</span>
                    </label>
                </div>

                <div class="col-md-4  ">

             {{Form::label('business_permit', 'Business Permit')}}</br>
                <label>
                    {{ Form::radio('business_permit', 'Compiled' , false,[ 'required' => 'required']) }}
                    <span>Compiled</span>
                </label>
                <label>
                    {{ Form::radio('business_permit', 'not-compiled' , false) }} 
                    <span>not-compiled</span>
                </label>
            </div>
           
            
        </div >
        </br>

        <div class="row">
             <!-- <div class="col-md-4  ">

            {{Form::label('business_fpa_license', 'FPA license')}}</br>
            <label>
                {{ Form::radio('business_fpa_license', 'Compiled' , false,[ 'required' => 'required']) }}
                <span>Compiled</span>
            </label>
            <label>
                {{ Form::radio('business_fpa_license', 'not-compiled' , false) }} 
                <span>not-compiled</span>
            </label>
            </div> -->
            <div class="col-md-4  ">
                {{Form::label('business_coa', 'Certificate of Analysis')}}</br>
                <label>
                    {{ Form::radio('business_coa', 'Compiled' , false,[ 'required' => 'required']) }}
                    <span>Compiled</span>
                </label>
                <label>
                    {{ Form::radio('business_coa', 'not-compiled' , false) }} 
                    <span>not-compiled</span>
                </label>
            </div>
            <div class="col-md-4  ">
                {{Form::label('business_info1', 'Certificate of Registration')}}</br>
                <label>
                    {{ Form::radio('business_info1', 'Compiled' , false,[ 'required' => 'required']) }}
                    <span>Compiled</span>
                </label>
                <label>
                    {{ Form::radio('business_info1', 'not-compiled' , false) }} 
                    <span>not-compiled</span>
                </label>
            </div>
            </div >
        
</br>
                        
                        
                      
        {{Form::submit('Submit', ['class'=>'btn btn-primary pull-right'])}}
    {!! Form::close() !!}
    </br>
    </br>
    </br>
@endsection
