@extends('layouts.master')
@section('title')
    {{ trans('Dashboard.roles') }}
@stop
@section('css')
    <!-- Internal Data table css -->
    <link href="{{ URL::asset('plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <!--Internal   Notify -->
    <link href="{{ URL::asset('plugins/notify/css/notifIt.css') }}" rel="stylesheet" />
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ trans('Dashboard.roles') }}</h4><span
                    class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{ trans('Dashboard.view_all') }}</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    @include('messages_alert')
    <!-- row -->
    <!-- row opened -->
    {{-- <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                @if (permission('add_role'))

                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add">
                            {{ trans('Dashboard.add_role') }}
                        </button>
                    </div>
                </div>
                @endif
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example2">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">#</th>
                                    <th class="wd-15p border-bottom-0">{{ trans('Dashboard.role_name') }}</th>
                                    <th class="wd-20p border-bottom-0">{{ trans('Dashboard.processes') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $role->name }}</td>
                                        <td>{{ $permission->created_at->diffForHumans() }}</td>
                                        <td>
                                            <a class="modal-effect btn btn-sm btn-info" data-effect="effect-scale"
                                                data-toggle="modal" href="#edit{{ $role->id }}"><i
                                                    class="las la-pen"></i></a>
                                            <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"
                                                data-toggle="modal" href="#delete{{ $role->id }}"><i
                                                    class="las la-trash"></i></a>
                                        </td>
                                    </tr>

                                    @include('role.edit')
                                    @include('role.delete')
                                @endforeach
                            </tbody>
                        </table>
                        {{ $roles->links() }}
                    </div>
                </div><!-- bd -->
            </div><!-- bd -->
        </div>
        <!--/div-->

        @include('role.add')
        <!-- /row -->

    </div> --}}
    <!-- row closed -->

    <!-- Container closed -->
    <div class="my-3 pb-0">
        <div class="d-flex justify-content-between">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add">
                {{ trans('Dashboard.add_role') }}
            </button>
        </div>
    </div>
    <div class="row row-sm">
        {{-- <a href="{{ route('admin.product.show', $product) }}"> --}}

            @if (count($products) > 0)

                @foreach ($products as $product)
                    <div class="col-md-6 col-lg-6 col-xl-4  col-sm-6">
                        <div class="card">
                            {{-- @if (permission('add_role')) --}}

                {{-- @endif --}}
                            <div class="card-body">
                                <div class="pro-img-box">
                                    {{-- <div class="d-flex product-sale">
												<div class="badge bg-pink">New</div>
												<i class="mdi mdi-heart-outline ml-auto wishlist"></i>
											</div> --}}
                                    {{-- <img class="w-100" src="{{ URL::asset('storage/products/' . $product->image) }}"
                                        alt="product-image"> --}}
                                    {{-- <a href="{{ route('admin.product.show', $product) }}" class="adtocart"> --}}
                                        <i class="las la-shopping-cart "></i>
                                    {{-- </a> --}}
                                </div>
                                <div class="text-center pt-3">
                                    <h3 class="h6 mb-2 mt-4 font-weight-bold text-uppercase">{{ $product->name }}</h3>
                                    {{-- <span class="tx-15 ml-auto">
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star-half text-warning"></i>
												<i class="ion ion-md-star-outline text-warning"></i>
											</span> --}}
                                    <h4 class="h5 mb-0 mt-2 text-center font-weight-bold text-danger">
                                        {{-- <x-price-after-discount price="{{ $product->price }}"
                                            discount="{{ $product->discount }}" />EGP <span
                                            class="text-secondary font-weight-normal tx-13 ml-1 prev-price">{{ $product->price }}EGP</span> --}}
                                    </h4>
                                            {{-- <x-show-hide-label :product="$product" /> --}}

                                </div>
                            </div>
                        </div>
                    </div>
                {{-- </a> --}}
                {{-- @include('admin.edit')
                @include('admin.delete') --}}

            @endforeach
        @endif
        {{ $products->links() }}
        </div>

        @include('product.add')
    <!-- main-content closed -->
@endsection
@section('js')

    <!-- Internal Data tables -->
    <script src="{{ URL::asset('plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatable/js/responsive.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatable/js/jquery.dataTables.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatable/js/responsive.bootstrap4.min.js') }}"></script>
    <!--Internal  Datatable js -->
    <script src="{{ URL::asset('js/table-data.js') }}"></script>
    <!--Internal  Notify js -->
    <script src="{{ URL::asset('plugins/notify/js/notifIt.js') }}"></script>
    <script src="{{ URL::asset('plugins/notify/js/notifit-custom.js') }}"></script>

@endsection
