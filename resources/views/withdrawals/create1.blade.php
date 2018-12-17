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
            {{Form::label('company', 'Comapny name')}}
            {{Form::text('company', '', ['class' => 'form-control', 'required' => 'required' ,'placeholder' => ' '])}}
            </td>
            <td>
            {{Form::label('company', 'Recipient Person')}}
            {{Form::text('info2', '', ['class' => 'form-control' ,'placeholder' => ' '])}}
            </td>
            <td>
            {{Form::label('company', 'Boxplant')}}
            {{Form::text('info1', '', ['class' => 'form-control', 'required' => 'required' ,'placeholder' => ' '])}}
            </td>
            
            </tr>
            
            <tr>
            <td>
            {{Form::label('address', 'Address')}}
            {{Form::text('address', '', ['class' => 'form-control', 'required' => 'required' ,'placeholder' => ' '])}}
            </td>
            <td>
            {{Form::label('date', 'Document Date')}}
            {{Form::date('date', '', ['class' => 'form-control', 'required' => 'required' ,'placeholder' => ' '])}}
             </td>
             <td>
             {{Form::label('date', 'Week number')}}
            {{Form::number('week', $dayOfWeek = date("W"), ['class' => 'form-control', 'required' => 'required' ,'placeholder' => ' '])}}
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
            <?php   $AC = $users = DB::table('withdrawals')->where('kg3',null)->count(); ?>
            {{Form::label('po_reference', 'Withdrawal No.')}}
            {{Form::text('po_reference', $AC, ['class' => 'form-control', 'required' => 'required' ,'placeholder' => ''])}}

            </td>
            <td>
            {{Form::label('destination', 'Destination')}}
            {{Form::text('destination', '', ['class' => 'form-control', 'required' => 'required' ,'placeholder' => ' '])}}
             </td>
            </tr>
            </table>
           
            <hr>
            <h4>Item description</h4>
           <table class="table table-striped">
            <tr>
           
            <td>
            {{Form::label('item1', 'Item')}}
            {{Form::text('item1', '', ['class' => 'form-control', 'required' => 'required' ,'placeholder' => 'ANACO CRATES'])}}
            </td>
            <td>
            {{Form::label('qty1', 'Quantity per item ')}}
            {{Form::text('qty1', '', ['class' => 'form-control', 'required' => 'required' ,'placeholder' => 'PCS'])}}
            </td>
            <td>
            {{Form::label('kg1', 'No. of Pallets')}}
            {{Form::text('kg1', '', ['class' => 'form-control', 'required' => 'required' ,'placeholder' => ' '])}}
            </td>
            </tr>
            <tr>
           
            <td>
            {{Form::label('item2', 'Item')}}
            {{Form::text('item2', '', ['class' => 'form-control', 'required' => 'required' ,'placeholder' => 'PALLETS'])}}
            </td>
            <td>
            {{Form::label('qty2', 'Quantity per item ')}}
            {{Form::text('qty2', '', ['class' => 'form-control', 'required' => 'required' ,'placeholder' => 'PCS'])}}
            </td>
             <td>
            {{Form::label('kg2', 'No. of Pallets')}}
            {{Form::text('kg2', '', ['class' => 'form-control', 'required' => 'required' ,'placeholder' => ''])}}
            </td>
            </tr>
            
            </table>
           <hr>
        
           <h3>Status</h3>
           <table class="table table-striped">
           
            <tr>
            <td>
            {{Form::label('status', 'Status')}}
            {{Form::text('status', '', ['class' => 'form-control', 'required' => 'required' ,'placeholder' => ' '])}}
            </td>
            <td>
            {{Form::label('actual_withdraw_date	', 'Actual Withdraw Date	')}}
            {{Form::date('actual_withdraw_date	', '', ['class' => 'form-control' ,'placeholder' => ' '])}}

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
