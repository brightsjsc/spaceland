<!-- Navbar -->
            <ul class="menu-mobile list-style-none">
                <li class="menu-child">
                    {{-- <a href="{{ route('productsOfDistrict',['district' => $productOfDistricts[0]['alias']]) }} ">
                        {{ $productOfDistricts[0]['level']." ".$productOfDistricts[0]['name_local'] }}
                    </a> --}}
                    <a href="{{ route('productsOfCity',['city' => 'ho-chi-minh']) }} ">
                        Khu vực Hồ Chí Minh
                    </a>
                </li>
                <li class="menu-child">
                    {{-- <a href="{{ route('productsOfDistrict',['district' => $productOfDistricts[1]['alias']]) }}">
                        {{ $productOfDistricts[1]['level']." ".$productOfDistricts[1]['name_local'] }}
                    </a> --}}
                    <a href="{{ route('productsOfCity',['city' => 'binh-duong']) }} ">
                        Khu vực Bình Dương
                    </a>
                </li>
                <li class="menu-child">
                    {{-- <a href="{{ route('productsOfDistrict',['district' => $productOfDistricts[2]['alias']]) }}">
                        {{ $productOfDistricts[2]['level']." ".$productOfDistricts[2]['name_local'] }}
                    </a> --}}
                    <a href="{{ route('productsOfCity',['city' => 'dong-nai']) }} ">
                        Khu vực Đồng Nai
                    </a>
                </li>
                {{-- <li class="menu-child">
                    <a href="{{ route('productsOfCity',['city' => 'khac']) }} ">
                        Khu vực Khác
                    </a>
                </li> --}}

            </ul>
<!-- End Navbar -->
<script>
    window.addEventListener('DOMContentLoaded', () => {
        $(".button-open-menu-mobile").on('click', function(){
            $(".menu-mobile-background").show();
            $(".menu-mobile-area").addClass('open');

            $(".menu-mobile-background").animate({
                'opacity' : '1'
            }, 300);
        });
        $(".menu-mobile-close, .menu-mobile-background").on('click', function(){
            $(".menu-mobile-area").removeClass('open');

            $(".menu-mobile-background").animate({
                'opacity' : '0'
            }, 300);

            setTimeout(function(){
                $(".menu-mobile-background").hide();
            }, 300);
        });
    });
</script>
