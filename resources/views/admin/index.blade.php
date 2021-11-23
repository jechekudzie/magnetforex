@extends('layouts.admin')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>General</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item">admin</li>
                            <li class="breadcrumb-item active">dashboard</li>
                        </ol>
                    </div>
                    <div class="col-sm-6">
                        <!-- Bookmark Start-->
                        <div class="bookmark">

                        </div>
                        <!-- Bookmark Ends-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid general-widget">
            <div class="row">
                <div class="col-sm-6 col-xl-4 col-lg-6">
                    <a href="{{url('/admin/services')}}">
                        <div class="card o-hidden border-0">
                            <div class="bg-secondary b-r-4 card-body">
                                <div class="media static-top-widget">
                                    <div class="align-self-center text-center"><i class="fa fa-product-hunt"></i></div>
                                    <div class="media-body"><span class="m-0">Services</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-4 col-lg-6">
                    <a href="{{url('/admin/items')}}">
                        <div class="card o-hidden border-0">
                            <div class="bg-secondary b-r-4 card-body">
                                <div class="media static-top-widget">
                                    <div class="align-self-center text-center"><i class="fa
                                    fa-certificate"></i></div>
                                    <div class="media-body"><span class="m-0">Packages Line Items</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-4 col-lg-6">
                    <a href="{{url('/admin/subscriptions')}}">
                        <div class="card o-hidden border-0">
                            <div class="bg-secondary b-r-4 card-body">
                                <div class="media static-top-widget">
                                    <div class="align-self-center text-center"><i class="fa
                                    fa-certificate"></i></div>
                                    <div class="media-body"><span class="m-0">Subscriptions</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-4 col-lg-6">
                    <a href="{{url('/admin/payments')}}">
                        <div class="card o-hidden border-0">
                            <div class="bg-secondary b-r-4 card-body">
                                <div class="media static-top-widget">
                                    <div class="align-self-center text-center"><i class="fa
                                    fa-certificate"></i></div>
                                    <div class="media-body"><span class="m-0">Payments</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@stop
