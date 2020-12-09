@extends('layouts.admin')

@section('title')
Dashboard
@endsection

@section('content')
<div class="container-full">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xl-3 col-md-6 col-12">
                <div class="box">
                    <ul class="box-controls pull-right">
                        <li class="dropdown">
                            <a data-toggle="dropdown" href="#" class="px-10 pt-5"><i class="ti-more-alt"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                                <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                                <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                            </div>
                        </li>
                    </ul>
                    <div class="box-body pt-0">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="icon bg-primary-light rounded-circle">
                                <i class="text-primary mr-0 font-size-20 fa fa-store"></i>
                            </div>
                            <div>
                                <h3 class="mb-0 font-weight-500">{{ $data['total_products'] }}</h3>
                                <p class="text-mute mb-0">Total Products</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 col-12">
                <div class="box">
                    <ul class="box-controls pull-right">
                        <li class="dropdown">
                            <a data-toggle="dropdown" href="#" class="px-10 pt-5"><i class="ti-more-alt"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                                <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                                <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                            </div>
                        </li>
                    </ul>
                    <div class="box-body pt-0">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="icon bg-info-light rounded-circle">
                                <i class="text-info mr-0 font-size-20 fa fa-users"></i>
                            </div>
                            <div>
                                <h3 class="mb-0 font-weight-500">{{ $data['total_users'] }}</h3>
                                <p class="text-mute mb-0">Registered Users</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 col-12">
                <div class="box">
                    <ul class="box-controls pull-right">
                        <li class="dropdown">
                            <a data-toggle="dropdown" href="#" class="px-10 pt-5"><i class="ti-more-alt"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                                <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                                <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                            </div>
                        </li>
                    </ul>
                    <div class="box-body pt-0">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="icon bg-warning-light rounded-circle">
                                <i class="text-warning mr-0 font-size-20 fa fa-user"></i>
                            </div>
                            <div>
                                <h3 class="mb-0 font-weight-500">{{ $data['total_admins'] }}</h3>
                                <p class="text-mute mb-0">Total Admins</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 col-12">
                <div class="box">
                    <ul class="box-controls pull-right">
                        <li class="dropdown">
                            <a data-toggle="dropdown" href="#" class="px-10 pt-5"><i class="ti-more-alt"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                                <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                                <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                            </div>
                        </li>
                    </ul>
                    <div class="box-body pt-0">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="icon bg-danger-light rounded-circle">
                                <i class="text-danger mr-0 font-size-20 fa fa-shopping-cart"></i>
                            </div>
                            <div>
                                <h3 class="mb-0 font-weight-500">{{ $data['total_orders'] }}</h3>
                                <p class="text-mute mb-0">Total Orders</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection

@section('scripts')
<script src="{{ asset('admin/js/pages/dashboard3.js') }}"></script>
@endsection