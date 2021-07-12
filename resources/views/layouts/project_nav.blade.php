<!-- Navbar -->
<nav class="custom-navbar navbar navbar-dark" role="navigation" style="background-color:#024073 !important"
    id="navbar_detail" hidden>
    <div class="navbar-style navbar-all-detail positive-relative" style="display: contents;">
        <button class="button-open-menu-mobile-detail d-lg-none" type="button" data-end-tag="true">
            {{-- ^^ --}}
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="navbar-wrapper logo-detail">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('assets/img/Logo (2).png') }}" alt="">
            </a>
        </div>
        <button class="button-open-menu-mobile" type="button" data-end-tag="true">
            {{-- ^^ --}}
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="menu-mobile-background"></div>
        <div class="menu-mobile-area">
            <span class="fa fa-times menu-mobile-close"></span>
            <ul class="menu-mobile list-style-none">
                <li class="menu-child">
                    <a href="#Century" class="text-white">Giới thiệu
                    </a>
                </li>
                <li class="menu-child">
                    <a href="#Scale" class="text-white">Quy mô
                    </a>
                </li>

                <li class="menu-child">
                    <a href="#locate" class="text-white">Vị trí
                    </a>
                </li>
                <li class="menu-child">
                    <a href="#investor" class="text-white">Chủ đầu tư
                    </a>
                </li>
                <li class="menu-child">
                    <a href="#utilities" class="text-white">Tiện ích
                    </a>
                </li>
                <li class="menu-child">
                    <a href="#ground" class="text-white">Mặt bằng
                    </a>
                </li>
                <li class="menu-child">
                    <a href="#design" class="text-white">Thiết kế
                    </a>
                </li>
                <li class="menu-child">
                    <a href="#house" class="text-white">Nhà mẫu
                    </a>
                </li>
                <li class="menu-child">
                    <a href="#furniture" class="text-white">Nội thất
                    </a>
                </li>
                <li class="menu-child">
                    <a href="#payment" class="text-white">Giá bán & Thanh toán
                    </a>
                </li>
                <li class="menu-child">
                    <a href="#ask" class="text-white">Hỏi đáp
                    </a>
                </li>
            </ul>

        </div>
        {{-- mobile --}}

        <div class="nav_mobi_detail d-lg-none">

            <span class="fa fa-times menu-mobile-close-detail"></span>

            <ul class="menu-mobile menu-mobile-detail list-style-none" style="">
                <li class="menu-child menu-child-detail">
                    <a href="#Century" class="text-white text-li">Century
                    </a>
                </li>
                <li class="menu-child menu-child-detail">
                    <a href="#Scale" class="text-white text-li">Quy mô
                    </a>
                </li>

                <li class="menu-child menu-child-detail">
                    <a href="#locate" class="text-white text-li">Vị trí
                    </a>
                </li>
                <li class="menu-child menu-child-detail">
                    <a href="#investor" class="text-white text-li">Chủ đầu tư
                    </a>
                </li>
                <li class="menu-child menu-child-detail">
                    <a href="#utilities" class="text-white text-li">Tiện ích
                    </a>
                </li>
                <li class="menu-child menu-child-detail">
                    <a href="#ground" class="text-white text-li">Mặt bằng
                    </a>
                </li>
                <li class="menu-child menu-child-detail">
                    <a href="#design" class="text-white text-li">Thiết kế
                    </a>
                </li>
                <li class="menu-child menu-child-detail">
                    <a href="#house" class="text-white text-li">Nhà mẫu
                    </a>
                </li>
                <li class="menu-child menu-child-detail">
                    <a href="#furniture" class="text-white text-li">Nội thất
                    </a>
                </li>
                <li class="menu-child menu-child-detail">
                    <a href="#payment" class="text-white text-li">Thanh toán
                    </a>
                </li>
                <li class="menu-child menu-child-detail">
                    <a href="#ask" class="text-white text-li">Hỏi đáp
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>
<!-- End Navbar -->
<script>
    window.addEventListener('DOMContentLoaded', () => {
        $(".button-open-menu-mobile").on('click', function() {
            $(".menu-mobile-background").show();

            $(".menu-mobile-area").addClass('open');

            $(".menu-mobile-background").animate({
                'opacity': '1'
            }, 300);
        });
        $(".menu-mobile-close, .menu-mobile-background").on('click', function() {
            $(".menu-mobile-area").removeClass('open');


            $(".menu-mobile-background").animate({
                'opacity': '0'
            }, 300);

            setTimeout(function() {
                $(".menu-mobile-background").hide();
            }, 300);
        });
        // $(".menu-mobile-close").hide();
    });
</script>
<script>
    var firstScrollps = window.pageYOffset;
    window.onscroll = function() {
        // alert(window.pageYOffset);
        var currentScrollPos = window.pageYOffset;
        if (currentScrollPos < 230) {
            $("#navbar_detail").attr("hidden", true);

        } else {
            $("#navbar_detail").attr("hidden", false);
        }
        prevScrollpos = currentScrollPos;
    }
</script>

<script>
    window.addEventListener('DOMContentLoaded', () => {
        $(".button-open-menu-mobile-detail").on('click', function() {
            $(".menu-mobile-background").show();

            $(".nav_mobi_detail").addClass('open1');

            $(".menu-mobile-background").animate({
                'opacity': '1'
            }, 300);
        });
        $(".menu-mobile-close-detail, .menu-mobile-background").on('click', function() {
            $(".nav_mobi_detail").removeClass('open1');

            $(".menu-mobile-background").animate({
                'opacity': '0'
            }, 300);

            setTimeout(function() {
                $(".menu-mobile-background").hide();
            }, 300);
        });
        var nav_li_detail = document.querySelectorAll(".menu-child-detail");
        for (let i = 0; i < nav_li_detail.length; i++) {
            nav_li_detail[i].addEventListener("click", function() {
                $(".nav_mobi_detail").removeClass('open1');

                $(".menu-mobile-background").animate({
                    'opacity': '0'
                }, 300);

                setTimeout(function() {
                    $(".menu-mobile-background").hide();
                }, 300);
            });
        }
        //  $(".menu-mobile-close").hide();
    });
</script>
