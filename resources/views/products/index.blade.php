@extends('layouts.master')

@section('title')
Products
@endsection

@section('content')
<div class="small-container">
    <b>
        <i>
            <h1 class="title">PRODUCTS</h1>
        </i>
    </b>
    
    @if (count($products) > 0)
    <div class="main">
        @foreach ($products as $product)
        <div class="col-4">
            <a href="{{ route('products.single', ['slug' => $product->slug]) }}">
                <img src="{{ $product->image_url }}">
            </a>
            <a href="{{ route('products.single', ['slug' => $product->slug]) }}">
                <h4>{{ $product->name }}</h4>
            </a>
            <P>${{ $product->price }}</P>
        </div>
        @endforeach
    </div>
    @endif
</div>
@endsection

@section('scripts')
<!----------js for toggle menu----------->

<script>
    var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px";

    function menutoggle(){
        if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight = "200px";
            }
        else
            {
                MenuItems.style.maxHeight = "0px";
            }
    }
</script>
@endsection