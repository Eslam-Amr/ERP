@extends('layouts.master')
@section('title')
    {{ trans('Dashboard.show_product') }}
@stop
@section('css')
    <link href="{{ URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <!--Internal   Notify -->
    <link href="{{ URL::asset('assets/plugins/notify/css/notifIt.css') }}" rel="stylesheet" />
@endsection


@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ trans('Dashboard.product') }}</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    {{ trans('Dashboard.show_product') }}</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    {{-- @include('admin-asset/assets.messages_alert') --}}
    <!-- row opened -->


    {{-- <div class="col-xl-12">
        <div class="card">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0">{{ __('website/admin.category_create') }}</h4>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
            </div>
            <div class=" p-5  col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <div class="card  box-shadow-0 ">

                    <div class="card-body pt-3">
                        @csrf
                        <div class="">
                            <div class="form-group">

                                <h6>{{ __('website/admin.category_name') }}</h6>
                                <label class="form-control">{{ $category->name }} </label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body h-100">
                    <div class="row row-sm ">
                        <div class=" col-xl-5 col-lg-12 col-md-12">
                            <div class="preview-pic tab-content">
                                    {{-- l7d ma ngeb soar  --}}
                                    <img src="https://photographylife.com/wp-content/uploads/2014/09/Nikon-D750-Image-Samples-2.jpg" alt="">
                                 
                                {{-- <div class="tab-pane active" id="pic-1"><img
                                        src="{{ URL::asset('storage/products/' . $product->image) }}" alt="image" />
                                </div> --}}

                            </div>

                        </div>
                        <div class="details col-xl-7 col-lg-12 col-md-12 mt-4 mt-xl-0">
                            <h4 class="product-title mb-1">{{ $product->name }}</h4>
                            <p class="text-muted tx-13 mb-1">{{ $product->description }}</p>
                            <div class="sizes d-flex">
                                {{ __('Dashboard.product_model') }}
                                :
                                {{ $product->model }}
                            </div>
                            <h6 class="price">
                                {{ __('Dashboard.product_price') }}:{{ $product->price }}
                                {{-- <span class="h3 ml-2"><x-price-after-discount price="{{ $product->price }}"
                                        discount="{{ $product->discount }}" /></span> --}}
                            </h6>
                            {{-- <p class="product-description">{{ $product->additonal_information }}</p> --}}
                            {{-- <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p> --}}
                            <div class="sizes d-flex">
                                {{ __('Dashboard.product_price_after_discount') }}
                                :
                                <x-price-after-discount :price="$product->price" :discount="$product->discount" />
                            </div>
                            <div class="sizes d-flex">
                                {{ __('Dashboard.product_weight') }}
                                :
                                {{ $product->weight }}
                            </div>
                            {{-- <div class="d-flex">
    {{ __('Dashboard.available_item') }}
    <div class="row">
        <div class="container">
        <div class="col-12">
    @foreach ($product->infos as $info)
    @dd($info)
            <div class="col-6">

                {{ __('Dashboard.color') }}:
                <span style="color: {{ $info->color }};">

                    {{ $info->color }}
                </span>
    </div>
            <div class="col-6">

                {{ __('Dashboard.color') }}:
                <span style="color: {{ $info->color }};">

                    {{ $info->color }}
                </span>
    </div>

    @endforeach
</div>
</div>
</div>
</div> --}}
<div class="d-flex flex-column">
    <h4 class="mb-3">{{ __('Dashboard.available_item') }} : {{ $product->final_quantity }}</h4>
    <div class="container">
        <div class="row">
            @foreach ($product->infos as $info)
                <div class="col-md-6 mb-3">
                    <div class="card p-3">
                        <div class="d-flex align-items-center">
                            <span class="me-2">{{ __('Dashboard.color') }}:</span>
                            <span class="badge" style="background-color: {{ $info->color }};">
                                {{ ucfirst($info->color) }}
                            </span>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="me-2">{{ __('Dashboard.quantity') }}:</span>
                            <span>{{ $info->quantity }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div>
<a class="btn btn-warning" href="{{ route('product.index') }}">
    {{ __("Dashboard.back") }}
</a>
        </div>
    </div>
</div>


                            {{-- <div class="d-flex  ">
                                <div class=" product-title">
                                    {{ __('website/admin.seller') }}
                                    :
                                    @if ($product->seller != null)
                                        {{ $product->seller->name }}
                                    @else
                                        {{ $product->admin->name }}
                                    @endif
                                </div>
                            </div> --}}
                            {{-- <div class="d-flex  ">
                                <div class=" product-title">{{ __('website/admin.color') }}: {{ $product->color }}</div>
                            </div>
                            <div class="d-flex  ">
                                <div class=" product-title">{{ __('website/admin.sold') }}:
                                    {{ $product->sold }}
                                </div>
                            </div> --}}
                            {{-- <div class="d-flex  ">
                                <div class=" product-title">{{ __('website/admin.product_stock') }}: {{ $product->stock }}
                                </div>
                            </div> --}}
                            {{-- @if (auth('seller')->check())
                                @if (auth('seller')->user()->block == 0)
                                    <div class="d-flex  ">
                                        <div class=" product-title">
                                            <a class="btn btn-warning"
                                                href="{{ route('admin.product.edit', $product) }}">{{ __('website/admin.edit') }}</a>
                                        </div>
                                    </div>
                                    <div class="d-flex  ">
                                        <div class=" product-title">
                                            <form action="{{ route('admin.product.destroy', $product) }}" method="post">
                                                @method('delete')
                                                @csrf

                                                <button type="submit"
                                                    class="btn btn-danger">{{ __('website/admin.delete') }}</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="d-flex  ">
                                        <div class=" product-title">
                                            <a class="btn btn-secondary"
                                                href="{{ route('admin.product.review', $product) }}">show review</a>
                                        </div>
                                    </div>
                                    <x-product-hide-button-in-show :product="$product" />
                                @endif
                            @else
                                <div class="d-flex  ">
                                    <div class=" product-title">
                                        <a class="btn btn-warning"
                                            href="{{ route('admin.product.edit', $product) }}">{{ __('website/admin.edit') }}</a>
                                    </div>
                                </div>
                                <div class="d-flex  ">
                                    <div class=" product-title">
                                        <form action="{{ route('admin.product.destroy', $product) }}" method="post">
                                            @method('delete')
                                            @csrf

                                            <button type="submit"
                                                class="btn btn-danger">{{ __('website/admin.delete') }}</button>
                                        </form>
                                    </div>
                                </div>

                                <div class="d-flex  ">
                                    <div class=" product-title">
                                        <a class="btn btn-secondary"
                                            href="{{ route('admin.product.review', $product) }}">show review</a>
                                    </div>
                                </div>
                                <x-product-hide-button-in-show :product="$product" />

                                <x-product-hide-button-in-show />

                            @endif --}}
                            {{-- <div class="action">
                                <button class="add-to-cart btn btn-danger" type="button">ADD TO WISHLIST</button>
                                <button class="add-to-cart btn btn-success" type="button">ADD TO CART</button>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /row -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
    <!-- Internal Data tables -->
    <script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js') }}"></script>
    <!--Internal  Datatable js -->
    <script src="{{ URL::asset('assets/js/table-data.js') }}"></script>

    <!--Internal  Notify js -->
    <script src="{{ URL::asset('assets/plugins/notify/js/notifIt.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/notify/js/notifit-custom.js') }}"></script>
@endsection
