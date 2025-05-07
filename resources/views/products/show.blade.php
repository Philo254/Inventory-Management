@extends('layout')
@section('content')


    <div class="card">
        <div class="card-header"><h1>Products show Page</h1></div>
        <div class="card-body">


            <div class="card-body">
                <h5 class="card-title">Name : {{ $products->name }}</h5>
                <p class="card-text">Quantity : {{ $products->quantity }}</p>
                <p class="card-text">Price : {{ $products->price }}</p>
            </div>

            </hr>

        </div>
    </div>
    @endsection
