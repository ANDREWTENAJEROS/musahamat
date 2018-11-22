@extends('layouts.app')

@section('content')
    <h1>Product lines</h1>
    
@if(count($product_lines) > 0)
<table class="table table-striped">
                            <tr>
                                <th>Name</th>
                                <th>certificate</th>
                                <th>expiration date</th>
                                <th>MFL Price</th>
                                <th>Agritech Price</th>
                                <th></th> 
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
                    MFL Price: {{$product_lines->MFL_price}}
                    </div>
                    <div class="col-md-2">
                    Agritech Price: {{$product_lines->agritech_price}}
                    </div>
                </div>
            </div>--}}


              <tr>
                <!-- <td>{{$product_lines->id}}</td> -->
                <!-- <td><a href="/product_lines/{{$product_lines->id}}">{{$product_lines->product_line_name}}</a></td> -->
                <td><a href="supplier/{{$product_lines->supplier}}">{{$product_lines->product_line_name}}</a></td>
                <td>{{$product_lines->certificate}}</td>
                <td>{{$product_lines->expiration_date}}</td>
                <td>{{$product_lines->MFL_price}}</td>
                <td>{{$product_lines->agritech_price}}</td>
                
                <td><a href="/product_lines/{{$product_lines->id}}/edit" class="btn btn-default">Edit</a></td>
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
@endsection