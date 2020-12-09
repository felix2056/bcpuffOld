@extends('layouts.master')

@section('title')
    Cart
@endsection

@section('content')
<!---------cart item details--------->
<div class="small-container cart-page">
    @if(session('cart'))
    <table>
        <tr>
            <th>PRODUCT</th>
            <th>QUANTITY</th>
            <th>SUBTOTAL</th>
        </tr>

        <?php $total = 0 ?>

        @foreach(session('cart') as $id => $details)
        <?php $total += $details['price'] * $details['quantity'] ?>

        <tr class="cart-{{ $id }}">
            <td>
                <div class="cart-info">
                    <img src="{{ $details['photo'] }}">
                    <div>
                        <p>{{ $details['name'] }}</p>
                        <small>PRICE: ${{ $details['price'] }}</small>
                        <br>
                        <span style="display: flex;">
                            <a href="#" data-id="{{ $id }}" style="padding: 3px;" class="update-cart badge-success">
                                UPDATE
                            </a>
                            <a href="#" data-id="{{ $id }}" style="padding: 3px;" class="remove-from-cart badge-danger">REMOVE</a>
                        </span>
                    </div>
                </div>
            </td>
            <td><input type="number" value="{{ $details['quantity'] }}" min="1" class="quantity"></td>
            <td>${{ $details['price'] * $details['quantity'] }}</td>
        </tr>
        @endforeach
    </table>

    <div class="total-price">
        <table>
            <tr>
                <td>TAX</td>
                <td>$5.00</td>
            </tr>
            <tr>
                <td>TOTAL</td>
                <td>${{ $total }}</td>
            </tr>

            <tr>
                <td>
                    <a href="{{ route('account.checkout') }}" class="btn btn-success text-center">
                        <i class="fa fa-angle-left"></i> Checkout</a>
                </td>

                <td>
                    <a href="{{ route('products.index') }}" class="btn btn-warning text-center">
                        <i class="fa fa-angle-left"></i> Continue Shopping</a>
                </td>
            </tr>
        </table>
    </div>
    
    @else
    <div class="main">
        <p>Your Shopping Cart Is Empty!</p>

        <div class="shop-more">
            <a href="{{ route('products.index') }}" class="btn btn-warning">
                <i class="fa fa-angle-left"></i> Shop Products
            </a>
        </div>
    </div>
    @endif
</div>
@endsection

@section('scripts')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!----------js for toggle menu----------->

<script>
    var MenuItems = document.getElementById("MenuItems");
    MenuItems.style.maxHeight = "0px";
    
    function menutoggle(){
        if(MenuItems.style.maxHeight == "0px") {
            MenuItems.style.maxHeight = "200px";
        }
        else {
            MenuItems.style.maxHeight = "0px";
        }
    }

    $(".update-cart").click(function (e) {
           e.preventDefault();
           var ele = $(this);

            $.ajax({
               url: '{{ route('cart.update') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();
            var ele = $(this);

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '{{ route('cart.remove') }}',
                        method: "DELETE",
                        data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                        success: function (response) {
                            window.location.reload();
                        }
                    });
                }
            });
        });
</script>
@endsection