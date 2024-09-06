@extends('admin.layouts.master')
@section('page-header')

<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex"><h4 class="content-title mb-0 my-auto">ERP system</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Welcome</span></div>
    </div>

</div>
<!-- breadcrumb -->
@endsection
@section('content')
<div class="row row-sm">
        <div class="col-lg-6 col-xl-3 col-md-6 col-12">
            <a href="#">
                <div class="card bg-primary-gradient text-white ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <div class="icon1 mt-2 text-center">
                                    <i class="fe fe-users tx-40"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="mt-0 text-center">
                                    <span class="text-white">Permessions</span>
                                    <h2 class="text-white mb-0">Roles</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

        </div>
        <div class="col-lg-6 col-xl-3 col-md-6 col-12">
            <a href="#">
                <div class="card bg-danger-gradient text-white">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <div class="icon1 mt-2 text-center">
                                    <i class="fe fe-tag tx-40"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="mt-0 text-center">
                                    <span class="text-white">Inventory</span>
                                    <h2 class="text-white mb-0">Inventory</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

        </div>
        <div class="col-lg-6 col-xl-3 col-md-6 col-12">
            <a href="#">
                <div class="card bg-success-gradient text-white">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <div class="icon1 mt-2 text-center">
                                    <i class="fe fe-clipboard tx-40"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="mt-0 text-center">
                                    <span class="text-white">Invoices</span>
                                    <h2 class="text-white mb-0">Invoices</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

        </div>
        <div class="col-lg-6 col-xl-3 col-md-6 col-12">
            <a href="#">
            <div class="card bg-warning-gradient text-white">
                <div class="card-body">
                    <div class="row">
                        <div class="col-2">
                            <div class="icon1 mt-2 text-center">
                                <i class="fe fe-pie-chart tx-40"></i>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="mt-0 text-center">
                                <span class="text-white">Dashborad</span>
                                <h2 class="text-white mb-0">Dashborad</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-lg-6 col-xl-3 col-md-6 col-12">
            <a href="#">
                <div class="card bg-primary-gradient text-white">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <div class="icon1 mt-2 text-center">
                                    <i class="fe fe-percent tx-40"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="mt-0 text-center">
                                    <span class="text-white">Accounting</span>
                                    <h2 class="text-white mb-0">Accounting</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

        </div>

</div>



@endsection
@section('js')
<!-- Moment js -->
<script src="{{URL::asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<!-- Internal Piety js -->
<script src="{{URL::asset('assets/plugins/peity/jquery.peity.min.js')}}"></script>
<!-- Internal Chart js -->
<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
@endsection
