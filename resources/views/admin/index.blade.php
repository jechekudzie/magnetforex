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
                            <li class="breadcrumb-item">Widgetsz</li>
                            <li class="breadcrumb-item active">General</li>
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
                    <a href="{{url('/admin/professions')}}">
                        <div class="card o-hidden border-0">
                            <div class="bg-secondary b-r-4 card-body">
                                <div class="media static-top-widget">
                                    <div class="align-self-center text-center"><i class="fa fa-product-hunt"></i></div>
                                    <div class="media-body"><span class="m-0">Professions</span>
                                        <h4 class="mb-0 counter">6659</h4>
                                        <i class="icon-bg"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-4 col-lg-6">
                    <a href="{{url('/admin/professional_qualifications')}}">
                        <div class="card o-hidden border-0">
                            <div class="bg-secondary b-r-4 card-body">
                                <div class="media static-top-widget">
                                    <div class="align-self-center text-center"><i class="fa
                                    fa-certificate"></i></div>
                                    <div class="media-body"><span class="m-0">Professional Qualifications</span>
                                        <h4 class="mb-0 counter">6659</h4>
                                        <i class="icon-bg fa-certificate"></i>

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
