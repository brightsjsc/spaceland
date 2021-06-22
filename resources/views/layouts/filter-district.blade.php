<div class="page-header" filter-color="black">
    <div class="banner-home-slide">
        <div class="home-search">
            <div class="filter-cate">
                <form action="" method="GET">
                    <div class="home-cate-search row">
                        <div class="home-cate-search-item col-md-4 col-12 pd5">
                            <div class="select-box-customize">
                                <select name="project" class="select-custom">
                                    <option value="">Dự án</option>
                                    @foreach ($projects as $project_related)
                                        @php $selected = ($request['project'] ?? false) === $project_related->alias @endphp
                                        <option
                                            class="select-option"
                                            value="{{ $project_related->alias }}"
                                            {{ $selected ? 'selected' : '' }}
                                            data-end-tag="true">
                                            {{-- ^^ --}}
                                            {{ $project_related->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="home-cate-search-item col-md-3 col-6 pd5">
                            <div class="select-box-customize">
                                <select name="room_number" class="select-custom">
                                    <option value="">Phòng ngủ</option>
                                    @for ($room = 1; $room <= 4; $room++)
                                        @php $selected = ($request['room_number'] ?? '0') == $room @endphp
                                        <option
                                            value="{{ $room }}"
                                            {{ $selected ? 'selected' : '' }}
                                            data-end-tag="true">
                                            {{-- ^^ --}}
                                            0{{ $room }} phòng ngủ
                                        </option>
                                    @endfor
                                </select>
                            </div>
                        </div>

                        <div class="home-cate-search-item col-md-3 col-6 pd5">
                            <div class="select-box-customize">
                                <select name="price" class="select-custom">
                                    <option value="">Mức giá</option>
                                    @foreach (config('product_district')['price_search'] ?? [] as $code_price => $price)
                                        @php $selected = ($request['price'] ?? false) === $code_price @endphp
                                        <option
                                            value="{{ $code_price }}"
                                            {{ $selected ? 'selected' : '' }}
                                            data-end-tag="true">
                                            {{-- ^^ --}}
                                            {{ $price }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="home-cate-search-item col-md-2 col-12 pd5">
                            <div class="search-button" style="margin-bottom:5px;">
                                <button type="submit" class="btn btn-success btn-block" id="btnSearch">Tìm kiếm</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        {{-- <div class="home-search-m" onclick="window.location.href='/tim-kiem'">
            <div class="search-button">
                <button type="submit" class="btn btn-home-search" id="btnSearch">Tìm kiếm bất động sản cho bạn</button>
            </div>
        </div> --}}
    </div>
</div>
</div>
