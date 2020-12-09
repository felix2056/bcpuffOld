@extends('layouts.admin')

@section('title')
Checkout
@endsection

@section('content')
<div class="container-full">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title">Checkout</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('account.index') }}">
                                    <i class="mdi mdi-home-outline"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            @if(session('cart'))
            <div class="col-12">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title">Product Summary</h4>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Photo</th>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th class="w-200">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $total = 0 ?>

                                    @foreach(session('cart') as $id => $details)
                                    <?php $total += $details['price'] * $details['quantity'] ?>

                                    <tr class="cart-{{ $id }}">
                                        <td><img src="{{ $details['photo'] }}" alt="{{ $details['name'] }}" width="80">
                                        </td>
                                        <td>{{ $details['name'] }}</td>
                                        <td>{{ $details['quantity'] }}</td>
                                        <td>${{ $details['price'] }}</td>
                                    </tr>
                                    @endforeach

                                    <tr>
                                        <th colspan="3" class="text-right">Total</th>
                                        <th>${{ $total }}</th>
                                    </tr>
                                    <tr>
                                        <td colspan="3" align="right">Delivery Charges</td>
                                        <td>$0</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" align="right">Tax</td>
                                        <td>$5</td>
                                    </tr>
                                    <tr>
                                        <th colspan="3" class="text-right font-size-24 font-weight-700">Payable Amount
                                        </th>
                                        <th class="font-size-24 font-weight-700">${{ $total + 5 }}</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <hr>

                        {{-- <h4 class="box-title mb-15">Save Card</h4>

                        <div class="row">
                            <!-- col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="box bg-gradient-primary box-inverse">
                                    <div class="box-body">
                                        <h1 class="mt-0"><i class="fa fa-cc-visa"></i></h1>
                                        <h3>**** **** **** 7009</h3>
                                        <span class="pull-right">Exp date: 12/21</span>
                                        <span class="font-500">Daniel Doe</span>
                                    </div>
                                </div>
                            </div>
                            <!-- /col -->
                            <!-- col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="box bg-gradient-info box-inverse">
                                    <div class="box-body">
                                        <h1 class="mt-0"><i class="fa fa-cc-mastercard"></i></h1>
                                        <h3>**** **** **** 4125</h3>
                                        <span class="pull-right">Exp date: 12/21</span>
                                        <span class="font-500">Ethan Doe</span>
                                    </div>
                                </div>
                            </div>
                            <!-- /col -->
                            <!-- col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="box bg-gradient-warning box-inverse">
                                    <div class="box-body">
                                        <h1 class="mt-0"><i class="fa fa-cc-discover"></i></h1>
                                        <h3>**** **** **** 5124</h3>
                                        <span class="pull-right">Exp date: 12/21</span>
                                        <span class="font-500">Jayden Doe</span>
                                    </div>
                                </div>
                            </div>
                            <!-- /col -->
                            <!-- col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="box bg-gradient-danger box-inverse">
                                    <div class="box-body">
                                        <h1 class="mt-0"><i class="fa fa-cc-amex"></i></h1>
                                        <h3>**** **** **** 9578</h3>
                                        <span class="pull-right">Exp date: 12/21</span>
                                        <span class="font-500">William Doe</span>
                                    </div>
                                </div>
                            </div>
                            <!-- /col -->
                        </div>

                        <hr> --}}

                        <h4 class="box-title mb-15">Choose payment Option</h4>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#debit-card"
                                    role="tab"><span class="hidden-sm-up"><i class="fa fa-cc"></i></span> <span
                                        class="hidden-xs-down">Debit Card</span></a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#paypal" role="tab"><span
                                        class="hidden-sm-up"><i class="fa fa-paypal"></i></span> <span
                                        class="hidden-xs-down">Paypal</span></a> </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content tabcontent-border">
                            <div class="tab-pane active" id="debit-card" role="tabpanel">
                                <div class="p-30">
                                    <div class="row">
                                        {{-- <div class="col-lg-7 col-md-6 col-12">
                                            <form>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">CARD NUMBER</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-credit-card"></i>
                                                        </div>
                                                        <input type="text" class="form-control" id="exampleInputuname"
                                                            placeholder="Card Number">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-7">
                                                        <div class="form-group">
                                                            <label>EXPIRATION DATE</label>
                                                            <input type="text" class="form-control" name="Expiry"
                                                                placeholder="MM / YY" required=""> </div>
                                                    </div>
                                                    <div class="col-5 pull-right">
                                                        <div class="form-group">
                                                            <label>CV CODE</label>
                                                            <input type="text" class="form-control" name="CVC"
                                                                placeholder="CVC" required=""> </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>NAME OF CARD</label>
                                                            <input type="text" class="form-control" name="nameCard"
                                                                placeholder="NAME AND SURNAME"> </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-success">Make Payment</button>
                                            </form>
                                        </div> --}}


                                        <div class="col-lg-7 col-md-6 col-12">
                                            <div id="dropin-container"></div>

                                            <button id="make-payment" class="btn btn-success">Make Payment</button>
                                        </div>

                                        <div class="col-lg-5 col-md-6 col-12">
                                            <h3 class="box-title mt-10">General Info</h3>
                                            <h2><i class="fa fa-cc-visa text-info"></i>
                                                <i class="fa fa-cc-mastercard text-danger"></i>
                                                <i class="fa fa-cc-discover text-success"></i>
                                                <i class="fa fa-cc-amex text-warning"></i>
                                            </h2>
                                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                                                roots in a piece of classical Latin literature from 45 BC, making it
                                                over 2000 years old. Richard McClintock.</p>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="paypal" role="tabpanel">
                                <div class="p-30">
                                    You can pay your money through paypal, for more info
                                    <a href="">click here</a>
                                    <br><br>

                                    {{-- <button type="submit" class="btn btn-info btn-outline"><i class="fa fa-cc-paypal"></i> Pay with
                                        Paypal
                                    </button> --}}

                                    <div class="col-md-4">
                                        <div id="paypal-button-container"></div>
                                    </div>
                                </div>
                            </div>
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
<script>
    paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            currency: 'USD',
            value: "{{ $total + 5 }}.00",
            details: {
                shipping: 0.02,
                tax: 5.00
            },
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      // This function captures the funds from the transaction.
      return actions.order.capture().then(function(details) {
        // This function shows a transaction success message to your buyer.
        (function($) {
            $(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                let totalPrice = "{{ $total + 5 }}";
                
                $.ajax({
                    type: "POST",
                    url: "{{ route('payment.paypal') }}",
                    data: { total : totalPrice},
                    success: function (data) {
                        window.location.href = "{{ route('account.orders') }}";
                    },
                    error: function (data) {
                        window.location.reload();
                    }
                });
            });
        })(jQuery);
      });
    }
  }).render('#paypal-button-container');
</script>

<script>
    var button = document.querySelector('#make-payment');
        
        braintree.dropin.create({
            authorization: '{{ $token }}',
            container: '#dropin-container'
        }, function (createErr, instance) {
            button.addEventListener('click', function () {
                instance.requestPaymentMethod(function (err, payload) {
                    (function($) {
                        $(function() {
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });

                            let totalPrice = "{{ $total + 5 }}";

                            $.ajax({
                                type: "POST",
                                url: "{{ route('payment.braintree') }}",
                                data: { nonce : payload.nonce, total : totalPrice},
                                success: function (data) {
                                    console.log('success', payload.nonce)
                                    window.location.href = "{{ route('account.orders') }}";
                                },
                                error: function (data) {
                                    console.log('error', payload.nonce)
                                    window.location.reload();
                                }
                            });
                        });
                    })(jQuery);
                });
            });
        });
</script>
@endsection