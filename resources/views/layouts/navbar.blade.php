<!-- Navbar -->
<nav class="custom-navbar navbar navbar-expand-lg navbar-dark" role="navigation"
    style="background-color:white !important">
    <div class="container">
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
        <div class="menu-mobile-area d-none d-lg-block">
            <span class="fa fa-times menu-mobile-close"></span>
            <ul class="menu-mobile list-style-none">
                @foreach ($menus as $menu)
                    <li class="menu-child dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-end-tag="true">
                            {{-- ^^ --}}
                            {{ $menu->name }}
                        </a>
                        <?php $menus_2 = DB::table('product_cates')
                        ->where('parent_id', $menu->id)
                        ->get(); ?>

                        @if ($menus_2)
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach ($menus_2 as $menu_2)
                                    <a class="dropdown-item" style="padding: 7px 22px"
                                        href="{{ URL::to('bat-dong-san/' . $menu_2->alias) }}">{{ $menu_2->name }}</a>
                                @endforeach
                            </div>
                        @endif
                    </li>
                @endforeach

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
                </li> --}}
                {{-- <li class="menu-child">
                    <a href="{{ route('productsOfDistrict',['district' => $productOfDistricts[4]['alias']]) }}">
                        {{ $productOfDistricts[3]['level']." ".$productOfDistricts[3]['name_local'] }}
                    </a>
                </li> --}}
                {{-- <li class="menu-child">
                    <a href="{{ route('productsOfDistrict',['district' => $productOfDistricts[4]['alias']]) }}">
                        {{ $productOfDistricts[4]['level']." ".$productOfDistricts[4]['name_local'] }}
                    </a>
                </li> --}}
                <li class="menu-child">
                    <a href="{{ '/' }}#news">
                        Tin tức
                    </a>
                </li>
                <li class="menu-child">
                    <a href="#footer-static">
                        Liên Hệ
                    </a>
                </li>
            </ul>
        </div>
        {{-- mobile --}}
        <div class="menu-mobile-area d-lg-none">
            <span class="fa fa-times menu-mobile-close"></span>
            <ul class="menu-mobile list-style-none">
                @foreach ($menus as $menu)
                    <li class="menu-child dropdown">
                        <?php $menus_2 = DB::table('product_cates')
                        ->where('parent_id', $menu->id)
                        ->get(); ?>
                        <?php
                        $milisecond = round(time() * 1000);
                        $randNumber = rand(1, 10000);
                        $idRandom = 'collapse_menu_mobile_' . md5($milisecond . $randNumber);
                        ?>
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="collapse"
                            aria-haspopup="true" data-target="#{{ $idRandom }}" aria-expanded="false"
                            data-end-tag="true">
                            {{-- ^^ --}}
                            {{ $menu->name }}
                            <b class="caret"></b>
                        </a>

                        @if ($menus_2)
                            <div class="collapse" id="{{ $idRandom }}">
                                @foreach ($menus_2 as $menu_2)
                                    <a class="dropdown-item" style="padding: 7px 22px"
                                        href="{{ URL::to('bat-dong-san/' . $menu_2->alias) }}">{{ $menu_2->name }}</a>
                                @endforeach
                            </div>
                        @endif
                    </li>
                @endforeach

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
