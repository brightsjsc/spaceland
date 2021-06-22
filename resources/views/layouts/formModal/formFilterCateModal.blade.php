<?php $isMobile = $isMobile ?? false ?>
<?php $classSelectBox = $isMobile ? 'select-custom form-control' : 'select-custom' ?>
<form action="" method="GET" class="{{ $isMobile ? 'form_filter_cate_mobile'  : '' }}">
    @csrf
    <div class="row home-cate-search">
        <div class="home-cate-search-item col-md-2 col-6">
            <div class="select-box-customize">
                <?php $districtId = $request['adr_district_id'] ?? '-1' ?>
                <select name="adr_district_id" class="{{ $classSelectBox }} {{ $districtId != '-1' ? 'first_change' : '' }}" data-has-data="{{ $districtId != '-1' ? 'true' : 'false' }}">
                    <option value="">Chọn Quận/Huyện</option>
                    @foreach ($productOfDistricts as $productOfDistrict)
                        @if ($productOfDistrict['num_product'] > 0)
                            <option value="{{ $productOfDistrict['district_id'] }}" {{ $districtId == $productOfDistrict['district_id'] ? 'selected' : '' }}>
                                {{ $productOfDistrict['level']." ".$productOfDistrict['name_local']."(".$productOfDistrict['num_product'].")" }}
                            </option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>

        <div class="home-cate-search-item col-md-2 col-6">
            <div class="select-box-customize">
                <?php $communeId = $request['adr_commune_id'] ?? '-1' ?>
                <select
                    name="adr_commune_id"
                    class="{{ $classSelectBox }}"
                    data-has-data="{{ $communeId != '-1' ? 'true' : 'false' }}"
                    data-id-selected="{{$communeId}}"
                    data-end-tag="true">
                    <!-- ^^ -->
                    <option value="">Chọn Phường/Xã</option>
                </select>
            </div>
        </div>

        <div class="home-cate-search-item col-md-2 col-6">
            <div class="select-box-customize">
                <?php $projectId = $request['project_id'] ?? '-1' ?>
                <select
                    name="project_id"
                    class="{{ $classSelectBox }}"
                    data-has-data="{{ $projectId != '-1' ? 'true' : 'false' }}"
                    data-id-selected="{{$projectId}}"
                    data-end-tag="true">
                    <!-- ^^ -->
                    <option value="">Chọn dự án</option>
                </select>
            </div>
        </div>

        <div class="home-cate-search-item col-md-2 col-6">
            <div class="select-box-customize">
                <select name="room_number" class="{{ $classSelectBox }}">
                    <option value="1"
                            @if (!empty($request['room_number']) && $request['room_number'] == '1')
                            selected
                        @endif
                    >01 phòng ngủ
                    </option>
                    <option value="2"
                            @if (!empty($request['room_number']) && $request['room_number'] == '2')
                            selected
                        @endif
                    >02 phòng ngủ
                    </option>
                    <option value="3"
                            @if (!empty($request['room_number']) && $request['room_number'] == '3')
                            selected
                        @endif
                    >03 phòng ngủ
                    </option>
                    <option value="4"
                            @if (!empty($request['room_number']) && $request['room_number'] == '4')
                            selected
                        @endif
                    >04 phòng ngủ
                    </option>
                </select>
            </div>
        </div>

        <div class="home-cate-search-item col-md-2 col-6">
            <div class="select-box-customize">
                <select name="price" class="{{ $classSelectBox }}">
                    <option value="">Mức giá</option>
                    <option value="thoa-thuan"
                            @if (!empty($request['price']) && $request['price'] == 'thoa-thuan')
                            selected
                        @endif
                    >Thỏa thuận
                    </option>
                    <option value="1000000-5000000"
                            @if (!empty($request['price']) && $request['price'] == '1000000-5000000')
                            selected
                        @endif
                    >1 - 5 triệu
                    </option>
                    <option value="5000000-8000000"
                            @if (!empty($request['price']) && $request['price'] == '5000000-8000000')
                            selected
                        @endif
                    >5 - 8 triệu
                    </option>
                    <option value="8000000-10000000"
                            @if (!empty($request['price']) && $request['price'] == '8000000-10000000')
                            selected
                        @endif
                    >8 - 10 triệu
                    </option>
                    <option value="10000000-15000000"
                            @if (!empty($request['price']) && $request['price'] == '10000000-15000000')
                            selected
                        @endif
                    >10 - 15 triệu
                    </option>
                    <option value="15000000-20000000"
                            @if (!empty($request['price']) && $request['price'] == '15000000-20000000')
                            selected
                        @endif
                    >15 - 20 triệu
                    </option>
                    <option value=">20000000"
                            @if (!empty($request['price']) && $request['price'] == '>20000000')
                            selected
                        @endif
                    >> 20 triệu
                    </option>
                </select>
            </div>
        </div>

        <div class="home-cate-search-item col-md-2 col-6">
            <div class="search-button">
                <button type="submit" class="btn-block btn btn-success" id="btnSearch">Tìm kiếm</button>
            </div>
        </div>
    </div>
</form>
