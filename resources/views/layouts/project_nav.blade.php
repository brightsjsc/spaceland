<!-- Navbar -->
<nav class="custom-navbar navbar navbar-expand-lg navbar-dark" role="navigation"
    style="background-color:#024073 !important" id="navbar" hidden>
    <div class="navbar-wrapper">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('assets/img/Logo (2).png') }}" alt="" style="width:250; margin-left:100">
        </a>
    </div>
    <button class="button-open-menu-mobile" type="button" data-end-tag="true">
        {{-- ^^ --}}
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon icon-bar"></span>
    </button>
    <div class="menu-mobile-background"></div>
    <div class="menu-mobile-area-2 d-none d-lg-block">
        <span class="fa fa-times menu-mobile-close"></span>
        <ul class="menu-mobile list-style-none" style="width:1200">
            <li class="menu-child">
                <a href="#Century">Century
                </a>
            </li>
            <li class="menu-child">
                <a href="#Scale">Quy mô
                </a>
            </li>

            <li class="menu-child">
                <a href="#locate">Vị trí
                </a>
            </li>
            <li class="menu-child">
                <a href="#investor">Chủ đầu tư
                </a>
            </li>
            <li class="menu-child">
                <a href="#utilities">Tiện ích
                </a>
            </li>
            <li class="menu-child">
                <a href="#ground">Mặt bằng
                </a>
            </li>
            <li class="menu-child">
                <a href="#design">Thiết kế
                </a>
            </li>
            <li class="menu-child">
                <a href="#house">Nhà mẫu
                </a>
            </li>
            <li class="menu-child">
                <a href="#furniture">Nội thất
                </a>
            </li>
            <li class="menu-child">
                <a href="#payment">Thanh toán
                </a>
            </li>
            <li class="menu-child">
                <a href="#ask">Hỏi đáp
                </a>
            </li>


        </ul>
    </div>
    <div class="container">

        {{-- mobile --}}
        <div class="menu-mobile-area d-lg-none">
            <span class="fa fa-times menu-mobile-close"></span>
            <ul class="menu-mobile list-style-none">
                <li class="menu-child">
                    <a href="#Century">Century
                    </a>
                </li>
                <li class="menu-child">
                    <a href="#Scale">Quy mô
                    </a>
                </li>

                <li class="menu-child">
                    <a href="#locate">Vị trí
                    </a>
                </li>
                <li class="menu-child">
                    <a href="#investor">Chủ đầu tư
                    </a>
                </li>
                <li class="menu-child">
                    <a href="#utilities">Tiện ích
                    </a>
                </li>
                <li class="menu-child">
                    <a href="#ground">Mặt bằng
                    </a>
                </li>
                <li class="menu-child">
                    <a href="#design">Thiết kế
                    </a>
                </li>
                <li class="menu-child">
                    <a href="#house">Nhà mẫu
                    </a>
                </li>
                <li class="menu-child">
                    <a href="#furniture">Nội thất
                    </a>
                </li>
                <li class="menu-child">
                    <a href="#payment">Thanh toán
                    </a>
                </li>
                <li class="menu-child">
                    <a href="#ask">Hỏi đáp
                    </a>
                </li>
                {{-- <li class="menu-child">
                        <a href="{{ route('productsOfDistrict',['district' => $productOfDistricts[0]['alias']]) }} ">
                            {{ $productOfDistricts[0]['level']." ".$productOfDistricts[0]['name_local'] }}
                        </a>
                    </li>
                    <li class="menu-child">
                        <a href="{{ route('productsOfDistrict',['district' => $productOfDistricts[1]['alias']]) }}">
                            {{ $productOfDistricts[1]['level']." ".$productOfDistricts[1]['name_local'] }}
                        </a>
                    </li>
                    <li class="menu-child">
                        <a href="{{ route('productsOfDistrict',['district' => $productOfDistricts[2]['alias']]) }}">
                            {{ $productOfDistricts[2]['level']." ".$productOfDistricts[2]['name_local'] }}
                        </a>
                    </li>
                    <li class="menu-child">
                        <a href="{{ route('productsOfDistrict',['district' => $productOfDistricts[3]['alias']]) }}">
                            {{ $productOfDistricts[3]['level']." ".$productOfDistricts[3]['name_local'] }}
                        </a>
                    </li>
                    <li class="menu-child">
                        <a href="{{ route('productsOfDistrict',['district' => $productOfDistricts[4]['alias']]) }}">
                            {{ $productOfDistricts[4]['level']." ".$productOfDistricts[4]['name_local'] }}
                        </a>
                    </li> --}}

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
