@extends('layouts.app')

@section('content')
<h2>Edit {{$supplier->business_name}}</h2>
    {!! Form::open(['action' => ['supplierController@update', $supplier->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('business_name', 'Supplier Name:')}}
            {{Form::text('business_name', $supplier->business_name, ['class' => 'form-control', 'required' => 'required' ,'placeholder' => ' '])}}

            <div class="row">
            <div class="col-md-4 col-sm-4">
                    {{Form::label('business_address', 'Business Address:')}}
                    {{Form::text('business_address', $supplier->business_address, ['class' => 'form-control', 'required' => 'required', 'placeholder' => ' '])}}
                </div>
                <div class="col-md-4 col-sm-4">
                    {{Form::label('business_email Name', 'Email Address:')}}
                    {{Form::email('business_email', $supplier->business_email, ['class' => 'form-control', 'placeholder' => ' '])}}
             </div>
             <div class="col-md-4 col-sm-4">
                    {{Form::label('business_info2', 'TIN:')}}
                    {{Form::text('business_info2', $supplier->business_info2, ['class' => 'form-control', 'placeholder' => ' '])}}
             </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4">

                {{Form::label('business_tel', 'Tel number:')}}
                {{Form::tel('business_tel', $supplier->business_tel, ['class' => 'form-control', 'placeholder' => ' '])}}
                </div>

                <div class="col-md-4 col-sm-4">
                {{Form::label('business_fax', 'Fax number:')}}
                {{Form::tel('business_fax', $supplier->business_fax, ['class' => 'form-control', 'placeholder' => ' '])}}
                </div>

                <div class="col-md-4 col-sm-4">
                 {{Form::label('category', 'Category:')}}
                 {{Form::text('business_category', $supplier->business_category, ['class' => 'form-control', 'required' => 'required', 'placeholder' => ' '])}}
            </div>

                
           </div>
           <div class="row">
                <div class="col-md-3 col-sm-3">
                {{Form::label('business_capitalization', 'Capitalization:')}}
                {{Form::text('business_capitalization', $supplier->business_capitalization, ['class' => 'form-control', 'placeholder' => ' '])}}
                </div>
        
                <div class="col-md-3 col-sm-3">
                {{Form::label('business_nature', 'Business Nature:')}}
                {{Form::text('business_nature', $supplier->business_nature, ['class' => 'form-control',  'placeholder' => ' '])}}
                </div>

                <div class="col-md-3 col-sm-3">
                {{Form::label('business_type_id', 'Business Type:')}}
                {{Form::text('business_type_id', $supplier->business_type_id, ['class' => 'form-control', 'required' => 'required', 'placeholder' => ' '])}}
                </div>

                <div class="col-md-3 col-sm-3">
                {{Form::label('business_year_established', 'Year Established:')}}
                {{Form::number('business_year_established', $supplier->business_year_established, ['class' => 'form-control',  'placeholder' => ' '])}}
                </div>



           </div>
           <hr>
           <div class="row">
                <div class="col-md-6 col-sm-6">
                    {{Form::label('business_credit_terms', 'Credit Terms:')}}
                    {{Form::number('business_credit_terms', $supplier->business_credit_terms, ['class' => 'form-control', 'required' => 'required', 'placeholder' => '₱'])}}
                </div>
                <div class="col-md-6 col-sm-6">
                    {{Form::label('business_credit_limit', 'Credit Limit:')}}
                    {{Form::number('business_credit_limit', $supplier->business_credit_limit, ['class' => 'form-control', 'required' => 'required', 'placeholder' => '₱'])}}
                 </div> 
           </div>
           <hr>
       
         <div class="row">  
                            <div class="col-md-2 col-sm-2">

             {{Form::label('business_assessment_accreditation', 'Assessment and Accreditation From')}}</br>
                <label>
                    {{ Form::radio('business_assessment_accreditation', 'Complied' , false ,[ 'required' => 'required']) }}
                    <span>Complied</span>
                </label>
                <label>
                    {{ Form::radio('business_assessment_accreditation', 'Not-Complied' , false) }} 
                    <span>Not-Complied</span>
                </label>
            </div>

                                    <div class="col-md-2 col-sm-2">

             {{Form::label('business_company_profile', 'Company Profile')}}</br>
                <label>
                    {{ Form::radio('business_company_profile', 'Complied' , false,[ 'required' => 'required']) }}
                    <span>Complied</span>
                </label>
                <label>
                    {{ Form::radio('business_company_profile', 'Not-Complied' , false) }} 
                    <span>Not-Complied</span>
                </label>
            </div>

                                    <div class="col-md-2 col-sm-2">

             {{Form::label('business_permit', 'Business Permit')}}</br>
                <label>
                    {{ Form::radio('business_permit', 'Complied' , false,[ 'required' => 'required']) }}
                    <span>Complied</span>
                </label>
                <label>
                    {{ Form::radio('business_permit', 'Not-Complied' , false) }} 
                    <span>Not-Complied</span>
                </label>
            </div>
            <div class="col-md-2 col-sm-2">

             {{Form::label('business_fpa_license', 'FPA license')}}</br>
                <label>
                    {{ Form::radio('business_fpa_license', 'Complied' , false,[ 'required' => 'required']) }}
                    <span>Complied</span>
                </label>
                <label>
                    {{ Form::radio('business_fpa_license', 'Not-Complied' , false) }} 
                    <span>Not-Complied</span>
                </label>
            </div>
            <div class="col-md-2 col-sm-2">

             {{Form::label('business_coa', 'Certificate of Analysis')}}</br>
                <label>
                    {{ Form::radio('business_coa', 'Complied' , false,[ 'required' => 'required']) }}
                    <span>Complied</span>
                </label>
                <label>
                    {{ Form::radio('business_coa', 'Not-Complied' , false) }} 
                    <span>Not-Complied</span>
                </label>
            </div>
            <div class="row">
            <div class="col-md-2  ">
            {{Form::label('business_info1', 'Certificate of Registration')}}</br>
            <label>
                {{ Form::radio('business_info1', 'Complied' , false,[ 'required' => 'required']) }}
                <span>Complied</span>
            </label>
            <label>
                {{ Form::radio('business_info1', 'Not-Complied' , false) }} 
                <span>Not-Complied</span>
            </label>
            </div>
            </div >

            </div >
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection