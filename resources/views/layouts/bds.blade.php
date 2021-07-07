    <div class="project-related">
        <div class="project-header text-uppercase">
           <span style="color: #fff;"> Tìm kiếm BDS cho thuê</span>
        </div>
        <div class="project-list">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('filter') }}" method="GET">
                        @csrf
                        <div class="product-search">
                            <div class="product-search-control">
                                <div class="search-cate">

                                    <select class="form-select" aria-label="Default select example" name="adr_city_id">
                                        <option value=""> - Khu vực - </option>
                                        <option value="79">Khu vực HCM</option>
                                        <option value="74">Khu vực Bình Dương</option>
                                        <option value="75">Khu vực Đồng Nai</option>
                                        <option value="0">Khu vực khác</option>
                                    </select>
                                </div>

                                <div class="search-cate">
                                    <select class="form-select" name="project_id">
                                        <option value=""> - Dự án - </option>
                                        {{-- @foreach ($projects as $project)
                                            <option value="{{ $project->id }}">
                                                {{ $project->name }}
                                            </option>
                                        @endforeach --}}
                                    </select>
                                </div>

                                <div class="search-cate">
                                    <select class="form-select" aria-label="Default select example" name="acreage">
                                        <option selected value="">- Diện tích - </option>

                                        <option value="1">
                                            <= 30 m2</option>
                                        <option value="30 - 50">30-50 m2</option>
                                        <option value="50 - 80">50-80 m2</option>
                                        <option value="80 - 100">80-100 m2</option>
                                        <option value="100 - 150">100-150 m2</option>
                                        <option value="150 - 200">150-200 m2</option>
                                        <option value="200 - 250">200-250 m2</option>
                                        <option value="250 - 300">250-300 m2</option>
                                        <option value="300 - 500">300-500 m2</option>
                                        <option value="2">>= 500 m2</option>
                                    </select>
                                </div>

                                <div class="search-cate">
                                    <div class="select-custom">
                                        <select class="form-select" aria-label="Default select example" name="price">
                                            <option selected value="">- Giá - </option>

                                            <option value="0"> dưới 1 tỷ</option>
                                            <option value="1000000000 - 2000000000">từ 1 - 2 tỷ</option>
                                            <option value="2000000000 - 3000000000">từ 2 - 3 tỷ</option>
                                            <option value="3000000000 - 4000000000">từ 3 - 4 tỷ</option>
                                            <option value="5">trên 4 tỷ</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="search-button">
                                    <button type="submit" class="btn btn-home-search" id="btnSearch">Tìm kiếm</button>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
    <script type="text/javascript">
        var url_get_project_of_city = "{{ url('/admin/ajax/showProjectOfCity') }}";
        $("select[name='adr_city_id']").change(function() {
            var city_id = $(this).val();
            var token = $("input[name='_token']").val();

            //Producer
            $.ajax({
                url: url_get_project_of_city,
                method: 'POST',
                data: {
                    city_id: city_id,
                    _token: token
                },
                success: function(data) {
                    $("select[name='project_id']").html('');
                    $("select[name='project_id']").append("<option value=''> - Dự án - </option>");
                    $.each(data, function(key, value) {
                        $("select[name='project_id']").append(
                            "<option value='" + value.id + "'>" + value.name + "</option>"
                        );
                    });
                }
            });
        });

        var url_get_project_of_district = "{{ url('/admin/ajax/showProjectOfDistrict') }}";
        $("select[name='adr_district_id']").change(function() {
            var district_id = $(this).val();
            var token = $("input[name='_token']").val();

            if (district_id == '') {
                var city_id = $("select[name='adr_city_id']").val();
                $.ajax({
                    url: url_get_project_of_city,
                    method: 'POST',
                    data: {
                        city_id: city_id,
                        _token: token
                    },
                    success: function(data) {
                        $("select[name='project_id']").html('');
                        $("select[name='project_id']").append("<option value=''> - Dự án - </option>");
                        $.each(data, function(key, value) {
                            $("select[name='project_id']").append(
                                "<option value='" + value.id + "'>" + value.name +
                                "</option>"
                            );
                        });
                    }
                });
            } else {
                $.ajax({
                    url: url_get_project_of_district,
                    method: 'POST',
                    data: {
                        district_id: district_id,
                        _token: token
                    },
                    success: function(data) {
                        $("select[name='project_id']").html('');
                        $("select[name='project_id']").append("<option value=''> - Dự án - </option>");
                        $.each(data, function(key, value) {
                            $("select[name='project_id']").append(
                                "<option value='" + value.id + "'>" + value.name +
                                "</option>"
                            );
                        });
                    }
                });
            }
        });
    </script>
