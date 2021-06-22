@extends('layouts.index')

@section('head_title')
    Trang liên hệ
@endsection
@section('content')
@include('layouts.page-header')
<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-8 main-about">
                <h1>Liên Hệ</h1>
                <p class="title-about">
                    <strong>Tổng đài hỗ trợ tư vấn</strong>
                </p>
                <p class="content-about">
                    - Điện Thoại: <strong><a href="tel:0985.622.139">0985.622.139</a></strong><br>
                    - HotLine:&nbsp; <strong><a href="tel:0985.622.139">0969.856.985</a></strong><br>
                    - Email: &nbsp;<strong><a href="mailto:thuechungcuhn2020@gmail.com">thuechungcuhn2020@gmail.com</a></strong>
                </p><hr>
                <p>
                    <strong class="title-about">Văn phòng tại Hà Nội</strong>
                    <p class="content-about">
                        <strong style="color: red">- Địa chỉ: CT2A Nam Cường, Cổ Nhuế, Bắc Từ Liêm, TP Hà Nội </strong><br>
                        <strong>- Thời gian mở cửa: Từ 8h30 đến 18h00 hàng ngày.</strong>
                    </p>
                </p>
                <p class="about-thanks">
                    Cần tư vấn quý khách hàng vui lòng liên hệ về các địa chỉ trên , chúng tôi hân hạnh phục vụ quý khách 24/24
                </p>
            </div>
            <div class="col-md-4 form-cont">
                <h1 class="title-form">Tư vấn</h1>
                @include('pages.contact')
            </div>
        </div>
    </div>
   
</div>
@include('layouts.footer-static')
@endsection
<script src="{{ asset('js/home.js') }}"></script>
@section('script')
@endsection