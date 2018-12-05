@extends('layouts.app')

@section('content')
<h2>Edit ATW</h2>
    {!! Form::open(['action' => ['withdrawalsController@update', $withdrawals->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">

        
            
           
<h4>Recipient</h4>
<table class="table table-striped">
<tr>
            <td>
            {{Form::label('company', 'Comapny name')}}
            {{Form::text('company', $withdrawals->company, ['class' => 'form-control', 'required' => 'required' ,'placeholder' => ' '])}}
            </td>
            <td>
            {{Form::label('company', 'Recipient Person')}}
            {{Form::text('info2', $withdrawals->info2, ['class' => 'form-control' ,'placeholder' => ' '])}}
            </td>
            <td>
            {{Form::label('company', 'Boxplant')}}
            {{Form::text('info1', $withdrawals->info1, ['class' => 'form-control', 'required' => 'required' ,'placeholder' => ' '])}}
            </td>
            
            </tr>
            
            <tr>
            <td>
            {{Form::label('address', 'Address')}}
            {{Form::text('address', $withdrawals->address, ['class' => 'form-control', 'required' => 'required' ,'placeholder' => ' '])}}
            </td>
            <td>
            {{Form::label('date', 'Document Date')}}
            {{Form::date('date', $withdrawals->date, ['class' => 'form-control', 'required' => 'required' ,'placeholder' => ' '])}}
             </td>
             <td></td>
             <td></td>
            </tr>
</table>
<h4>Musahamat Trucking</h4>
<table class="table table-striped">
<tr>
<td>
{{Form::label('driver', 'Authorize Driver\'s Name')}}
{{Form::text('driver', $withdrawals->driver, ['class' => 'form-control', 'required' => 'required' ,'placeholder' => ' '])}}
</td>
<td>
{{Form::label('plate_no', 'Truck Plate No.')}}
{{Form::text('plate_no', $withdrawals->plate_no, ['class' => 'form-control', 'required' => 'required' ,'placeholder' => ' '])}}
</td>

</tr>
</table>

<h4>Withdrawal details</h4>
<table class="table table-striped">
<tr>
<td>
{{Form::label('date_to_withdraw', 'Date to Withdraw')}}
{{Form::date('date_to_withdraw', $withdrawals->date_to_withdraw, ['class' => 'form-control', 'required' => 'required' ,'placeholder' => ' '])}}
 </td>
<td>
{{Form::label('po_reference', 'P.O. Reference')}}
{{Form::text('po_reference', $withdrawals->po_reference, ['class' => 'form-control', 'required' => 'required' ,'placeholder' => ' '])}}

</td>
<td>
{{Form::label('destination', 'Destination')}}
{{Form::text('destination', $withdrawals->destination, ['class' => 'form-control', 'required' => 'required' ,'placeholder' => ' '])}}
 </td>
</tr>
</table>

<hr>
<h4>Item description</h4>
<table class="table table-striped">
<tr>
<td>
@if($withdrawals->qty3==null)
{{Form::label('kg1', 'No. of Pallets')}}
@else
{{Form::label('kg1', 'Weight per item')}}
@endif
{{Form::text('kg1', $withdrawals->kg1, ['class' => 'form-control', 'required' => 'required' ,'placeholder' => ' '])}}
</td>
<td>
{{Form::label('item1', 'Item')}}
{{Form::text('item1', $withdrawals->item1, ['class' => 'form-control', 'required' => 'required' ,'placeholder' => 'Cover'])}}
</td>
<td>
{{Form::label('qty1', 'Quantity per item ')}}
{{Form::text('qty1', $withdrawals->qty1, ['class' => 'form-control', 'required' => 'required' ,'placeholder' => 'PCS'])}}
</td>
</tr>
<tr>
<td>
@if($withdrawals->qty3==null)
{{Form::label('kg1', 'No. of Pallets')}}
@else
{{Form::label('kg1', 'Weight per item')}}
@endif
{{Form::text('kg2', $withdrawals->kg2, ['class' => 'form-control', 'required' => 'required' ,'placeholder' => ''])}}
</td>
<td>
{{Form::label('item2', 'Item')}}
{{Form::text('item2', $withdrawals->item2, ['class' => 'form-control', 'required' => 'required' ,'placeholder' => 'Body'])}}
</td>
<td>
{{Form::label('qty1', 'Quantity per item ')}}
{{Form::text('qty2', $withdrawals->qty2, ['class' => 'form-control', 'required' => 'required' ,'placeholder' => 'PCS'])}}
</td>
</tr>
@if($withdrawals->qty3!=null)
<tr>
<td>

{{Form::label('kg1', 'Weight per item')}}
{{Form::text('kg3', $withdrawals->kg3, ['class' => 'form-control', 'required' => 'required' ,'placeholder' => ' '])}}
</td>
<td>
{{Form::label('item1', 'Item')}}
{{Form::text('item3', $withdrawals->item3, ['class' => 'form-control', 'required' => 'required' ,'placeholder' => 'Pads'])}}
</td>
<td>
{{Form::label('qty1', 'Quantity per item ')}}
{{Form::text('qty3', $withdrawals->qty3 ,['class' => 'form-control', 'required' => 'required' ,'placeholder' => 'PCS'])}}
</td>
</tr>
@endif
</table>
<hr>

<h3>Status</h3>
<table class="table table-striped">

<tr>
<td>
{{Form::label('status', 'Status')}}
{{Form::text('status', $withdrawals->status, ['class' => 'form-control', 'required' => 'required' ,'placeholder' => ' '])}}
</td>
<td>
{{Form::label('actual_withdraw_date	', 'Actual Withdraw Date	')}}
{{Form::date('actual_withdraw_date	', $withdrawals->actual_withdraw_date, ['class' => 'form-control' ,'placeholder' => ' '])}}

</td>
</tr>
</table>

</div >
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary pull-right'])}}
    {!! Form::close() !!}
    </br>
    </br></br>
@endsection