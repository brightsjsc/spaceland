@extends('layouts.index')

@section('head_title')
    {{ 'Tìm kiếm' }}
@endsection

@section('content')
    @include('layouts.page-header')
    @if (Session::has('success'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
    @endif
    <div class="container" style="padding-top: 20px;">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"> Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ 'Tìm kiếm' }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        {{-- @php
        echo '<pre>';
        print_r($products);
    @endphp --}}
        <div class="row">
            <div class="col-md-8">
                <div class=" product-list">
                    <div class="product-header">
                        <h4 class="product-title text-uppercase">{{ 'Kết quả tìm kiếm' }}</h4>
                        {{-- <p>Tìm kiếm theo các tiêu chí:
                        @if (!empty($request) && $request['adr_city_id'] != '')
                        Khu vực: <i class="text-success">{{ $product['adr_city_id'] }}</i>.
                        @endif

                        @if (!empty($request) && $request['project_id'] != '')
                            Dự án: <i class="text-success">{{ $request['project_id'] }}</i>.
                        @endif

                        @if (!empty($request) && $request['acreage'] != '')
                            Diện tích: <i class="text-success">{{ $products[0]['acreage'] }} m</i>.
                        @endif

                        @if (!empty($request) && $request['price'] != '')
                            Giá: <i class="text-success">{{ $request['price'] }}</i>.
                        @endif
                    </p> --}}
                    </div>

                    @if ($products != null)
                        <div class="product-body">
                            @foreach ($products as $product)
                                @if ($product->project != null)
                                    <div class="product-item row">
                                        <div class="product-image col-5">
                                            <a href="{{ route('productDetail', ['product' => $product->alias]) }}"><img
                                                    src="{{ asset('uploads/images/products/thumbs/' . $product->image) }}"
                                                    alt="{{ $product->name }}" title="{{ $product->name }}"
                                                    width="100%"></a>
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
                                                <span class="location">{{ $product->address }}</span>
                                            </div>
                                            <div class="product-content">
                                                <span>Thông tin chi tiết:</span><br>
                                                <span>Căn hộ rộng : {!! $product->acreage !!} m2</span><br>
                                                <span>Tình Trạng : {!! $product->furniture !!}</span><br>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                            @endforeach
                        </div>

                        <div class="product-paginate">
                            <nav class="paginate">
                                <ul class="pagination">
                                    @if (url()->full() == url()->current())
                                        <!--Arrow left-->
                                        <li
                                            class="{{ $products->currentPage() == 1 ? 'page-item disabled' : 'page-item' }}">
                                            <a href="{{ $products->previousPageUrl() }}"
                                                class="page-link waves-effect waves-effect" aria-label="Previous">
                                                <span aria-hidden="true">Trước</span>
                                                <span class="sr-only">«</span>
                                            </a>
                                        </li>

                                        @if ($products->lastPage() <= 7)
                                            <!--Numbers-->
                                            @for ($i = 1; $i <= $products->lastPage(); $i++)
                                                <li
                                                    class="{{ $products->currentPage() == $i ? 'page-item active disabled' : 'page-item' }}">
                                                    <a href="{{ $products->url($i) }}"
                                                        class="page-link">{{ $i }}</a>
                                                </li>
                                            @endfor
                                        @else
                                            @if ($products->currentPage() <= 5)
                                                @for ($i = 1; $i <= 6; $i++) <li class="{{ $products->currentPage() == $i ? 'page-item active disabled' : 'page-item' }}">
                                                                    <a href="{{ $products->url($i) }}" class="page-link">{{ $i }}</a>
                                                                </li> @endfor <li
                                                    class="page-item disabled">
                                                    <a href="#" class="page-link no-border">...</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="{{ $products->url($products->lastPage()) }}"
                                                            class="page-link">{{ $products->lastPage() }}</a>
                                                    </li>
                                                @elseif($products->currentPage() >= ($products->lastPage() - 4))
                                                    <li class="page-item">
                                                        <a href="{{ $products->url(1) }}" class="page-link">1</a>
                                                    </li>
                                                    <li class="page-item disabled">
                                                        <a href="#" class="page-link no-border">...</a>
                                                    </li>
                                                    @for ($i = $products->lastPage() - 5; $i <= $products->lastPage(); $i++)
                                                        <li
                                                            class="{{ $products->currentPage() == $i ? 'page-item active disabled' : 'page-item' }}">
                                                            <a href="{{ $products->url($i) }}"
                                                                class="page-link">{{ $i }}</a>
                                                        </li>
                                                    @endfor
                                                @else
                                                    <li class="page-item">
                                                        <a href="{{ $products->url(1) }}" class="page-link">1</a>
                                                    </li>
                                                    <li class="page-item disabled">
                                                        <a href="#" class="page-link no-border">...</a>
                                                    </li>
                                                    @for ($i = $products->currentPage() - 2; $i <= $products->currentPage() + 2; $i++)
                                                        <li
                                                            class="{{ $products->currentPage() == $i ? 'page-item active disabled' : 'page-item' }}">
                                                            <a href="{{ $products->url($i) }}"
                                                                class="page-link">{{ $i }}</a>
                                                        </li>
                                                    @endfor
                                                    <li class="page-item disabled">
                                                        <a href="#" class="page-link no-border">...</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="{{ $products->url($products->lastPage()) }}"
                                                            class="page-link">{{ $products->lastPage() }}</a>
                                                    </li>
                                            @endif
                                        @endif

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
                                        <li
                                            class="{{ $products->currentPage() == 1 ? 'page-item disabled' : 'page-item' }}">
                                            <a href="{{ url()->full() . '&page=' . ($products->currentPage() - 1) }}"
                                                class="page-link waves-effect waves-effect" aria-label="Previous">
                                                <span aria-hidden="true">Trước</span>
                                                <span class="sr-only">«</span>
                                            </a>
                                        </li>

                                        @if ($products->lastPage() <= 7)
                                            <!--Numbers-->
                                            @for ($i = 1; $i <= $products->lastPage(); $i++)
                                                <li
                                                    class="{{ $products->currentPage() == $i ? 'page-item active disabled' : 'page-item' }}">
                                                    <a href="{{ url()->full() . '&page=' . $i }}"
                                                        class="page-link">{{ $i }}</a>
                                                </li>
                                            @endfor
                                        @else
                                            @if ($products->currentPage() <= 5)
                                                @for ($i = 1; $i <= 6; $i++) <li class="{{ $products->currentPage() == $i ? 'page-item active disabled' : 'page-item' }}">
                                                                    <a href="{{ url()->full() . '&page=' . $i }}" class="page-link">{{ $i }}</a>
                                                                </li> @endfor <li
                                                    class="page-item disabled">
                                                    <a href="#" class="page-link no-border">...</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="{{ url()->full() . '&page=' . $products->lastPage() }}"
                                                            class="page-link">{{ $products->lastPage() }}</a>
                                                    </li>
                                                @elseif($products->currentPage() >= ($products->lastPage() - 4))
                                                    <li class="page-item">
                                                        <a href="{{ url()->full() . '&page=1' }}" class="page-link">1</a>
                                                    </li>
                                                    <li class="page-item disabled">
                                                        <a href="#" class="page-link no-border">...</a>
                                                    </li>
                                                    @for ($i = $products->lastPage() - 5; $i <= $products->lastPage(); $i++)
                                                        <li
                                                            class="{{ $products->currentPage() == $i ? 'page-item active disabled' : 'page-item' }}">
                                                            <a href="{{ url()->full() . '&page=' . $i }}"
                                                                class="page-link">{{ $i }}</a>
                                                        </li>
                                                    @endfor
                                                @else
                                                    <li class="page-item">
                                                        <a href="{{ url()->full() . '&page=1' }}" class="page-link">1</a>
                                                    </li>
                                                    <li class="page-item disabled">
                                                        <a href="#" class="page-link no-border">...</a>
                                                    </li>
                                                    @for ($i = $products->currentPage() - 2; $i <= $products->currentPage() + 2; $i++)
                                                        <li
                                                            class="{{ $products->currentPage() == $i ? 'page-item active disabled' : 'page-item' }}">
                                                            <a href="{{ url()->full() . '&page=' . $i }}"
                                                                class="page-link">{{ $i }}</a>
                                                        </li>
                                                    @endfor
                                                    <li class="page-item disabled">
                                                        <a href="#" class="page-link no-border">...</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="{{ url()->full() . '&page=' . $products->lastPage() }}"
                                                            class="page-link">{{ $products->lastPage() }}</a>
                                                    </li>
                                            @endif
                                        @endif

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
                    @else
                        <h1>Không có căn hộ bạn đang tìm</h1>
                    @endif
                </div>
            </div>
            <div class="col-md-4">


                {{-- @include('layouts.cate-area') --}}
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
        {{-- {{ $products->links() }} --}}



    </div>

    @include('layouts.footer-static')

@endsection

@section('script')
    <script>
        $(document).ready(function() {
            // --------- Loại BĐS -----------------------
            $("input[name='product_cate']").keyup(function() {
                get_product_cates();
            });

            $("input[name='product_cate']").click(function(event) {
                $(".search-product-cate").css('display', 'none');
                $(".search-district").css('display', 'none');
                $(".search-projects").css('display', 'none');
                $(".search-acreage").css('display', 'none');

                get_all_product_cates();
            });

            function get_product_cates() {
                var url_get_product_cates = "{{ url('/ajax/getProductCateOfKeyword') }}";
                var product_cate = $("input[name='product_cate']").val();
                var token = $("input[name='_token']").val();

                $.ajax({
                    url: url_get_product_cates,
                    method: 'POST',
                    data: {
                        product_cate: product_cate,
                        _token: token
                    },
                    success: function(data) {
                        $(".search-product-cate").css('display', 'block');
                        $(".ul-result-product-cate").empty();
                        $.each(data, function(key, value) {
                            $(".ul-result-product-cate").append(
                                "<li><a class='product-cate-value'>" + value.name +
                                "</a></li>"
                            );
                        });

                        $(".product-cate-value").click(function() {
                            var product_cate_value = $(this).text();
                            $("input[name='product_cate']").val(product_cate_value);

                            $(".search-product-cate").css('display', 'none');
                        });
                    }
                });
            }

            function get_all_product_cates() {
                var url_get_product_cates = "{{ url('/ajax/getProductCateOfKeyword') }}";
                var product_cate = '';
                var token = $("input[name='_token']").val();

                $.ajax({
                    url: url_get_product_cates,
                    method: 'POST',
                    data: {
                        product_cate: product_cate,
                        _token: token
                    },
                    success: function(data) {
                        $(".search-product-cate").css('display', 'block');
                        $(".ul-result-product-cate").empty();
                        $.each(data, function(key, value) {
                            $(".ul-result-product-cate").append(
                                "<li><a class='product-cate-value'>" + value.name +
                                "</a></li>"
                            );
                        });

                        $(".product-cate-value").click(function() {
                            var product_cate_value = $(this).text();
                            $("input[name='product_cate']").val(product_cate_value);

                            $(".search-product-cate").css('display', 'none');
                        });
                    }
                });
            }
            // --------- End Loại BĐS -----------------------

            // --------- Quận/Huyện -----------------------
            $("input[name='district']").keyup(function() {
                get_districts();
            });

            $("input[name='district']").click(function(event) {
                $(".search-product-cate").css('display', 'none');
                $(".search-district").css('display', 'none');
                $(".search-projects").css('display', 'none');
                $(".search-acreage").css('display', 'none');
                get_all_districts();
                // event.stopPropagation();
            });

            function get_districts() {
                var url_get_districts = "{{ url('/ajax/getDistrictOfKeyword') }}";
                var district = $("input[name='district']").val();
                var token = $("input[name='_token']").val();

                $.ajax({
                    url: url_get_districts,
                    method: 'POST',
                    data: {
                        district: district,
                        _token: token
                    },
                    success: function(data) {
                        $(".search-district").css('display', 'block');
                        $(".ul-result-districts").empty();
                        $.each(data, function(key, value) {
                            $(".ul-result-districts").append(
                                "<li><a class='district-value'>" + value.name_local +
                                "</a></li>"
                            );
                        });

                        $(".district-value").click(function() {
                            var district_value = $(this).text();
                            $("input[name='district']").val(district_value);

                            $(".search-district").css('display', 'none');
                        });
                    }
                });
            }

            function get_all_districts() {
                var url_get_districts = "{{ url('/ajax/getDistrictOfKeyword') }}";
                var district = '';
                var token = $("input[name='_token']").val();

                $.ajax({
                    url: url_get_districts,
                    method: 'POST',
                    data: {
                        district: district,
                        _token: token
                    },
                    success: function(data) {
                        $(".search-district").css('display', 'block');
                        $(".ul-result-districts").empty();
                        $.each(data, function(key, value) {
                            $(".ul-result-districts").append(
                                "<li><a class='district-value'>" + value.name_local +
                                "</a></li>"
                            );
                        });

                        $(".district-value").click(function() {
                            var district_value = $(this).text();
                            $("input[name='district']").val(district_value);

                            $(".search-district").css('display', 'none');
                        });
                    }
                });
            }
            // --------- End Quận/Huyện -----------------------


            // --------- Dự án -----------------------
            $("input[name='projects']").keyup(function() {
                get_projects();
            });

            $("input[name='projects']").click(function(event) {
                $(".search-product-cate").css('display', 'none');
                $(".search-district").css('display', 'none');
                $(".search-projects").css('display', 'none');
                $(".search-acreage").css('display', 'none');

                get_all_projects();
            });

            function get_all_projects() {
                var url_get_projects = "{{ url('/ajax/getProjectOfKeyword') }}";
                var district = $("input[name='district']").val();
                var projects = '';
                var token = $("input[name='_token']").val();

                $.ajax({
                    url: url_get_projects,
                    method: 'POST',
                    data: {
                        district: district,
                        projects: projects,
                        _token: token
                    },
                    success: function(data) {
                        $(".search-projects").css('display', 'block');
                        $(".ul-result-projects").empty();
                        $.each(data, function(key, value) {
                            $(".ul-result-projects").append(
                                "<li><a class='projects-value'>" + value.name + "</a></li>"
                            );
                        });

                        $(".projects-value").click(function() {
                            var project_value = $(this).text();
                            $("input[name='projects']").val(project_value);

                            $(".search-projects").css('display', 'none');
                        });
                    }
                });
            }

            function get_projects() {
                var url_get_projects = "{{ url('/ajax/getProjectOfKeyword') }}";
                var district = $("input[name='district']").val();
                var projects = $("input[name='projects']").val();
                var token = $("input[name='_token']").val();

                $.ajax({
                    url: url_get_projects,
                    method: 'POST',
                    data: {
                        district: district,
                        projects: projects,
                        _token: token
                    },
                    success: function(data) {
                        $(".search-projects").css('display', 'block');
                        $(".ul-result-projects").empty();
                        $.each(data, function(key, value) {
                            $(".ul-result-projects").append(
                                "<li><a class='projects-value'>" + value.name + "</a></li>"
                            );
                        });

                        $(".projects-value").click(function() {
                            var project_value = $(this).text();
                            $("input[name='projects']").val(project_value);

                            $(".search-projects").css('display', 'none');
                        });
                    }
                });
            }
            // --------- Dự án -----------------------



            // --------- Diện tích -----------------------
            $("input[name='acreage']").keyup(function() {
                $(".search-acreage").css('display', 'block');

                $(".acreage-value").click(function() {
                    var acreage_value = $(this).text();
                    $("input[name='acreage']").val(acreage_value);

                    $(".search-acreage").css('display', 'none');
                });
            });

            $("input[name='acreage']").click(function(event) {
                $(".search-product-cate").css('display', 'none');
                $(".search-district").css('display', 'none');
                $(".search-projects").css('display', 'none');
                $(".search-acreage").css('display', 'block');

                $(".acreage-value").click(function() {
                    var acreage_value = $(this).text();
                    $("input[name='acreage']").val(acreage_value);

                    $(".search-acreage").css('display', 'none');
                });
                event.stopPropagation();
            });

            $(document).click(function() {
                $(".search-product-cate").css('display', 'none');
                $(".search-district").css('display', 'none');
                $(".search-projects").css('display', 'none');
                $(".search-acreage").css('display', 'none');
            });
            // --------- End Diện tích -----------------------

        });
    </script>
    <script type="text/javascript">
        var url_get_project_of_city = "{{ url('/admin/ajax/showProjectOfCity') }}";
        $("select[name='adr_city_id']").change(function() {
            var city_id = $(this).val();
            var token = $("input[name='_token']").val();

            //Producer
            $.ajax({
                url: url_get_project_of_city,
                method: 'POST',
                data: {
                    city_id: city_id,
                    _token: token
                },
                success: function(data) {
                    $("select[name='project_id']").html('');
                    $("select[name='project_id']").append("<option value=''> - Dự án - </option>");
                    $.each(data, function(key, value) {
                        $("select[name='project_id']").append(
                            "<option value='" + value.id + "'>" + value.name + "</option>"
                        );
                    });
                }
            });
        });

        var url_get_project_of_district = "{{ url('/admin/ajax/showProjectOfDistrict') }}";
        $("select[name='adr_district_id']").change(function() {
            var district_id = $(this).val();
            var token = $("input[name='_token']").val();

            if (district_id == '') {
                var city_id = $("select[name='adr_city_id']").val();
                $.ajax({
                    url: url_get_project_of_city,
                    method: 'POST',
                    data: {
                        city_id: city_id,
                        _token: token
                    },
                    success: function(data) {
                        $("select[name='project_id']").html('');
                        $("select[name='project_id']").append("<option value=''> - Dự án - </option>");
                        $.each(data, function(key, value) {
                            $("select[name='project_id']").append(
                                "<option value='" + value.id + "'>" + value.name +
                                "</option>"
                            );
                        });
                    }
                });
            } else {
                $.ajax({
                    url: url_get_project_of_district,
                    method: 'POST',
                    data: {
                        district_id: district_id,
                        _token: token
                    },
                    success: function(data) {
                        $("select[name='project_id']").html('');
                        $("select[name='project_id']").append("<option value=''> - Dự án - </option>");
                        $.each(data, function(key, value) {
                            $("select[name='project_id']").append(
                                "<option value='" + value.id + "'>" + value.name +
                                "</option>"
                            );
                        });
                    }
                });
            }
        });
    </script>
@endsection
