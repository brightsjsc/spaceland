<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <script id='NAPhoneMobileCRM-widget-script' src='https://cdn.na.com.vn/scripts/NAPhoneCRM.js?business_id=40563822048a43eda9d4b9857e1a8291' type='text/javascript' charset='UTF-8' async></script>
    <meta charset="utf-8"/>
    <meta name="format-detection" content="telephone=yes">
    <title>@yield('head_title')</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link  href="{{asset('fotorama/fotorama.css')}}" rel="stylesheet">
    <script src="{{asset('fotorama/fotorama.js')}}"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'name='viewport'/>

    <link rel="canonical" href="http://thuecanhohn.com"/>
    <!-- Primary Meta Tags -->
    <meta name="title" content="@yield('head_title')">
    <meta name="keywords" content="@yield('keyword')">
    <meta name="description" content="@yield('contain-content')">
    <meta itemprop="name" content="@yield('head_title')">
    <meta itemprop="description" content="@yield('contain-content')">
    <meta itemprop="image" content="@yield('image-page')">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://thuecanhohn.com">
    <meta property="og:title" content="@yield('head_title')">
    <meta property="og:description" content="@yield('contain-content')">
    <meta property="og:image" content="@yield('image-page')">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="http://thuecanhohn.com">
    <meta property="twitter:title" content="@yield('head_title')">
    <meta property="twitter:description" content="@yield('contain-content')">
    <meta property="twitter:image" content="@yield('image-page')">
    <meta property="og:site_name" content="Hong Hung Land"/>


    <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <script>
        const BASE_URL      = "{{ url('/') }}";
        const URL_SEARCH    = "{{ url('/tim-kiem') }}";
    </script>

    @yield('style')
</head>

<body class="off-canvas-sidebar">
    @include('layouts.navbar')
<div class="wrapper wrapper-full-page">
    @yield('content')
</div>

<div class="fixed_mobile">
    <div class="action_mobile_footer">
        <a href="tel:0969856985">
            <div class="image_phone">
                <img src="{{asset('uploads/images/icon-hotline.gif')}}" alt="phone">
            </div>
            <span>0969856985</span>
        </a>
    </div>
</div>
<!-- Core JS Files -->
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/common.js')}}"></script>
<script src="{{asset('js/filter.js')}}"></script>
<script src="{{asset('js/home.js')}}"></script>
<script src="{{ asset('js/jquery.validate.js') }}"></script>
<script>
    window.addEventListener('DOMContentLoaded', () => {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        common.setCarousel();
    });
</script>

@yield('script')
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f8e7b59f91e4b431ec5e5f7/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</html>
