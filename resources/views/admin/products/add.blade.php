@extends('layouts.admin')

@section('title')
    Add Product
@endsection

@section('content')
<div class="container-full">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title">Add New Product</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.index') }}">
                                    <i class="mdi mdi-home-outline"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Products</li>
                            <li class="breadcrumb-item active" aria-current="page">Add</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">About Product</h4>
                    </div>
                    <div class="box-body">
                        <form action="{{ route('admin.products.create') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="font-weight-700 font-size-16">Product Name</label>
                                            <input name="name" type="text" class="form-control"
                                                placeholder="Product Name" value="{{ old('name') }}">

                                            @error('name')
                                            <span class="alert-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!--/row-->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="font-weight-700 font-size-16">Price</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-money"></i></div>
                                                <input type="text" name="price" class="form-control" placeholder="15"
                                                    {{ old('price') }}>
                                            </div>

                                            @error('price')
                                                <span class="alert-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="font-weight-700 font-size-16">Stock</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-cut"></i></div>
                                                <input type="text" name="stock" class="form-control" value="{{ old('stock') }}" placeholder="100">
                                            </div>

                                            @error('stock')
                                            <span class="alert-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="font-weight-700 font-size-16">Product Description</label>
                                            <textarea name="description" class="form-control p-20" rows="4"
                                                placeholder="Enter product description">{{ old('description') }}</textarea>

                                            @error('description')
                                            <span class="alert-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!--/row-->

                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="box-title mt-20">Upload Image</h4>
                                        <div class="product-img text-left">
                                            <img id="output-image" alt="">
                                            <div class="btn btn-info mb-20">
                                                <span>Upload Image</span>
                                                <input type="file" name="image" accept=".jpeg, .jpg, .png" onchange="preview_image(event)" class="upload">
                                            </div>
                                        </div>

                                        @error('image')
                                        <span class="alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-actions mt-10">
                                <button type="submit" class="btn btn-primary"> <i class="fa fa-check"></i> Save</button>
                                <button type="button" class="btn btn-danger">Cancel</button>
                            </div>
                        </form>
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
    function insertImage() {
        var file  = document.getElementById('blog_image').click();
    }

    function preview_image(event) 
    {
        var reader = new FileReader();
        reader.onload = function()
        {
            var output_image = document.getElementById('output-image');
            output_image.src = reader.result;
        }

        reader.readAsDataURL(event.target.files[0]);
    }
</script>
@endsection