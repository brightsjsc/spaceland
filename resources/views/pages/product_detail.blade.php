@extends('layouts.index')

@section('head_title')
{{ $product->name }}
@endsection
@section('contain-content')
{!! $product->description !!}
@endsection
@section('image-page')
{{ asset('uploads/images/products/').$product->image}}
@endsection

@section('content')
@if(Session::has('success'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
@endif

<div class="page-header-detail">
    @include('layouts.page-header')
</div>
<div class="container" style="padding: 30px 30px;">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}"></i> Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 detail">
            <div class="product-detail">
                <div class="product-gallerys">
                    <?php
                        $gallerys = array();
                        $gallerys = explode('|', $product->gallerys);
                        $stt = 0;
                        $stt2 = 0;
                    ?>
                    <div class="col-12 fotorama " data-thumbwidth="900" data-height="450" data-nav="thumbs">
                        @foreach ($gallerys as $gallery)
                        <img src="{{ asset('uploads/images/products/'.$gallery) }}" width="144" height="96">
                        @endforeach
                    </div>
                </div>

                <div class="product-header">
                    <h1 class="product-title text-uppercase">{{ $product->name }}</h1>

                    <div class="short-title">
                        <i class="fa fa-map-marker"></i>
                        Dự án {{ $product->project->name }},
                        {{ $product->project->commune->level." ".$product->project->commune->name_local }},
                        {{ $product->project->district->level." ".$product->project->district->name_local }},
                        {{ $product->project->city->name_local }}.
                    </div>

                    <div class="dropdown-divider"></div>

                    <div class="short-detail-wrap">
                        <ul class="short-detail-2 clearfix pad-16">
                            <li><span class="sp1">Mức giá:</span><span class="sp2">
                                    @if ($product->price_type == 1)
                                    {{ number_format($product->price,0,',','.') }} đ/tháng
                                    @elseif ($product->price_type == 2)
                                    {{ number_format($product->price,0,',','.') }} đ/m2
                                    @else
                                    Thỏa thuận
                                    @endif
                                </span></li>
                            <li><span class="sp1">Diện tích:</span><span class="sp2">{{ $product->acreage }} m2</span>
                            </li>
                            <li><span class="sp1">Phòng ngủ:</span><span class="sp2">{{ $product->room_number }}
                                    PN</span></li>
                            <li>
                                <span class="sp1">Liên hệ:</span>
                                <span class="sp2">
                                    <a href="{{ 'tel:'.$product->contact_mobile }}"
                                        style="color: red">{{ $product->contact_mobile }}</a>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown-divider"></div>
                </div>

                <div class="product-body">


                    <div class="detail-2">
                        <h3><span class="title-detail">Đặc điểm bất động sản</span></h3>
                    </div>
                    <div class="box-round-grey3">
                        <div class="row">
                            <div class="col-3 title-info">
                                <strong>Loại hình:</strong>
                            </div>
                            <div class="col-9 content-info">
                                {{ $product->product_cate->name }}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3 title-info">
                                <strong>Địa chỉ:</strong>
                            </div>
                            <div class="col-9 content-info">
                                {{ $product->address }}.
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3 title-info">
                                <strong>Tình trạng BĐS:</strong>
                            </div>
                            <div class="col-9 content-info">
                                @if ($product['status'] == 0)
                                Còn trống
                                @else
                                Đang cho thuê
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3 title-info">
                                <strong>Dự án:</strong>
                            </div>
                            <div class="col-9 content-info">
                                {{ $product->project->name }}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3 title-info">
                                <strong>Diện tích:</strong>
                            </div>
                            <div class="col-9 content-info">
                                {{ $product->acreage }} m2
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3 title-info">
                                <strong>Số phòng ng:</strong>
                            </div>
                            <div class="col-9 content-info">
                                {{ $product->room_number }}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3 title-info">
                                <strong>Số toilet:</strong>
                            </div>
                            <div class="col-9 content-info">
                                {{ $product->toilet_number }}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3 title-info">
                                <strong>Ni tht:</strong>
                            </div>
                            <div class="col-9 content-info">
                                {{ $product->furniture }}
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="detail-1">
                        <h3><span class="title-detail">Thng tin mô tả</span></h3>
                    </div>
                    <div class="des-product">
                        {!! $product->description !!}
                    </div>

                    @if ($product->map)
                    <div class="detail-3">
                        <h3><span class="title-detail">Xem trên bản đồ</span></h3>
                    </div>
                    <div class="map-product">
                        <div id="googleMap" style="width:100%;height:500px;"></div>

                        <script>
                            function myMap() {
                                  var myCenter = new google.maps.LatLng({{ $product->map }});
                                  var mapCanvas = document.getElementById("googleMap");
                                  var mapOptions = {center: myCenter, zoom: 17};
                                  var map = new google.maps.Map(mapCanvas, mapOptions);
                                  var marker = new google.maps.Marker({position:myCenter,map:map});
                                  marker.setMap(map);

                                  var infowindow = new google.maps.InfoWindow({
                                    content: "<strong>{{ $product->project->name }}</strong>"
                                  });
                                  infowindow.open(map,marker);
                                }
                        </script>

                        <script
                            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKCZyVb_cx2LH3onGkmE3l1Q5CuDKyygQ&callback=myMap">
                        </script>
                    </div>
                    @endif
                </div>
            </div>

            <div class="product-related">
                <h3><span class="title-related">Bất động sn cùng khu vực</span></h3>
                <div class="row">
                    <div class="owl-carousel owl-theme" id="slider">
                        @foreach ($products_related as $product)
                        <div class=" item">
                            <div class="item-content">
                                <div class="image-product">
                                    <a href="{{ route('productDetail',['product' => $product->alias]) }}"
                                        title="{{ $product->name }}" alt="{{ $product->name }}">
                                        <img class="img"
                                            src="{{ asset('uploads/images/products/thumbs/'.$product->image) }}"
                                            title="{{ $product->name }}" alt="{{ $product->name }}">
                                    </a>
                                </div>
                                <div class="title-product">
                                    <h5>
                                        <a href="{{ route('productDetail',['product' => $product->alias]) }}"
                                            title="{{ $product->name }}" alt="{{ $product->name }}"
                                            style="font-weight: 500;">{{ $product->name }}</a>
                                    </h5>
                                </div>
                                <div class="district-product">
                                    <span><i class="fas fa-map-marker-alt"></i> {{$product->project->name}}</span>
                                </div>
                                <div class="price-product">
                                    <span>Giá: {{ number_format($product->price,0,',','.') }}VNĐ</span>
                                </div>
                                {{-- <div class="detail-product">
                                    <ul class="icon-product">
                                        <li><i class="fas fa-bed"></i><span>{{$product->room_number}}</span></li>
                                        <li><i class="fas fa-bath"></i></i><span>{{$product->toilet_number}}</span></li>
                                        <li><i class="fas fa-chart-area"></i></i><span>{{$product->acreage}} m2</span>
                                        </li>
                                    </ul>
                                </div> --}}

                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="product-contact">
                <div class="row">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-5">
                                <a href="tel:0969856985"><img
                                        src="{{asset('assets/img/icon-hotline.gif')}}" width="100%" alt=""></a>
                            </div>
                            <div class="col-7" style="padding:0">
                                <span><b>Hotline</b></span>
                                <!--<span>{{ $product->contact_mobile }}</span>-->
                                <span>0969856985</span>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-5">
                                <a href="javascript:void(Tawk_API.toggle())"><img
                                        src="{{asset('assets/img/chat-icon.gif')}}" width="100%" alt=""></a>
                            </div>
                            <div class="col-7" style="padding:0">
                                <span><b>Chat now</b></span><br>
                                <span>Tư vn 24/7</span>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="contact-mobile">
                    <a data-toggle="modal" data-target="#exampleModal" class="btn btn-default btn-block">Đt lịch tư
                        vấn</a>
                </div>
            </div>

            <div class="project-related">

                <div class="project-header">
                    <h3 class="title-pro"> D án cùng khu vc</h3>
                </div>
                <div class="project-list">
                    <ul>
                        @foreach ($projects_related as $project_related)
                        <li><i class="fas fa-angle-right"></i></i><a
                                href="{{ route('productsOfProject',['project' => $project_related->alias]) }}"
                                style="display:block">{{ $project_related->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @include('layouts.cate-area')
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Đăng ký tư vấn</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @include('pages.contact')
            </div>
        </div>
    </div>
</div>
</div>



@include('layouts.footer-static')

@endsection

@section('script')
<!-- Swiper JS -->
<script src="{{ asset('package/swiper-bundle.min.js') }}"></script>

<!-- Initialize Swiper -->
<script>
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 10,
        slidesPerView: 6,
        loop: true,
        freeMode: true,
        loopedSlides: 5, //looped slides should be the same
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
    });
    var galleryTop = new Swiper('.gallery-top', {
            spaceBetween: 10,
            autoplay: {
                delay: 5000,
            },
            loop: true,
            loopedSlides: 5, //looped slides should be the same
            navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        thumbs: {
        swiper: galleryThumbs,
        },
    });
</script>
@endsection
