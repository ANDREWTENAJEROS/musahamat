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
                    {{Form::email('business_email', '', ['class' => 'form-control', 'required' => 'required', 'placeholder' => ' '])}}
             </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4">

                {{Form::label('business_tel', 'tel number:')}}
                {{Form::number('business_tel', '', ['class' => 'form-control', 'required' => 'required', 'placeholder' => ' '])}}
                </div>

                <div class="col-md-4 col-sm-4">
                {{Form::label('business_fax', 'fax number:')}}
                {{Form::number('business_fax', '', ['class' => 'form-control', 'required' => 'required', 'placeholder' => ' '])}}
                </div>

                <div class="col-md-4 col-sm-4">
                 {{Form::label('category', 'Category:')}}
                 {{Form::text('business_info1', '', ['class' => 'form-control', 'required' => 'required', 'placeholder' => ' '])}}
            </div>

                
           </div>
           <div class="row">
                <div class="col-md-3 col-sm-3">
                {{Form::label('business_capitalization', 'Capitalization:')}}
                {{Form::text('business_capitalization', '', ['class' => 'form-control', 'required' => 'required', 'placeholder' => ' '])}}
                </div>
        
                <div class="col-md-3 col-sm-3">
                {{Form::label('business_nature', 'Business Nature:')}}
                {{Form::text('business_nature', '', ['class' => 'form-control', 'required' => 'required', 'placeholder' => ' '])}}
                </div>

                <div class="col-md-3 col-sm-3">
                {{Form::label('business_type_id', 'Business Type:')}}
                {{Form::text('business_type_id', '', ['class' => 'form-control', 'required' => 'required', 'placeholder' => ' '])}}
                </div>

                <div class="col-md-3 col-sm-3">
                {{Form::label('business_year_established', 'Year Established:')}}
                {{Form::number('business_year_established', '', ['class' => 'form-control', 'required' => 'required', 'placeholder' => ' '])}}
                </div>



           </div>
           
           <hr>
       <div style="display: inline-block">
         <div class="row">  
                            <div class="col-md-2 col-sm-2">

             {{Form::label('business_assessment_accreditation', 'Assessment and Accreditation')}}</br>
                <label>
                    {{ Form::radio('business_assessment_accreditation', 'Compiled' , false ,[ 'required' => 'required']) }}
                    <span>Compiled</span>
                </label>
                <label>
                    {{ Form::radio('business_assessment_accreditation', 'not-compiled' , false) }} 
                    <span>not-compiled</span>
                </label>
            </div>

                                    <div class="col-md-2 col-sm-2">

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

                                    <div class="col-md-2 col-sm-2">

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
            <div class="col-md-2 col-sm-2">

             {{Form::label('business_fpa_license', 'FPA license')}}</br>
                <label>
                    {{ Form::radio('business_fpa_license', 'Compiled' , false,[ 'required' => 'required']) }}
                    <span>Compiled</span>
                </label>
                <label>
                    {{ Form::radio('business_fpa_license', 'not-compiled' , false) }} 
                    <span>not-compiled</span>
                </label>
            </div>
            <div class="col-md-2 col-sm-2">

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
        </div >
    </div >
                        </br>
                        <div class="row justify-content-center">
                            <table class="table">
                                <tr>
                                    <th>Assessment and Accreditation</th>
                                    <th>Company Profile</th>
                                    <th>Business Permit</th>
                                    <th>FPA license</th>
                                    <th>Certificate of Analysis</th>
                                </tr>
                                    <tr>
                                        <td> 
                                        <label>
                                            {{ Form::radio('business_assessment_accreditation', 'Compiled' , false ,[ 'required' => 'required']) }}
                                            <span>Compiled</span>
                                        </label>
                                        <label>
                                            {{ Form::radio('business_assessment_accreditation', 'not-compiled' , false) }} 
                                            <span>not-compiled</span>
                                        </label>
                                        </td>

                                        <td>
                                                <label>
                                                    {{ Form::radio('business_company_profile', 'Compiled' , false,[ 'required' => 'required']) }}
                                                    <span>Compiled</span>
                                                </label>
                                                <label>
                                                    {{ Form::radio('business_company_profile', 'not-compiled' , false) }} 
                                                    <span>not-compiled</span>
                                                </label>
                                        </td>
                                        <td>
                                                <label>
                                                    {{ Form::radio('business_permit', 'Compiled' , false,[ 'required' => 'required']) }}
                                                    <span>Compiled</span>
                                                </label>
                                                <label>
                                                    {{ Form::radio('business_permit', 'not-compiled' , false) }} 
                                                    <span>not-compiled</span>
                                                </label>
                                        </td>
                                        <td>
                                            <label>
                                                {{ Form::radio('business_fpa_license', 'Compiled' , false,[ 'required' => 'required']) }}
                                                <span>Compiled</span>
                                            </label>
                                            <label>
                                                {{ Form::radio('business_fpa_license', 'not-compiled' , false) }} 
                                                <span>not-compiled</span>
                                            </label>
                                        </td>
                                        <td>
                                            <label>
                                                {{ Form::radio('business_coa', 'Compiled' , false,[ 'required' => 'required']) }}
                                                <span>Compiled</span>
                                            </label>
                                            <label>
                                                {{ Form::radio('business_coa', 'not-compiled' , false) }} 
                                                <span>not-compiled</span>
                                            </label>
                                        </td>
                                    </tr>
                            </table>
                        </div>   
                        
                      
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
