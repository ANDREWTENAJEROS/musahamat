@extends('layouts.app')

@section('content')
<a href="/withdrawals"  class="btn btn-default hidden-print">Go Back</a>

    <h2>Withdrawal form</h2>
    {!! Form::open(['action' => 'withdrawalsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">


            
           
            <h4>Recipient</h4>
           <table class="table table-striped">
            <tr>
            <td>
            {{Form::label('company', 'Company name')}}
            <select name="company" class="form-control hidden-print">
                    <option class="dropdown-item" value="DOLE PHILIPPINES INC">DOLE PHILIPPINES INC</option>
                    <option class="dropdown-item" value="MINDANAO CORRUGSTED FIBRE BOARD INC">MINDANAO CORRUGSTED FIBRE BOARD INC</option>
                    <option class="dropdown-item" value="STENIEL MINDANAO PACKAGING CORPORATION">STENIEL MINDANAO PACKAGING CORPORATION</option>
                </select>
            {{--Form::text('company', '', ['class' => 'form-control', 'required' => 'required' ,'placeholder' => ' '])--}}
            </td>
            <td>
            {{Form::label('company', 'Boxplant')}}
            <select name="info1" class="form-control hidden-print">
                    <option class="dropdown-item" value="DOLE">DOLE</option>
                    <option class="dropdown-item" value="MINCOR">MINCOR</option>
                    <option class="dropdown-item" value="STENIEL">STENIEL</option>
                </select>
            {{--Form::text('info1', '', ['class' => 'form-control', 'required' => 'required' ,'placeholder' => ' '])--}}
            </td>
           <td>
            {{Form::label('address', 'Address')}}
            <select name="address" class="form-control hidden-print">
                    <option class="dropdown-item" value="PALLET SHED, CONTAINER YARD">DOLE - PALLET SHED, CONTAINER YARD</option>
                    <option class="dropdown-item" value="Km. 12, SASA DAVAO CITY">MINCOR - Km. 12, SASA DAVAO CITY</option>
                    <option class="dropdown-item" value="Km. 25, BUNAWAN, DAVAO CITY">STENIEL - Km. 25, BUNAWAN, DAVAO CITY</option>
                </select>
            {{--Form::text('address', '', ['class' => 'form-control', 'required' => 'required' ,'placeholder' => ' '])--}}
            </td>
            
            </tr>
            
            <tr>
            
            <td>
            {{Form::label('date', 'Document Date')}}
            {{Form::date('date',  date("m:d:Y"), ['class' => 'form-control', 'required' => 'required' ,'placeholder' =>''])}}
             </td>
             <td>
             {{Form::label('date', 'Week number')}}
            {{Form::number('week', date("W"), ['class' => 'form-control','min'=>'1','max'=>'52', 'required' => 'required' ,'placeholder' => ' '])}}
            {{Form::number('year', date("Y"), ['class' => 'form-control hidden ', 'style'=>'display:hidden', 'required' => 'required' ,'placeholder' => ' '])}}

             </td>
             <td></td>
            </tr>
            
            </table>
            <h4>Musahamat Trucking</h4>
            <table class="table table-striped">
            <tr>
            <td>
            {{Form::label('driver', 'Authorize Driver\'s Name')}}
            {{Form::text('driver', '', ['class' => 'form-control', 'required' => 'required' ,'placeholder' => ' '])}}
            </td>
            <td>
            {{Form::label('plate_no', 'Truck Plate No.')}}
            {{Form::text('plate_no', '', ['class' => 'form-control', 'required' => 'required' ,'placeholder' => ' '])}}
            </td>
            
            </tr>
            </table>
           
            <h4>Withdrawal details</h4>
           <table class="table table-striped">
            <tr>
            <td>
            {{Form::label('date_to_withdraw', 'Date to Withdraw')}}
            {{Form::date('date_to_withdraw', '', ['class' => 'form-control', 'required' => 'required' ,'placeholder' => ' '])}}
             </td>
            <td>
            {{Form::label('po_reference', 'P.O. Reference')}}
            {{Form::text('po_reference', '', ['class' => 'form-control', 'required' => 'required' ,'placeholder' => ' '])}}

            </td>
            <td>
            {{Form::label('destination', 'Destination')}}
            <select name="destination" class="form-control hidden-print">
                    <option class="dropdown-item" value="HKJ1">HKJ1</option>
                    <option class="dropdown-item" value="HKJ2">HKJ2</option>
                    <option class="dropdown-item" value="HKJ3">HKJ3</option>
                    <option class="dropdown-item" value="HKJ4">HKJ4</option>
                    <option class="dropdown-item" value="HKJ5">HKJ5</option>
                    <option class="dropdown-item" value="HKJ6">HKJ6</option>
                    <option class="dropdown-item" value="HKJ7">HKJ7</option>
                    <option class="dropdown-item" value="NADER">NADER</option>
                </select>
            {{--Form::text('destination', '', ['class' => 'form-control', 'required' => 'required' ,'placeholder' => ' '])--}}
             </td>
            </tr>
            </table>
           
            <hr>
            <h4>Item description</h4>
           <table class="table table-striped">
            <tr>
            <td>
            {{Form::label('kg1', 'Weight per item')}}
            {{Form::text('kg1', '', ['class' => 'form-control', 'required' => 'required' ,'placeholder' => ' '])}}
            </td>
            <td>
            {{Form::label('item1', 'Item')}}
            {{Form::text('item1', '', ['class' => 'form-control', 'required' => 'required' ,'placeholder' => 'Cover'])}}
            </td>
            <td>
            {{Form::label('qty1', 'Quantity per item ')}}
            {{Form::text('qty1', '', ['class' => 'form-control', 'required' => 'required' ,'placeholder' => 'PCS'])}}
            </td>
            </tr>
            <tr>
            <td>
            {{Form::label('kg2', 'Weight per item')}}
            {{Form::text('kg2', '', ['class' => 'form-control', 'required' => 'required' ,'placeholder' => ''])}}
            </td>
            <td>
            {{Form::label('item2', 'Item')}}
            {{Form::text('item2', '', ['class' => 'form-control', 'required' => 'required' ,'placeholder' => 'Body'])}}
            </td>
            <td>
            {{Form::label('qty1', 'Quantity per item ')}}
            {{Form::text('qty2', '', ['class' => 'form-control', 'required' => 'required' ,'placeholder' => 'PCS'])}}
            </td>
            </tr>
            <tr>
            <td>
            {{Form::label('kg1', 'Weight per item')}}
            {{Form::text('kg3', '', ['class' => 'form-control', 'required' => 'required' ,'placeholder' => ' '])}}
            </td>
            <td>
            {{Form::label('item1', 'Item')}}
            {{Form::text('item3', '', ['class' => 'form-control', 'required' => 'required' ,'placeholder' => 'Pads'])}}
            </td>
            <td>
            {{Form::label('qty1', 'Quantity per item ')}}
            {{Form::text('qty3', '', ['class' => 'form-control', 'required' => 'required' ,'placeholder' => 'PCS'])}}
            </td>
            </tr>
            </table>
           <hr>
        
           <h3>Status</h3>
           <table class="table table-striped">
           
            <tr>
            <td>
            {{Form::label('status', 'Current Status')}}
            <select name="status" class="form-control hidden-print">
                    <option class="dropdown-item" value="HKJ1">Pending</option>
                    <option class="dropdown-item" value="HKJ2">Received</option>
                    <option class="dropdown-item" value="HKJ3">Cancelled</option>
            </select>
            {{--Form::text('status', '', ['class' => 'form-control', 'required' => 'required' ,'placeholder' => ' '])--}}
            </td>
            <td>
            {{Form::label('actual_withdraw_date	', 'Actual Withdraw Date	')}}
            {{Form::date('actual_withdraw_date	', '', ['class' => 'form-control','style'=>'width:50%' ,'placeholder' => ' '])}}

            </td>
            </tr>
            </table>

        </div >
</br>
                        
                        
                      
        {{Form::submit('Submit', ['class'=>'btn btn-primary pull-right'])}}
    {!! Form::close() !!}
    </br>
    </br>
    </br>
@endsection
