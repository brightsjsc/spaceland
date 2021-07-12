@extends('layouts.index')

@section('head_title')
    {{ $project->name }}
@endsection
@section('contain-content')
    {{ $project->address }}
@endsection
@section('image-page')
    {{ asset('uploads/images/bg2.jpg') }}
@endsection

@section('content')
    @include('layouts.page-header')
    <div class="container" style="padding-top: 20px;">
        @if (Session::has('success'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
        @endif
        <div class="row">
            <div class="col-md-12">

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"> Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $project->name }}</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="product-list">
                    <div class="product-header">
                        <div class="header-title">
                            <h1 class="product-title text-uppercase">{{ 'Dự án ' . $project->name }}</h1>
                        </div>
                        <div class="header-sort">
                            <div class="product-sort">
                                <div class="product-sort-control">
                                    <form id="form-sort" action="" method="get">
                                        <div class="sort-item">
                                            <div class="sort-custom">
                                                <select name="orderBy" id="sort">
                                                    <option value="tin-moi-nhat" @if (!empty($request['orderBy']) && $request['orderBy'] == 'tin-moi-nhat') selected @endif>Tin mới nhất</option>
                                                    <option value="tin-cu-nhat" @if (!empty($request['orderBy']) && $request['orderBy'] == 'tin-cu-nhat') selected @endif>Tin cũ nhất</option>
                                                    <option value="gia-tu-thap-den-cao" @if (!empty($request['orderBy']) && $request['orderBy'] == 'gia-tu-thap-den-cao') selected @endif>Giá từ thấp đến cao</option>
                                                    <option value="gia-tu-cao-den-thap" @if (!empty($request['orderBy']) && $request['orderBy'] == 'gia-tu-cao-den-thap') selected @endif>Giá từ cao đến thấp</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="product-body">
                        @foreach ($products as $product)
                            <div class="product-item row">


                                <div class="product-image col-5">
                                    <a href="{{ route('productDetail', ['product' => $product->alias]) }}"><img
                                            src="{{ asset('uploads/images/products/thumbs/' . $product->image) }}"
                                            alt="{{ $project->name }}" title="{{ $project->name }}" width="100%"></a>
                                </div>
                                <div class="product-main col-7">
                                    <div class="product-title">
                                        <h4><a
                                                href="{{ route('productDetail', ['product' => $product->alias]) }}">{{ $product->name }}</a>
                                        </h4>
                                    </div>
                                    <div class="product-info">
                                        <span class="price">
                                            @if ($product->price_type == 1)
                                                {{ number_format($product->price, 0, ',', '.') }} đ/tháng
                                            @elseif ($product->price_type == 2)
                                                {{ number_format($product->price, 0, ',', '.') }} đ/m2
                                            @else
                                                Thỏa thuận
                                            @endif
                                        </span>
                                        @if ($product->acreage != '')
                                            <span class="dot">·</span>
                                            <span class="area">{{ $product->acreage }} m2</span>
                                        @endif
                                        @if ($product->room_number != '')
                                            <span class="dot">·</span>
                                            <span class="bedroom">{{ $product->room_number }} PN</span>
                                        @endif
                                        <span class="dot">·</span>
                                        <span
                                            class="location">{{ $product->project->district->level . ' ' . $product->project->district->name_local }}</span>
                                    </div>
                                    <div class="product-content">
                                        <p>Thông tin chi tiết:</p>
                                        <p>Sản phẩm rộng : {!! $product->acreage !!} m2</p>
                                        <p>Tình Trạng : {!! $product->furniture !!}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="product-paginate">
                        <nav class="paginate">
                            <ul class="pagination">

                                @if (url()->full() == url()->current())
                                    <!--Arrow left-->
                                    <li class="{{ $products->currentPage() == 1 ? 'page-item disabled' : 'page-item' }}">
                                        <a href="{{ $products->previousPageUrl() }}"
                                            class="page-link waves-effect waves-effect" aria-label="Previous">
                                            <span aria-hidden="true">Trước</span>
                                            <span class="sr-only">«</span>
                                        </a>
                                    </li>

                                    @for ($i = 1; $i <= $products->lastPage(); $i++)
                                        <li
                                            class="{{ $products->currentPage() == $i ? 'page-item active disabled' : 'page-item' }}">
                                            <a href="{{ $products->url($i) }}"
                                                class="page-link waves-effect waves-effect">{{ $i }}</a>
                                        </li>
                                    @endfor

                                    <!--Arrow right-->
                                    <li
                                        class="{{ $products->currentPage() == $products->lastPage() ? 'page-item disabled' : 'page-item' }}">
                                        <a href="{{ $products->nextPageUrl() }}"
                                            class="page-link waves-effect waves-effect" aria-label="Next">
                                            <span aria-hidden="true">Tiếp</span>
                                            <span class="sr-only">»</span>
                                        </a>
                                    </li>
                                @else
                                    <!--Arrow left-->
                                    <li class="{{ $products->currentPage() == 1 ? 'page-item disabled' : 'page-item' }}">
                                        <a href="{{ url()->full() . '&page=' . ($products->currentPage() - 1) }}"
                                            class="page-link waves-effect waves-effect" aria-label="Previous">
                                            <span aria-hidden="true">Trước</span>
                                            <span class="sr-only">«</span>
                                        </a>
                                    </li>

                                    @for ($i = 1; $i <= $products->lastPage(); $i++)
                                        <li
                                            class="{{ $products->currentPage() == $i ? 'page-item active disabled' : 'page-item' }}">
                                            <a href="{{ url()->full() . '&page=' . $i }}"
                                                class="page-link waves-effect waves-effect">{{ $i }}</a>
                                        </li>
                                    @endfor

                                    <!--Arrow right-->
                                    <li
                                        class="{{ $products->currentPage() == $products->lastPage() ? 'page-item disabled' : 'page-item' }}">
                                        <a href="{{ url()->full() . '&page=' . ($products->currentPage() + 1) }}"
                                            class="page-link waves-effect waves-effect" aria-label="Next">
                                            <span aria-hidden="true">Tiếp</span>
                                            <span class="sr-only">»</span>
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                {{-- @include('layouts.cate-area') --}}
                {{-- <div class="project-related">
                <div class="project-header" >
                    <h3 class="title-pro">{{ "Dự án khác tại " .$city->name_local }}</h3>
                </div>
                <div class="project-list">
                    <ul>
                        @foreach ($projects as $project_related)
                            <li><i class="fas fa-angle-right"></i><a href="{{ route('productsOfProject',['project' => $project_related->alias]) }}">{{ $project_related->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div> --}}
                <div class="project-related">
                    <div class="project-header">
                        <h3 class="title-pro"> Liên Hệ</h3>
                    </div>
                    <div class="project-list">
                        @include('pages.contact')
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer-static')

@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $("#sort").change(function() {
                $("#form-sort").submit();
            });
        });
    </script>
@endsection
