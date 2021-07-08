@extends('layouts.index')

@section('head_title')
    {{ 'Spaceland' }}
@endsection
@section('image-page')
    {{ asset('uploads/images/bg2.jpg') }}
@endsection

@section('content')
    @include('layouts.page-header')
    <div class="main-content">
        {{-- <div  class="left-poster">
            <img src="{{asset('uploads/images/PT2.jpg')}}" alt="" width="100%">
        </div>
        <div class="right-poster">
            <img src="{{asset('uploads/images/PT1.jpg')}}" alt="" width="100%">
        </div> --}}
        <div class="top-category position-relative">



            <div class="container-fluid">
                <div class="row">
                    <div class="col-2 position-relative post-left">
                        <div class="mt-3 position-absolute post_show">
                            <img class="w-100" src="{{ asset('uploads/images/image-cate/PT1.jpg') }}">
                        </div>
                    </div>
                    <div class="col all_base">

                        <div class="w-100 mt-3">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-5">
                                    <div class="w-100">
                                        <a href="{{ URL::to('project/detail/' . $projects[1]->alias) }}">
                                            <img class="w-100 img_home_sp"
                                                src="{{ asset('/uploads/images/projects/' . $projects[1]->thumbnail_img) }}">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-7">
                                    <div class="row m-table m-mobi">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="w-100 mb-4">
                                                <a href="{{ URL::to('project/detail/' . $projects[0]->alias) }}">
                                                    <img class="w-100 "
                                                        src="{{ asset('/uploads/images/projects/' . $projects[0]->thumbnail_img) }}">
                                                </a>

                                            </div>
                                            <div class="w-100 ">

                                                <a href="{{ URL::to('project/detail/' . $projects[2]->alias) }}">
                                                    <img class="w-100 "
                                                        src="{{ asset('/uploads/images/projects/' . $projects[2]->thumbnail_img) }}">
                                                </a>


                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6 m-mobi">
                                            <div class="w-100 mb-4">

                                                <a href="{{ URL::to('project/detail/' . $projects[3]->alias) }}">
                                                    <img class="w-100 "
                                                        src="{{ asset('/uploads/images/projects/' . $projects[3]->thumbnail_img) }}">
                                                </a>

                                            </div>
                                            <div class="w-100">

                                                <a href="{{ URL::to('project/detail/' . $projects[4]->alias) }}">
                                                    <img class="w-100 "
                                                        src="{{ asset('/uploads/images/projects/' . $projects[4]->thumbnail_img) }}">
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vision w-100 mt-4">
                                <img class="w-100" src="{{ asset('uploads/images/image-cate/vision.png') }}">
                            </div>




                        </div>

                        <div class="row mb-3">
                            <h2 class="my-3">Tin tức mới nhất</h2>
                            @foreach ($post as $value)
                                <div class="col-xs-12 col-md-6 col-lg-4">

                                    <a href="{{ URL::to('post/detail/' . $value->alias) }}">
                                    <img class="w-100 heigh_img" src="{{ asset('uploads/images/posts/' . $value->image) }}">

                                    <p class="my-1">{{ $value->title }}</p>
                                   </a>
                                </div>
                            @endforeach

                        </div>

                    </div>
                    <div class="col-2 position-relative post-right">
                        <div class="mt-3 position-absolute post_show1">
                            <img class="w-100" src="{{ asset('uploads/images/image-cate/PT1.jpg') }}">
                        </div>
                    </div>
                </div>

            </div>




            {{-- <div class="bds-category">
        <div class="container" style="padding:30px 1.5rem;">
        @if (!empty($products))

            <div class="row">
                    <h3 class="title-cate"><i class="fas fa-star" style="color: #FA9716; font-size: 16px;"></i><a href="{{ route('productsOfDistrict',['district' => $productOfDistricts[0]['alias']]) }} ">
                        Cho Thuê Căn Hộ {{ $productOfDistricts[0]['level']." ".$productOfDistricts[0]['name_local'] }}
                    </a></h3>
                        <div class="owl-carousel owl-theme" id="slider">
                                    @foreach ($products as $product)
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
    </div> --}}
            {{-- <div class="bds-category-1">
        @if (!empty($products2))
        <div class="container" style="padding:30px 1.5rem;">
            <div class="row">
                    <h3 class="title-cate"><i class="fas fa-star" style="color: #FA9716; font-size: 16px;"></i> <a href="{{ route('productsOfDistrict',['district' => $productOfDistricts[1]['alias']]) }} ">
                        Cho Thuê Căn Hộ {{ $productOfDistricts[1]['level']." ".$productOfDistricts[1]['name_local'] }}
                    </a></h3>
                        <div class="owl-carousel owl-theme">
                            @foreach ($products2 as $product)
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
    </div> --}}
            {{-- <div class="bds-category">
        @if (!empty($products3))

        <div class="container" style="padding:30px 1.5rem;">
            <div class="row">
                <h3 class="title-cate"> <i class="fas fa-star" style="color: #FA9716; font-size: 16px;"></i><a href="{{ route('productsOfDistrict',['district' => $productOfDistricts[2]['alias']]) }} ">
                   Cho Thuê Căn Hộ {{ $productOfDistricts[2]['level']." ".$productOfDistricts[2]['name_local'] }}
                </a></h3>
                        <div class="owl-carousel owl-theme">
                            @foreach ($products3 as $product)
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
    </div> --}}
            {{-- <div class="bds-category-1" >
        @if (!empty($products4))
        <div class="container" style="padding:30px 1.5rem;">
            <div class="row">
                <h3 class="title-cate"> <i class="fas fa-star" style="color: #FA9716; font-size: 16px;"></i><a href="{{ route('productsOfDistrict',['district' => $productOfDistricts[3]['alias']]) }} ">
                    Cho Thuê Căn Hộ {{ $productOfDistricts[3]['level']." ".$productOfDistricts[3]['name_local'] }}
                </a></h3>
                    <div class="owl-carousel owl-theme">
                        @foreach ($products4 as $product)
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
    </div> --}}
        </div>
    </div>
    </div>
    {{-- <div class="place-info rent-info" style="display: block;">
                            <h3>
                                <a href="{{ route('productsOfDistrict',['district' => $productOfDistricts[3]['alias']]) }}" class="name-district">
                                    <span class="place-name">CC {{ $productOfDistricts[3]['level']." ".$productOfDistricts[3]['name_local'] }}</span>
                                    <span class="place-number">{{ $productOfDistricts[3]['num_product']." tin đăng" }}</span>
                                </a>
                            </h3>
                        </div> --}}
    <br>

    @include('layouts.footer-static')
@endsection
<script src="{{ asset('js/home.js') }}"></script>

<script>
    // var firstScrollps = window.pageYOffset;
    window.onscroll = function() {
        // alert(window.pageYOffset);
        var srollHtml = document.querySelector('html').clientHeight;
        var srolFooter = document.querySelector('.footer-static').clientHeight;

        var srollBody = (srollHtml - srolFooter - 600) ;
        console.log(srollBody)

        var currentScrollPos = window.pageYOffset ;
        if(currentScrollPos == 0 || currentScrollPos == 100){
            document.querySelector('.post_show').style.top = 0 + 'px';
            document.querySelector('.post_show1').style.top = 0 + 'px';
        }
        if (currentScrollPos >= 300 && currentScrollPos < srollBody) {
            console.log(currentScrollPos)
          document.querySelector('.post_show').style.top = (currentScrollPos - 200) + 'px';
          document.querySelector('.post_show1').style.top = (currentScrollPos - 200) + 'px';
        }

    }
</script>

@section('script')
@endsection
