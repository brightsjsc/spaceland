@extends('admins.layouts.index')

@section('head_title')
    {{ 'Danh sách sản phẩm' }}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i
                                    class="material-icons">home</i> Bảng điều khiển</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Danh sách sản phẩm</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-rose card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">view_list</i>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">DANH SÁCH SẢN PHẨM</h4>
                            </div>

                            <div class="col-md-6">
                                <div style="float: right;">
                                    <a href="{{ route('admin.product.create') }}" class="btn btn-success">
                                        <span class="btn-label">
                                            <i class="material-icons">add</i>
                                        </span>
                                        Thêm
                                        <div class="ripple-container"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="dropdown-divider"></div>

                        <div class="toolbar" style="padding: 0 15px;">
                            <!-- Here you can write extra buttons/actions for the toolbar -->
                            <form action="" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <select class="form-control" name="adr_city_id">
                                                        <option value=""> - Tỉnh/Thành phố - </option>
                                                        @foreach ($cities as $city)
                                                            <option value="{{ $city->city_id }}" @if ($filter != '')
                                                                @if ($filter['adr_city_id']==$city->city_id)
                                                                selected @endif
                                                        @endif
                                                        > {{ $city->level . ' ' . $city->name_local }} </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <select class="form-control" name="adr_district_id">
                                                        <option value=""> - Quận/Huyện - </option>
                                                        @if ($filter != '')
                                                            @foreach ($districts as $district)
                                                                <option value="{{ $district->district_id }}" @if ($filter['adr_district_id'] == $district->district_id) selected @endif>
                                                                    {{ $district->level . ' ' . $district->name_local }}
                                                                </option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <select class="form-control" name="adr_commune_id">
                                                        <option value=""> - Phường/Xã - </option>
                                                        @if ($filter != '')
                                                            @foreach ($communes as $commune)
                                                                <option value="{{ $commune->commune_id }}" @if ($filter['adr_commune_id'] == $commune->commune_id) selected @endif>
                                                                    {{ $commune->level . ' ' . $commune->name_local }}
                                                                </option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                        </div><br>

                                        <div class="row">
                                            <div class="col-md-4">

                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <select class="form-control" name="project_id">
                                                        <option value=""> - Dự án - </option>
                                                        @if ($filter != '')
                                                            @foreach ($projects as $project)
                                                                <option value="{{ $project->id }}" @if ($filter['project_id'] == $project->id) selected @endif>
                                                                    {{ $project->name }}
                                                                </option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                        </div><br>
                                    </div>

                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-rose" style="padding: 10px 25px">
                                            <i class="material-icons">search</i> Tìm kiếm</button>
                                    </div>
                                </div>
                            </form>
                        </div><br>

                        <div class="dropdown-divider"></div>

                        <div class="material-datatables">
                            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0"
                                width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Ảnh</th>
                                        <th>Tiêu đề</th>
                                        <th>Danh mục</th>
                                        <th>Giá</th>
                                        <th>Dự án</th>
                                        <th>Ngày đăng</th>
                                        <th>Tình trạng</th>
                                        <th class="disabled-sorting text-center">Tác vụ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>
                                                <img src="{{ asset('uploads/images/products/thumbs/' . $product['image']) }}"
                                                    alt="" width="100px"><br>
                                            </td>
                                            <td><a
                                                    href="{{ route('admin.product.edit', ['id' => $product['id']]) }}"><b>{{ $product['name'] }}</b></a>
                                            </td>
                                            <td>{{ $product->product_cate->name }}</td>
                                            <td style="text-align: right">
                                                @if ($product['price_type'] == 1)
                                                    {{ number_format($product['price'], 0, ',', '.') }}/tháng
                                                @elseif ($product['price_type'] == 2)
                                                    {{ number_format($product['price'], 0, ',', '.') }}/m2
                                                @endif
                                            </td>

                                            <td class="td-actions text-center">
                                                @if ($product['project_id'])
                                                    {{ $product->project['name'] }}
                                                @endif
                                            </td>
                                            <td style="width: 100px">
                                                {{ date('d/m/Y', strtotime($product['created_at'])) }}</td>
                                            <td class="td-actions text-center">
                                                @if ($product['status'] == 0)
                                                    <span class="btn btn-sm btn-danger">Còn trống</span>
                                                @else
                                                    <span class="btn btn-sm btn-warning">Đã cho thuê</span>
                                                @endif
                                                <br><br>
                                                @if ($product['publish'] == 0)
                                                    <span class="btn btn-sm btn-success">Đã xuất bản</span>
                                                @else
                                                    <span class="btn btn-sm btn-warning">Chờ duyệt</span>
                                                @endif
                                            </td>
                                            <td class="td-actions text-center">
                                                <a href="{{ route('admin.product.edit', ['id' => $product['id']]) }}"
                                                    class="btn btn-link btn-success btn-just-icon" title="Sửa">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </a>
                                                <a data-url="{{ route('admin.product.delete', ['id' => $product['id']]) }}"
                                                    onclick="return confirmSubmitDel()"
                                                    class="btn btn-link btn-danger btn-just-icon remove" title="Xóa">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end content-->
                </div>
                <!--  end card  -->
            </div>
            <!-- end col-md-12 -->
        </div>
        <!-- end row -->
    </div>
@endsection

@section('script')
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
    <script src="{{ asset('assets/js/plugins/jquery.dataTables.min.js') }}"></script>
    <!--  Plugin for Sweet Alert -->
    <script src="{{ asset('assets/js/plugins/sweetalert2.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#datatables').DataTable({
                "order": [
                    [0, "desc"]
                ],
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Tìm kiếm",
                }
            });
        });
    </script>

    <script type="text/javascript">
        function confirmSubmitDel() {
            var table = $('#datatables').DataTable();

            // Delete a record
            table.on('click', '.remove', function(e) {
                e.preventDefault();

                var url = $(this).attr('data-url');

                Swal.fire({
                    title: 'Bạn có muốn xóa?',
                    text: 'Bạn sẽ không thể khôi phục!',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Có, xóa ngay',
                    confirmButtonClass: "btn btn-success",
                    cancelButtonText: 'Không',
                    cancelButtonClass: "btn btn-danger",
                    buttonsStyling: false
                }).then((result) => {
                    if (result.value) {
                        window.location.href = url;
                    }
                });
            });
        }
    </script>

    @if (session('result'))
        <script type="text/javascript">
            $(document).ready(function() {
                Swal.fire({
                    title: 'Thành công!',
                    text: '{{ session('result') }}',
                    type: 'success',
                    confirmButtonClass: "btn btn-success",
                    buttonsStyling: false
                });
            });
        </script>
    @endif

    <script type="text/javascript">
        var url_get_districts = "{{ url('/admin/ajax/showDistrictOfCity') }}";
        $("select[name='adr_city_id']").change(function() {
            var city_id = $(this).val();
            var token = $("input[name='_token']").val();

            //Producer
            $.ajax({
                url: url_get_districts,
                method: 'POST',
                data: {
                    city_id: city_id,
                    _token: token
                },
                success: function(data) {
                    $("select[name='adr_district_id']").html('');
                    $("select[name='adr_district_id']").append(
                        "<option value=''> - Quận/Huyện - </option>");
                    $.each(data, function(key, value) {
                        $("select[name='adr_district_id']").append(
                            "<option value='" + value.district_id + "'>" + value.level +
                            " " + value.name_local + "</option>"
                        );
                    });
                }
            });
        });

        var url_get_communes = "{{ url('/admin/ajax/showCommuneOfDistrict') }}";
        $("select[name='adr_district_id']").change(function() {
            var district_id = $(this).val();
            var token = $("input[name='_token']").val();

            //Producer
            $.ajax({
                url: url_get_communes,
                method: 'POST',
                data: {
                    district_id: district_id,
                    _token: token
                },
                success: function(data) {
                    $("select[name='adr_commune_id']").html('');
                    $("select[name='adr_commune_id']").append(
                        "<option value=''> - Phường/Xã - </option>");
                    $.each(data, function(key, value) {
                        $("select[name='adr_commune_id']").append(
                            "<option value='" + value.commune_id + "'>" + value.level +
                            " " + value.name_local + "</option>"
                        );
                    });
                }
            });
        });

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

        var url_get_project = "{{ url('/admin/ajax/showProjectOfCommune') }}";
        $("select[name='adr_commune_id']").change(function() {
            var commune_id = $(this).val();
            var token = $("input[name='_token']").val();

            if (commune_id == '') {
                var district_id = $("select[name='adr_district_id']").val();
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
            } else {
                $.ajax({
                    url: url_get_project,
                    method: 'POST',
                    data: {
                        commune_id: commune_id,
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
@endsection
