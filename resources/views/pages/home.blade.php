@extends('layouts.index')

@section('head_title')
  {{ 'Kênh thông tin bất động sản cho thuê' }}
@endsection
@section('image-page')
    {{asset('uploads/images/bg1.jpg')}}
@endsection

@section('content')
@include('layouts.page-header')
    <div class="main-content">
    <div class="top-category">
        <div class="container content-container">
        <h3 class="title-cate"> <a href="http://localhost:8000/quan/nam-tu-liem ">Cho Thuê Căn Hộ Hà Nội</a></h3>
        <br>
            <div class="row">
            <div class="col-md-6 pdr-0" style="padding:0 !important">
            <div class="place-big" onclick="location.href='{{route('productsOfDistrict',['district' => $productOfDistricts[0]['alias']]) }}'">
                    <div class="place-img slick-initialized slick-slider">
                        <div aria-live="polite" class="slick-list draggable">
                            <div class="slick-track">

                            <img src="{{asset('assets/img/cate/HCM-web-1.jpg')}}" width="100%">
                            </div>
                        </div>
                    </div>
                    <div class="place-info rent-info" style="display: block;">
                        <h3>
                            <a href="{{ route('productsOfDistrict',['district' => $productOfDistricts[0]['alias']]) }}" class="name-district">
                                <span class="place-name">CC {{ $productOfDistricts[0]['level']." ".$productOfDistricts[0]['name_local'] }}</span>
                                <span class="place-number">{{ $productOfDistricts[0]['num_product']." tin đăng" }}</span>
                            </a>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pdl-0">
                <div class="place-small" >
                    <div class="place-item nopadding" onclick="location.href='{{route('productsOfDistrict',['district' => $productOfDistricts[1]['alias']]) }}'">
                        <div class="place-img slick-initialized slick-slider">
                            <div aria-live="polite" class="slick-list draggable">
                                <div class="slick-track">
                                    <img src="{{asset('assets/img/cate/anh2.jpg')}}" width="100%">
                                </div>
                            </div>
                        </div>
                        <div class="place-info rent-info" style="display: block;">
                            <h3>
                                <a href="{{ route('productsOfDistrict',['district' => $productOfDistricts[1]['alias']]) }}" class="name-district">
                                    <span class="place-name">CC {{ $productOfDistricts[1]['level']." ".$productOfDistricts[1]['name_local'] }}</span>
                                    <span class="place-number">{{ $productOfDistricts[1]['num_product']." tin đăng" }}</span>
                                </a>
                            </h3>
                        </div>
                    </div>
                    <div class="place-item" onclick="location.href='{{route('productsOfDistrict',['district' => $productOfDistricts[2]['alias']]) }}'">
                        <div class="place-img slick-initialized slick-slider">
                            <div aria-live="polite" class="slick-list draggable">
                                <div class="slick-track">
                                    <img src="{{asset('assets/img/cate/anh3.jpg')}}" width="100%">
                                </div>
                            </div>
                        </div>
                        <div class="place-info rent-info" style="display: block;">
                            <h3>
                                <a href="{{ route('productsOfDistrict',['district' => $productOfDistricts[2]['alias']]) }}" class="name-district">
                                    <span class="place-name">CC {{ $productOfDistricts[2]['level']." ".$productOfDistricts[2]['name_local'] }}</span>
                                    <span class="place-number">{{ $productOfDistricts[2]['num_product']." tin đăng" }}</span>
                                </a>
                            </h3>
                        </div>
                    </div>
                    <div class="place-item nopadding" onclick="location.href='{{route('productsOfDistrict',['district' => $productOfDistricts[3]['alias']]) }}'">
                        <div class="place-img slick-initialized slick-slider">
                            <div aria-live="polite" class="slick-list draggable">
                                <div class="slick-track">
                                    <img src="{{asset('assets/img/cate/anh4.jpg')}}" width="100%">
                                </div>
                            </div>
                        </div>
                        <div class="place-info rent-info" style="display: block;">
                            <h3>
                                <a href="{{ route('productsOfDistrict',['district' => $productOfDistricts[3]['alias']]) }}" class="name-district">
                                    <span class="place-name">CC {{ $productOfDistricts[3]['level']." ".$productOfDistricts[3]['name_local'] }}</span>
                                    <span class="place-number">{{ $productOfDistricts[3]['num_product']." tin đăng" }}</span>
                                </a>
                            </h3>
                        </div>
                    </div>
                    <div class="place-item" onclick="location.href='{{route('productsOfDistrict',['district' => $productOfDistricts[4]['alias']]) }}'">
                        <div class="place-img slick-initialized slick-slider">
                            <div aria-live="polite" class="slick-list draggable">
                                <div class="slick-track">
                                    <img src="https://file4.batdongsan.com.vn/images/newhome/cities1/DNA-web-1.jpg" width="100%">
                                </div>
                            </div>
                        </div>
                        <div class="place-info rent-info" style="display: block;">
                            <h3>
                                <a href="{{ route('productsOfDistrict',['district' => $productOfDistricts[4]['alias']]) }}" class="name-district">
                                    <span class="place-name">CC {{ $productOfDistricts[4]['level']." ".$productOfDistricts[4]['name_local'] }}</span>
                                    <span class="place-number">{{ $productOfDistricts[4]['num_product']." tin đăng" }}</span>
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        </div>

    </div>

    <div class="bds-category">
        <div class="container" style="padding:30px 1.5rem;">
        @if (!empty($products))

            <div class="row">
                    <h3 class="title-cate"><i class="fas fa-star" style="color: #FA9716; font-size: 16px;"></i><a href="{{ route('productsOfDistrict',['district' => $productOfDistricts[0]['alias']]) }} ">
                        Cho Thuê Căn Hộ {{ $productOfDistricts[0]['level']." ".$productOfDistricts[0]['name_local'] }}
                    </a></h3>
                        <div class="owl-carousel owl-theme" id="slider">
                                    @foreach($products as $product)
                                    <div class=" item">
                                        <div class="item-content">
                                            <div class="image-product">
                                                <a href="{{ route('productDetail',['product' => $product->alias]) }}" title="{{ $product->name }}" alt="{{ $product->name }}">
                                                    <img class="img" src="{{ asset('uploads/images/products/thumbs/'.$product->image) }}" title="{{ $product->name }}" alt="{{ $product->name }}">
                                                </a>
                                            </div>
                                            <div class="title-product">
                                                <h5>
                                                    <a href="{{ route('productDetail',['product' => $product->alias]) }}" title="{{ $product->name }}" alt="{{ $product->name }}" style="font-weight: 500;">{{ $product->name }}</a>
                                                </h5>
                                            </div>
                                            <div class="district-product">
                                                <span><i class="fas fa-map-marker-alt"></i> {{$product->project_name}}</span>
                                            </div>
                                            <div class="price-product">
                                                <span>Giá: {{ number_format($product->price,0,',','.') }}VNĐ</span>
                                            </div>
                                            <div class="detail-product">
                                                <ul class="icon-product">
                                                    <li><i class="fas fa-bed"></i><span>{{$product->room_number}}</span></li>
                                                    <li><i class="fas fa-bath"></i></i><span>{{$product->toilet_number}}</span></li>
                                                    <li><i class="fas fa-chart-area"></i></i><span>{{$product->acreage}} m2</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                        </div>

                </div>
            </div>
        @endif

        </div>
    </div>
    <div class="bds-category-1">
        @if (!empty($products2))
        <div class="container" style="padding:30px 1.5rem;">
            <div class="row">
                    <h3 class="title-cate"><i class="fas fa-star" style="color: #FA9716; font-size: 16px;"></i> <a href="{{ route('productsOfDistrict',['district' => $productOfDistricts[1]['alias']]) }} ">
                        Cho Thuê Căn Hộ {{ $productOfDistricts[1]['level']." ".$productOfDistricts[1]['name_local'] }}
                    </a></h3>
                        <div class="owl-carousel owl-theme">
                            @foreach($products2 as $product)
                            <div class=" item">
                                <div class="item-content">
                                    <div class="image-product">
                                        <a href="{{ route('productDetail',['product' => $product->alias]) }}" title="{{ $product->name }}" alt="{{ $product->name }}">
                                            <img class="img" src="{{ asset('uploads/images/products/thumbs/'.$product->image) }}" title="{{ $product->name }}" alt="{{ $product->name }}">
                                        </a>
                                    </div>
                                    <div class="title-product">
                                        <h5>
                                            <a href="{{ route('productDetail',['product' => $product->alias]) }}" title="{{ $product->name }}" alt="{{ $product->name }}" style="font-weight: 500;">{{ $product->name }}</a>
                                        </h5>
                                    </div>
                                    <div class="district-product">
                                        <span><i class="fas fa-map-marker-alt"></i> {{$product->project_name}}</span>
                                    </div>
                                    <div class="price-product">
                                        <span>Giá: {{ number_format($product->price,0,',','.') }}VNĐ</span>
                                    </div>
                                    <div class="detail-product">
                                        <ul class="icon-product">
                                            <li><i class="fas fa-bed"></i><span>{{$product->room_number}}</span></li>
                                            <li><i class="fas fa-bath"></i></i><span>{{$product->toilet_number}}</span></li>
                                            <li><i class="fas fa-chart-area"></i></i><span>{{$product->acreage}} m2</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
                    @endif
    </div>
    <div class="bds-category">
        @if (!empty($products3))

        <div class="container" style="padding:30px 1.5rem;">
            <div class="row">
                <h3 class="title-cate"> <i class="fas fa-star" style="color: #FA9716; font-size: 16px;"></i><a href="{{ route('productsOfDistrict',['district' => $productOfDistricts[2]['alias']]) }} ">
                   Cho Thuê Căn Hộ {{ $productOfDistricts[2]['level']." ".$productOfDistricts[2]['name_local'] }}
                </a></h3>
                        <div class="owl-carousel owl-theme">
                            @foreach($products3 as $product)
                            <div class=" item">
                                <div class="item-content">
                                    <div class="image-product">
                                        <a href="{{ route('productDetail',['product' => $product->alias]) }}" title="{{ $product->name }}" alt="{{ $product->name }}">
                                            <img class="img" src="{{ asset('uploads/images/products/thumbs/'.$product->image) }}" title="{{ $product->name }}" alt="{{ $product->name }}">
                                        </a>
                                    </div>
                                    <div class="title-product">
                                        <h5>
                                            <a href="{{ route('productDetail',['product' => $product->alias]) }}" title="{{ $product->name }}" alt="{{ $product->name }}" style="font-weight: 500;">{{ $product->name }}</a>
                                        </h5>
                                    </div>
                                    <div class="district-product">
                                        <span><i class="fas fa-map-marker-alt"></i> {{$product->project_name}}</span>
                                    </div>
                                    <div class="price-product">
                                        <span>Giá: {{ number_format($product->price,0,',','.') }}VNĐ</span>
                                    </div>
                                    <div class="detail-product">
                                        <ul class="icon-product">
                                            <li><i class="fas fa-bed"></i><span>{{$product->room_number}}</span></li>
                                            <li><i class="fas fa-bath"></i></i><span>{{$product->toilet_number}}</span></li>
                                            <li><i class="fas fa-chart-area"></i></i><span>{{$product->acreage}} m2</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
    <div class="bds-category-1" >
        @if (!empty($products4))
        <div class="container" style="padding:30px 1.5rem;">
            <div class="row">
                <h3 class="title-cate"> <i class="fas fa-star" style="color: #FA9716; font-size: 16px;"></i><a href="{{ route('productsOfDistrict',['district' => $productOfDistricts[3]['alias']]) }} ">
                    Cho Thuê Căn Hộ {{ $productOfDistricts[3]['level']." ".$productOfDistricts[3]['name_local'] }}
                </a></h3>
                    <div class="owl-carousel owl-theme">
                        @foreach($products4 as $product)
                        <div class=" item">
                            <div class="item-content">
                                <div class="image-product">
                                    <a href="{{ route('productDetail',['product' => $product->alias]) }}" title="{{ $product->name }}" alt="{{ $product->name }}">
                                        <img class="img" src="{{ asset('uploads/images/products/thumbs/'.$product->image) }}" title="{{ $product->name }}" alt="{{ $product->name }}">
                                    </a>
                                </div>
                                <div class="title-product">
                                    <h5>
                                        <a href="{{ route('productDetail',['product' => $product->alias]) }}" title="{{ $product->name }}" alt="{{ $product->name }}" style="font-weight: 500;">{{ $product->name }}</a>
                                    </h5>
                                </div>
                                <div class="district-product">
                                    <span><i class="fas fa-map-marker-alt"></i> {{$product->project_name}}</span>
                                </div>
                                <div class="price-product">
                                    <span>Giá: {{ number_format($product->price,0,',','.') }}VNĐ</span>
                                </div>
                                <div class="detail-product">
                                    <ul class="icon-product">
                                        <li><i class="fas fa-bed"></i><span>{{$product->room_number}}</span></li>
                                        <li><i class="fas fa-bath"></i></i><span>{{$product->toilet_number}}</span></li>
                                        <li><i class="fas fa-chart-area"></i></i><span>{{$product->acreage}} m2</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
    </div>
    </div>
    </div>
</div>
@include('layouts.footer-static')
@endsection
<script src="{{ asset('js/home.js') }}"></script>
@section('script')
@endsection
