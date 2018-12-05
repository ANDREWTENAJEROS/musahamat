@extends('layouts.app')

@section('content')
    <h2>Product lines</h2>
    
@if(count($product_lines) > 0)
<table class="table table-striped">
                            <tr>
                                    <th>Supplier</th>
                                <th>Name</th>
                                <th>certificate</th>
                                <th>expiration date</th>
                                <th>MFI Price</th>
                                <th>Agrotech Price</th>
                                <th></th> 
                                <th></th> 

                            </tr>
        @foreach($product_lines as $product_lines)
     

        @if($product_lines->product_line_name != null)
        <?php $supplier = DB::table('supplier')->where('id', '=', $product_lines->supplier)->get()->first();;?>
              <tr>
                <!-- <td>{{$product_lines->id}}</td> -->
                <td><a href="supplier/{{$product_lines->supplier}}">{{$supplier->business_name}}</a></td>
                <td><a href="supplier/{{$product_lines->supplier}}">{{$product_lines->product_line_name}}</a></td>
                <td>{{$product_lines->certificate}}</td>
                <td>{{$product_lines->expiration_date}}</td>
                <td>₱ {{$product_lines->MFL_price}}</td>
                <td>₱ {{$product_lines->agritech_price}}</td>
                @if (!Auth::guest())
                <td><a href="/product_lines/{{$product_lines->id}}/edit" class="btn btn-default">Edit</a></td>
                <td>
                    {!!Form::open(['action' => ['product_linesController@destroy', $product_lines->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}
                </td>
                @endif
            </tr>
            @endif
        @endforeach
        </table>
    @else
        <p>No product lines found</p>
    @endif

    
@endsection