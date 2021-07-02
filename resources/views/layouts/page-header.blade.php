<div class="page-header" filter-color="black">
    <div class="banner-home-slide">
        <div class="home-search">
            <form action="{{ route('filter') }}" method="GET">
                @csrf
                <div class="home-search-tool">
                    <div class="home-search-content">
                        <div class="home-search-control row">
                            <div class="search-cate col-md-3 col-6 pd5">
                                <div class="select-custom ">
                                    <input type="text" id="product-cate" placeholder="Danh mục" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true" name="product_cate" class="ui-autocomplete-input">

                                    <div class="search-product-cate">
                                        <ul class="ul-result-product-cate">
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="search-cate col-md-2 col-6 pd5">
                                <div class="select-custom">
                                    <input type="text" id="district" placeholder="Quận/Huyện" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true" name="district" class="ui-autocomplete-input">

                                    <div class="search-district">
                                        <ul class="ul-result-districts">
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="search-cate col-md-3 col-6 pd5">
                                <div class="select-custom">
                                    <input type="text" id="projects" placeholder="Dự án" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true" name="projects" class="ui-autocomplete-input">

                                    <div class="search-projects">
                                        <ul class="ul-result-projects">
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="search-cate col-md-2 col-6 pd5">
                                <div class="select-custom">
                                    <input type="text" id="acreage" placeholder="Diện tích" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true" name="acreage" class="ui-autocomplete-input">

                                    <div class="search-acreage">
                                        <ul class="ul-result-acreage">
                                            <li><a class="acreage-value"><= 30 m2</a></li>
                                            <li><a class="acreage-value">30-50 m2</a></li>
                                            <li><a class="acreage-value">50-80 m2</a></li>
                                            <li><a class="acreage-value">80-100 m2</a></li>
                                            <li><a class="acreage-value">100-150 m2</a></li>
                                            <li><a class="acreage-value">150-200 m2</a></li>
                                            <li><a class="acreage-value">200-250 m2</a></li>
                                            <li><a class="acreage-value">250-300 m2</a></li>
                                            <li><a class="acreage-value">300-500 m2</a></li>
                                            <li><a class="acreage-value">>= 500 m2</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="search-button col-md-2 col-12 pd5">
                                <button type="submit" class="btn-block btn btn-home-search" id="btnSearch">Tìm kiếm</button>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        {{-- <div class="home-search-m" onclick="window.location.href='/tim-kiem'">
            <div class="search-button">
                <button type="submit" class="btn btn-home-search" id="btnSearch">Tìm kiếm bất động sản cho bạn</button>
            </div>
        </div> --}}
    </div>
</div>
