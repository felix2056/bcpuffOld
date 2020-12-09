@extends('layouts.admin')

@section('content')
<div class="container-full">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title">Details</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.index') }}">
                                    <i class="mdi mdi-home-outline"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                <a href="{{ route('admin.products.index') }}">
                                    Products
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ $product->name }}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="box">
                    <div class="box-body">
                        <div class="row">
                            <!-- DELETE PRODUCT FORM -->
                            <form style="display: none;" action="{{ route('admin.products.destroy', ['id' => $product->id]) }}" method="post"
                                id="{{ 'delete-product-' .$product->id }}">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                            </form>
                            <!-- /DELETE PRODUCT FORM -->

                            <div class="col-md-4 col-sm-6">
                                <div class="box box-body b-1 text-center no-shadow">
                                    <img src="{{ $product->image_url }}" id="product-image" class="img-fluid"
                                        alt="{{ $product->name }}">
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="col-md-8 col-sm-6">
                                <h2 class="box-title mt-0">{{ $product->name }}</h2>
                                <div class="list-inline">
                                    <a class="text-warning"><i class="mdi mdi-star"></i></a>
                                    <a class="text-warning"><i class="mdi mdi-star"></i></a>
                                    <a class="text-warning"><i class="mdi mdi-star"></i></a>
                                    <a class="text-warning"><i class="mdi mdi-star"></i></a>
                                    <a class="text-warning"><i class="mdi mdi-star"></i></a>
                                </div>
                                <h1 class="pro-price mb-0 mt-20">${{ $product->price }}
                                    <span class="text-danger">{{ $product->stock }} <strong class="badge badge-danger">in stock</strong></span>
                                </h1>
                                <hr>
                                <p>{{ $product->description }}</p>
                            
                                <hr>

                                <div class="gap-items">
                                    <button class="btn btn-success"><i class="mdi mdi-eye"></i> View!</button>
                                    <button class="btn btn-danger" type="button" onclick="event.preventDefault(); deleteProduct({{ $product->id }})"><i class="mdi mdi-delete-forever"></i> Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>
@endsection

@section('scripts')
    <script>
        function deleteProduct(product_id) {
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
                    document.getElementById("delete-product-" + product_id).submit();
                }
            });
        }
    </script>
@endsection