@extends('layouts.master')

@section('title')
    {{ $product->name }}
@endsection

@section('content')
    <!----------singel prodcut details----------->
    
    <div class="small-container single-product">
        <div class="main">
            <div class="col-2">
                <img src="{{ $product->image_url }}" width="40%" alt="{{ $product->name }}" class="img-2">
            </div>

            <div class = "col-2">
                <h1>{{ $product->name }}</h1>
                <h4>${{ $product->price }}</h4>

                <form action="{{ route('cart.add', ['id' => $product->id]) }}" method="post">
                    @csrf
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" class="btn btn-dark">ADD TO CART</button>

                    <a href="{{ route('account.checkout') }}" class="btn btn-success text-center">CHECKOUT</a>
                </form>
            </div>
        </div>
    </div>
@endsection