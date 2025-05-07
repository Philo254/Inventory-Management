@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header"><h1>Products edit Page<h1></div>
        <div class="card-body">

            <form action="{{ url('products/' .$products->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$products->id}}" id="id" />
                <label>Name</label></br>
                <input type="text" name="name" id="name" value="{{$products->name}}" class="form-control"></br>
                <label>Quantity</label></br>
                <input type="text" name="quantity" id="quantity" value="{{$products->quantity}}" class="form-control"></br>
                <label>Price</label></br>
                <input type="text" name="price" id="price" value="{{$products->price}}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
