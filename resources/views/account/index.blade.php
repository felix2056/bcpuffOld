@extends('layouts.admin')

@section('title')
Account
@endsection

@section('content')
<div class="container-full">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box bg-primary bg-img" style="background-image: url(/admin/images/bg-1.png)">
                    <div class="box-body text-center">
                        <div class="icon rounded-circle w-60 h-60 mx-auto my-40">
                            <i class="text-white mr-0 font-size-20 fa fa-trophy"></i>
                        </div>
                        <div class="max-w-500 mx-auto">
                            <h2 class="text-white mb-20 font-weight-500">Welcome {{ Auth::user()->name }},</h2>
                            <p class="text-white-50 mb-10 font-size-20">You account is ready, you can start browsing all
                                products on BCPUFF. Checkout the store</p>
                        </div>
                    </div>
                </div>
            </div>

            @if (count($data['top_sellers']) > 0)
            <div class="col-12">
                <div class="box bg-transparent no-shadow mb-10">
                    <div class="box-header no-border pb-0 pt-10">
                        <h4 class="box-title">Top Selling Products</h4>
                    </div>
                </div>
                <div class="box">
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-border mb-0">
                                <tbody>
                                    @foreach ($data['top_sellers'] as $index => $product)
                                    <tr>
                                        <td>
                                            <h6 class="mb-0 font-weight-500 text-mute text-nowrap">0{{ $index }}</h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 font-weight-500 text-mute text-nowrap"><a
                                                    href="{{ route('products.single', ['slug' => $product->slug]) }}">{{ $product->name }}</a>
                                            </h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 font-weight-500 text-mute text-nowrap">
                                                {{ Carbon\Carbon::parse($product->created_at)->format('F jS, Y') }}</h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 font-weight-500 text-mute text-nowrap">
                                                {{ Carbon\Carbon::parse($product->updated_at)->format('F jS, Y') }}</h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 font-weight-500 text-mute text-nowrap">
                                                ${{ $product->price }}</h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 font-weight-500 text-mute text-nowrap">{{ $product->stock }}
                                                <span class="badge badge-success">IN-STOCK</span></h6>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            @if(session('cart'))
            <div class="col-12 col-lg-8">
                <div class="box">
                    <div class="box-header bg-primary">
                        <h4 class="box-title"><strong>YOUR CART ({{ count((array) session('cart')) }} ITEMS)</strong></h4>
                    </div>

                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table product-overview">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Product info</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th style="text-align:center">Total</th>
                                        <th style="text-align:center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $total = 0 ?>

                                    @foreach(session('cart') as $id => $details)
                                    <?php $total += $details['price'] * $details['quantity'] ?>
                                    
                                    <tr class="cart-{{ $id }}">
                                        <td><img src="{{ $details['photo'] }}" alt="{{ $details['name'] }}" width="80"></td>
                                        <td>
                                            <h5>{{ $details['name'] }}</h5>
                                        </td>
                                        <td>${{ $details['price'] }}</td>
                                        <td width="70">
                                            <input type="number" class="form-control" value="{{ $details['quantity'] }}" min="1">
                                        </td>
                                        <td width="100" align="center" class="font-weight-900">${{ $details['price'] * $details['quantity'] }}</td>
                                        <td align="center">
                                            <a href="javascript:void(0)"
                                                data-id="{{ $id }}"
                                                class="remove-from-cart btn btn-circle btn-danger btn-xs" title="" data-toggle="tooltip"
                                                data-original-title="Delete"><i class="ti-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <button class="btn btn-success pull-right"><i class="fa fa fa-shopping-cart"></i>
                                Checkout</button>
                            <button class="btn btn-info"><i class="fa fa-arrow-left"></i> Continue shopping</button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="box">
                    <div class="box-header bg-info">
                        <h4 class="box-title"><strong>Cart Summary</strong></h4>
                    </div>

                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table simple mb-0">
                                <tbody>
                                    <tr>
                                        <td>Total</td>
                                        <td class="text-right font-weight-700">${{ $total }}</td>
                                    </tr>
                                    <tr>
                                        <td>Delivery Charges</td>
                                        <td class="text-right font-weight-700">$0</td>
                                    </tr>
                                    <tr>
                                        <td>Tax</td>
                                        <td class="text-right font-weight-700">$5</td>
                                    </tr>
                                    <tr>
                                        <th class="bt-1">Payable Amount</th>
                                        <th class="bt-1 text-right font-weight-900 font-size-18">${{ $total + 5 }}</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-danger">Cancel Order</button>
                        <button class="btn btn-primary pull-right">Place Order</button>
                    </div>
                </div>

                <div class="box">
                    <div class="box-header bg-dark">
                        <h4 class="box-title"><strong>Support</strong></h4>
                    </div>

                    <div class="box-body">
                        <h4 class="font-weight-800"><i class="ti-mobile"></i> +1800 123 1234 <span
                                class="text-info">(Toll Free)</span></h4>
                        <p>Contact us for any queries. We are avalible 24x7x365.</p>
                    </div>
                </div>

            </div>

            @else
            <div class="col-12">
                <div class="box">
                    <div class="box-header bg-primary">
                        <h4 class="box-title"><strong>YOUR CART (0 ITEMS)</strong></h4>
                    </div>

                    <div class="box-body">
                        <p>Your Shopping Cart Is Empty</p>

                        <div class="shop-more">
                            <a href="{{ route('products.index') }}" class="btn btn-success">
                            Shop Products <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
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