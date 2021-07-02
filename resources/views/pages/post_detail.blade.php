@extends('layouts.index')

@section('head_title')
    {{ $post->title }}
@endsection
@section('contain-content')
    {!! $post->description !!}
@endsection

@section('content')

    <div class="page-header-detail">
        @include('layouts.page-header')
    </div>
    <div class="container" style="padding: 30px 30px;">
        <h1 style="font-weight: 900"><?php echo $post['title']; ?></h1>
        <br>
        <img
        src="{{ asset('uploads/images/posts/' . $post->image) }}" alt="" width="350"
        height="300">
        <br>

        <?php echo $post['content']; ?>
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
