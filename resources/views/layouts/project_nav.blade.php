<!-- Navbar -->
<nav class="custom-navbar navbar navbar-expand-lg navbar-dark" role="navigation"
    style="background-color:#024073 !important" id="navbar" hidden>
    <div class="navbar-style">
        <div class="navbar-wrapper">
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
        <div class="menu-mobile-area d-none d-lg-block" style="">
            <span class="fa fa-times menu-mobile-close"></span>
            <ul class="menu-mobile list-style-none" >
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
        <div class="menu-mobile-area d-lg-none">
            <span class="fa fa-times menu-mobile-close"></span>

            <ul class="menu-mobile list-style-none" style="">
                <li class="menu-child">
                    <a href="#Century" class="text-white">Century
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
                    <a href="#payment" class="text-white">Thanh toán
                    </a>
                </li>
                <li class="menu-child">
                    <a href="#ask" class="text-white">Hỏi đáp
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
            $("#navbar").attr("hidden", true);

        } else {
            $("#navbar").attr("hidden", false);
        }
        prevScrollpos = currentScrollPos;
    }
</script>
