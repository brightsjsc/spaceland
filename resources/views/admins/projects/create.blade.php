@extends('admins.layouts.index')

@section('head_title')
    {{ 'Thêm dự án' }}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Bảng điều khiển</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.productCate.index') }}">Dự án</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Thêm dự án</li>
                    </ol>
                </nav>
            </div>
        </div>


        <form action="{{ route('admin.project.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <!-- <div class="col-md-12"> -->
                <div class="col-md-10 pdr-0">
                    <div class="card">
                        <div class="card-header card-header-rose card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">person</i>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="card-title">Thêm dự án</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label required">Tên dự án</label>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="name"
                                                            value="{{ old('name') }}">
                                                        @if ($errors->has('name'))
                                                            <span class="invalid-feedback text-right"
                                                                style="display: block;">
                                                                <strong>{{ $errors->first('name') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><br>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label required">Tỉnh / Thành phố</label>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <select class="form-control" name="adr_city_id">
                                                            <option value="0"> Chọn Tỉnh / Thành phố </option>
                                                            @foreach ($cities as $city)
                                                                <option value="{{ $city->city_id }}">
                                                                    {{ $city->level . ' ' . $city->name_local }} </option>
                                                            @endforeach
                                                        </select>
                                                        @if ($errors->has('adr_city_id'))
                                                            <span class="invalid-feedback text-right"
                                                                style="display: block;">
                                                                <strong>{{ $errors->first('adr_city_id') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><br>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label required">Quận / Huyện / Thị
                                                    xã</label>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <select class="form-control" name="adr_district_id">
                                                            <option value=""> Chọn Quận / Huyện / Thị xã </option>
                                                        </select>
                                                        @if ($errors->has('adr_district_id'))
                                                            <span class="invalid-feedback text-right"
                                                                style="display: block;">
                                                                <strong>{{ $errors->first('adr_district_id') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><br>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label required">Phường / Xã</label>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <select class="form-control" name="adr_commune_id">
                                                            <option value=""> Chọn Phường / Xã </option>

                                                        </select>
                                                        @if ($errors->has('adr_commune_id'))
                                                            <span class="invalid-feedback text-right"
                                                                style="display: block;">
                                                                <strong>{{ $errors->first('adr_commune_id') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><br>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label">
                                                    <span class="required">Địa chỉ cụ thể:</span> <br>
                                                    <small><i>(Số nhà, ngõ, đường)</i></small>
                                                </label>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="address"
                                                            value="{{ old('address') }}">
                                                        @if ($errors->has('address'))
                                                            <span class="invalid-feedback text-right"
                                                                style="display: block;">
                                                                <strong>{{ $errors->first('address') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label">
                                                    <span class="required">Background</span> <br>
                                                </label>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <input type="file" class="form-control" id="imgload"
                                                            name="background_img" style="opacity: 1; position: static;"><br>

                                                        @if ($errors->has('background_img'))
                                                            <span class="invalid-feedback text-right"
                                                                style="display: block;">
                                                                <strong>{{ $errors->first('background_img') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <label class="col-md-3 col-form-label">
                                                    <span class="required">Thumbnail</span> <br>
                                                </label>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <input type="file" class="form-control" id="imgload"
                                                            name="thumbnail_img" style="opacity: 1; position: static;"><br>

                                                        @if ($errors->has('thumbnail_img'))
                                                            <span class="invalid-feedback text-right"
                                                                style="display: block;">
                                                                <strong>{{ $errors->first('thumbnail_img') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><br>

                                </div>
                            </div>
                        </div>
                        <!-- end content-->
                    </div>
                    <!--  end card  -->

                    <div class="card">
                        <div class="card-header card-header-text">
                            <!-- <div class="card-text"> -->
                            <p class="card-title text-rose">THÔNG TIN CHUNG</p>
                            <!-- </div> -->
                        </div>
                        <div class="dropdown-divider"></div>

                        <div class="card-body">
                            <center><small> <i class="text-info">Bạn nên điền đầy đủ thông tin vào các mục dưới đây để tin
                                        đăng có hiệu quả hơn</i> </small></center>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-md-4 col-form-label">Chủ đầu tư</label>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="investor"
                                                            value="{{ old('investor') }}">
                                                        @if ($errors->has('witdh'))
                                                            <span class="invalid-feedback text-right"
                                                                style="display: block;">
                                                                <strong>{{ $errors->first('investor') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-md-4 col-form-label">Đơn vị phát triển</label>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="dev_unit"
                                                            value="{{ old('dev_unit') }}">
                                                        @if ($errors->has('dev_unit'))
                                                            <span class="invalid-feedback text-right"
                                                                style="display: block;">
                                                                <strong>{{ $errors->first('dev_unit') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><br>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-md-4 col-form-label">Tổng diện tích</label>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="acreage"
                                                            value="{{ old('acreage') }}">
                                                        @if ($errors->has('acreage'))
                                                            <span class="invalid-feedback text-right"
                                                                style="display: block;">
                                                                <strong>{{ $errors->first('acreage') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-md-4 col-form-label">Mật độ xây dựng</label>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="density"
                                                            value="{{ old('density') }}">
                                                        @if ($errors->has('density'))
                                                            <span class="invalid-feedback text-right"
                                                                style="display: block;">
                                                                <strong>{{ $errors->first('density') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><br>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-md-4 col-form-label">Quy mô dự án</label>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="scale"
                                                            value="{{ old('scale') }}">
                                                        @if ($errors->has('scale'))
                                                            <span class="invalid-feedback text-right"
                                                                style="display: block;">
                                                                <strong>{{ $errors->first('scale') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-md-4 col-form-label">Loại hình đầu tư</label>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="invest_type"
                                                            value="{{ old('invest_type') }}">
                                                        @if ($errors->has('invest_type'))
                                                            <span class="invalid-feedback text-right"
                                                                style="display: block;">
                                                                <strong>{{ $errors->first('invest_type') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><br>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-md-4 col-form-label">Khởi công xây dựng</label>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="start_build"
                                                            value="{{ old('start_build') }}">
                                                        @if ($errors->has('scale'))
                                                            <span class="invalid-feedback text-right"
                                                                style="display: block;">
                                                                <strong>{{ $errors->first('start_build') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-md-4 col-form-label">Dự tính bàn giao</label>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="end_build"
                                                            value="{{ old('end_build') }}">
                                                        @if ($errors->has('end_build'))
                                                            <span class="invalid-feedback text-right"
                                                                style="display: block;">
                                                                <strong>{{ $errors->first('end_build') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><br>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-md-4 col-form-label">Pháp lý</label>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="juridical"
                                                            value="{{ old('juridical') }}">
                                                        @if ($errors->has('juridical'))
                                                            <span class="invalid-feedback text-right"
                                                                style="display: block;">
                                                                <strong>{{ $errors->first('juridical') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-md-4 col-form-label">Hình thức sở hữu</label>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="owned_type"
                                                            value="{{ old('owned_type') }}">
                                                        @if ($errors->has('owned_type'))
                                                            <span class="invalid-feedback text-right"
                                                                style="display: block;">
                                                                <strong>{{ $errors->first('owned_type') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label class="col-md-4 col-form-label">Đơn vị tư vấn bán hàng</label>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="advisory"
                                                            value="{{ old('advisory') }}">
                                                        @if ($errors->has('advisory'))
                                                            <span class="invalid-feedback text-right"
                                                                style="display: block;">
                                                                <strong>{{ $errors->first('advisory') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><br>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <label class="col-md-2 col-form-label">Tiện ích</label>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <textarea type="text" class="form-control" name="utilities"
                                                            rows="10">{{ old('utilities') }}</textarea>
                                                        @if ($errors->has('utilities'))
                                                            <span class="invalid-feedback text-right"
                                                                style="display: block;">
                                                                <strong>{{ $errors->first('utilities') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><br>
                                </div>
                            </div>
                        </div>
                        <!-- end content -->
                    </div>
                    <!--  end card  -->

                    <div class="card">
                        <div class="card-header card-header-text">
                            <!-- <div class="card-text"> -->
                            <p class="card-title text-rose">GIỚI THIỆU CHUNG</p>
                            <!-- </div> -->
                        </div>
                        <div class="dropdown-divider"></div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea type="text" class="form-control ckeditor" name="description"
                                                    rows="10">{{ old('description') }}</textarea>
                                                <small><i>Tối đa chỉ 3000 từ</i></small>
                                                @if ($errors->has('description'))
                                                    <span class="invalid-feedback text-right" style="display: block;">
                                                        <strong>{{ $errors->first('description') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <label class="col-md-2 col-form-label ">Ảnh nền cho phần giới thiệu
                                                chung</label>
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <input type="file" class="form-control" id="imgload" name="image_des"
                                                        style="opacity: 1; position: static;"><br>

                                                    @if ($errors->has('image_des'))
                                                        <span class="invalid-feedback text-right" style="display: block;">
                                                            <strong>{{ $errors->first('image_des') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <small><span class="fa fa-caret-right text-success"></span> Giới thiệu chung về bất động
                                        sản của bạn. Ví dụ: Khu nhà có vị trí thuận lợi: Gần công viên, gần trường học ...
                                        Tổng diện tích 52m2, đường đi ô tô vào tận cửa.</small><br>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="card">
                        <div class="card-header card-header-text">
                            <!-- <div class="card-text"> -->
                            <p class="card-title text-rose">GIỚI THIỆU QUY MÔ DỰ ÁN</p>
                            <!-- </div> -->
                        </div>
                        <div class="dropdown-divider"></div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea type="text" class="form-control ckeditor" name="description_scale"
                                                    rows="10">{{ old('description') }}</textarea>
                                                <small><i>Tối đa chỉ 3000 từ</i></small>
                                                @if ($errors->has('description_scale'))
                                                    <span class="invalid-feedback text-right" style="display: block;">
                                                        <strong>{{ $errors->first('description_scale') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <label class="col-md-2 col-form-label ">Ảnh quy mô dự án</label>
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <input type="file" class="form-control" id="imgload" name="image_scale"
                                                        style="opacity: 1; position: static;"><br>

                                                    @if ($errors->has('image_scale'))
                                                        <span class="invalid-feedback text-right" style="display: block;">
                                                            <strong>{{ $errors->first('image_scale') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <small><span class="fa fa-caret-right text-success"></span>Giới thiệu một số thông tin
                                        về quy mô của dự án.</small><br>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="card">
                        <div class="card-header card-header-text">
                            <!-- <div class="card-text"> -->
                            <p class="card-title text-rose">GIỚI THIỆU VỊ TRÍ DỰ ÁN</p>
                            <!-- </div> -->
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea type="text" class="form-control ckeditor"
                                                    name="description_locate"
                                                    rows="10">{{ old('description_locate') }}</textarea>
                                                <small><i>Tối đa chỉ 3000 từ</i></small>
                                                @if ($errors->has('description_locate'))
                                                    <span class="invalid-feedback text-right" style="display: block;">
                                                        <strong>{{ $errors->first('description_locate') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <label class="col-md-2 col-form-label ">Ảnh vị trí của dự án</label>
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <input type="file" class="form-control" id="imgload" name="image_locate"
                                                        style="opacity: 1; position: static;"><br>

                                                    @if ($errors->has('image_locate'))
                                                        <span class="invalid-feedback text-right" style="display: block;">
                                                            <strong>{{ $errors->first('image_locate') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <small><span class="fa fa-caret-right text-success"></span>Giới thiệu một số thông tin
                                        về vị trí của dự án.</small><br>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="card">
                        <div class="card-header card-header-text">
                            <!-- <div class="card-text"> -->
                            <p class="card-title text-rose">GIỚI THIỆU CHỦ ĐẦU TƯ</p>
                            <!-- </div> -->
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea type="text" class="form-control ckeditor"
                                                    name="description_investor"
                                                    rows="10">{{ old('description_investor') }}</textarea>
                                                <small><i>Tối đa chỉ 3000 từ</i></small>
                                                @if ($errors->has('description_investor'))
                                                    <span class="invalid-feedback text-right" style="display: block;">
                                                        <strong>{{ $errors->first('description_investor') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <label class="col-md-2 col-form-label ">Ảnh chủ đầu tư</label>
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <input type="file" class="form-control" id="imgload"
                                                        name="image_investor" style="opacity: 1; position: static;"><br>

                                                    @if ($errors->has('image_investor'))
                                                        <span class="invalid-feedback text-right" style="display: block;">
                                                            <strong>{{ $errors->first('image_investor') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <small><span class="fa fa-caret-right text-success"></span>Giới thiệu một số thông tin
                                        chủ đầu tư.</small><br>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="card">
                        <div class="card-header card-header-text">
                            <!-- <div class="card-text"> -->
                            <p class="card-title text-rose">GIỚI THIỆU TIỆN ÍCH</p>
                            <!-- </div> -->
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea type="text" class="form-control ckeditor"
                                                    name="description_utilities"
                                                    rows="10">{{ old('description_utilities') }}</textarea>
                                                <small><i>Tối đa chỉ 3000 từ</i></small>
                                                @if ($errors->has('description_utilities'))
                                                    <span class="invalid-feedback text-right" style="display: block;">
                                                        <strong>{{ $errors->first('description_utilities') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <label class="col-md-2 col-form-label ">Ảnh tiện ích</label>
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <input type="file" class="form-control" id="imgload"
                                                        name="image_utilities" style="opacity: 1; position: static;"><br>

                                                    @if ($errors->has('image_utilities'))
                                                        <span class="invalid-feedback text-right" style="display: block;">
                                                            <strong>{{ $errors->first('image_utilities') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <small><span class="fa fa-caret-right text-success"></span>Giới thiệu một số thông tin
                                        tiện ích.</small><br>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="card">
                        <div class="card-header card-header-text">
                            <!-- <div class="card-text"> -->
                            <p class="card-title text-rose">GIỚI THIỆU THÊM</p>
                            <!-- </div> -->
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="card-body">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                        aria-selected="true">Thông tin 1</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile" type="button" role="tab"
                                        aria-controls="pills-profile" aria-selected="false">Thông tin 2</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-contact" type="button" role="tab"
                                        aria-controls="pills-contact" aria-selected="false">Thông tin 3</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <textarea type="text" class="form-control ckeditor"
                                                            name="description_more"
                                                            rows="10">{{ old('description_more') }}</textarea>
                                                        <small><i>Tối đa chỉ 3000 từ</i></small>
                                                        @if ($errors->has('description_more'))
                                                            <span class="invalid-feedback text-right"
                                                                style="display: block;">
                                                                <strong>{{ $errors->first('description_more') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <label class="col-md-2 col-form-label ">Ảnh giới thiệu</label>
                                                    <div class="col-md-10">
                                                        <div class="form-group">
                                                            <input type="file" class="form-control" id="imgload"
                                                                name="image_more" style="opacity: 1; position: static;"><br>

                                                            @if ($errors->has('image_more'))
                                                                <span class="invalid-feedback text-right"
                                                                    style="display: block;">
                                                                    <strong>{{ $errors->first('image_more') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <small><span class="fa fa-caret-right text-success"></span>Giới thiệu một số
                                                thông tin
                                                thêm.</small><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                    aria-labelledby="pills-profile-tab">
                                    <div class="row" id="form2">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <textarea type="text" class="form-control ckeditor" id="value"
                                                            name="description_more_2" rows="10"></textarea>
                                                        <small><i>Tối đa chỉ 3000 từ</i></small>
                                                        @if ($errors->has('description_more_2'))
                                                            <span class="invalid-feedback text-right"
                                                                style="display: block;">
                                                                <strong>{{ $errors->first('description_more_2') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <label class="col-md-2 col-form-label">Ảnh giới thiệu</label>
                                                    <div class="col-md-10">
                                                        <div class="form-group">
                                                            <input type="file" class="form-control" id="imgload"
                                                                name="image_more_2"
                                                                style="opacity: 1; position: static;"><br>

                                                            @if ($errors->has('image_more_2'))
                                                                <span class="invalid-feedback text-right"
                                                                    style="display: block;">
                                                                    <strong>{{ $errors->first('image_more_2') }}
                                                                    </strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <small><span class="fa fa-caret-right text-success"></span>Giới thiệu một số
                                                thông tin
                                                thêm.</small><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                    aria-labelledby="pills-contact-tab">
                                    <div class="row" id="form3">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <textarea type="text" class="form-control ckeditor"
                                                            name="description_more_3"
                                                            rows="10">{{ old('description_more_3') }}</textarea>
                                                        <small><i>Tối đa chỉ 3000 từ</i></small>
                                                        @if ($errors->has('description_more_3'))
                                                            <span class="invalid-feedback text-right"
                                                                style="display: block;">
                                                                <strong>{{ $errors->first('description_more_3') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <label class="col-md-2 col-form-label">Ảnh giới thiệu</label>
                                                    <div class="col-md-10">
                                                        <div class="form-group">
                                                            <input type="file" class="form-control" id="imgload"
                                                                name="image_more_3"
                                                                style="opacity: 1; position: static;"><br>

                                                            @if ($errors->has('image_more_3'))
                                                                <span class="invalid-feedback text-right"
                                                                    style="display: block;">
                                                                    <strong>{{ $errors->first('image_more_3') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <small><span class="fa fa-caret-right text-success"></span>Giới thiệu một số
                                                thông tin
                                                thêm.</small><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="card">
                        <div class="card-header card-header-text">
                            <!-- <div class="card-text"> -->
                            <p class="card-title text-rose">GIỚI THIỆU MẶT BẰNG</p>
                            <!-- </div> -->
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea type="text" class="form-control ckeditor" name="ground"
                                                    rows="10">{{ old('ground') }}</textarea>
                                                <small><i>Tối đa chỉ 3000 từ</i></small>
                                                @if ($errors->has('ground'))
                                                    <span class="invalid-feedback text-right" style="display: block;">
                                                        <strong>{{ $errors->first('ground') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <label class="col-md-2 col-form-label ">Ảnh mặt bằng</label>
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <input type="file" class="form-control" id="imgload" name="image_ground"
                                                        style="opacity: 1; position: static;"><br>

                                                    @if ($errors->has('image_ground'))
                                                        <span class="invalid-feedback text-right" style="display: block;">
                                                            <strong>{{ $errors->first('image_ground') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <small><span class="fa fa-caret-right text-success"></span>Giới thiệu một số thông tin
                                        tiện ích.</small><br>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="card">
                        <div class="card-header card-header-text">
                            <!-- <div class="card-text"> -->
                            <p class="card-title text-rose">GIỚI THIỆU THIẾT KẾ</p>
                            <!-- </div> -->
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea type="text" class="form-control ckeditor" name="design"
                                                    rows="10">{{ old('design') }}</textarea>
                                                <small><i>Tối đa chỉ 3000 từ</i></small>
                                                @if ($errors->has('design'))
                                                    <span class="invalid-feedback text-right" style="display: block;">
                                                        <strong>{{ $errors->first('design') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <label class="col-md-2 col-form-label ">Ảnh thiết kế</label>
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <input type="file" class="form-control" id="imgload" name="image_design"
                                                        style="opacity: 1; position: static;"><br>

                                                    @if ($errors->has('image_design'))
                                                        <span class="invalid-feedback text-right" style="display: block;">
                                                            <strong>{{ $errors->first('image_design') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <small><span class="fa fa-caret-right text-success"></span>Giới thiệu một số thông tin
                                        thiết kế.</small><br>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="card">
                        <div class="card-header card-header-text">
                            <!-- <div class="card-text"> -->
                            <p class="card-title text-rose">GIỚI THIỆU NHÀ MẪU </p>
                            <!-- </div> -->
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea type="text" class="form-control ckeditor" name="model_house"
                                                    rows="10">{{ old('model_house') }}</textarea>
                                                <small><i>Tối đa chỉ 3000 từ</i></small>
                                                @if ($errors->has('model_house'))
                                                    <span class="invalid-feedback text-right" style="display: block;">
                                                        <strong>{{ $errors->first('model_house') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <label class="col-md-2 col-form-label ">Ảnh nhà mẫu</label>
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <input type="file" class="form-control" id="imgload" name="image_house"
                                                        style="opacity: 1; position: static;"><br>

                                                    @if ($errors->has('image_house'))
                                                        <span class="invalid-feedback text-right" style="display: block;">
                                                            <strong>{{ $errors->first('image_house') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <small><span class="fa fa-caret-right text-success"></span>Giới thiệu một số thông tin
                                        nhà mẫu.</small><br>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="card">
                        <div class="card-header card-header-text">
                            <!-- <div class="card-text"> -->
                            <p class="card-title text-rose">GIỚI THIỆU NỘI THẤT</p>
                            <!-- </div> -->
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea type="text" class="form-control ckeditor" name="furniture"
                                                    rows="10">{{ old('furniture') }}</textarea>
                                                <small><i>Tối đa chỉ 3000 từ</i></small>
                                                @if ($errors->has('furniture'))
                                                    <span class="invalid-feedback text-right" style="display: block;">
                                                        <strong>{{ $errors->first('furniture') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <label class="col-md-2 col-form-label ">Ảnh nội thất</label>
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <input type="file" class="form-control" id="imgload"
                                                        name="image_furniture" style="opacity: 1; position: static;"><br>

                                                    @if ($errors->has('image_furniture'))
                                                        <span class="invalid-feedback text-right" style="display: block;">
                                                            <strong>{{ $errors->first('image_furniture') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <small><span class="fa fa-caret-right text-success"></span>Giới thiệu một số thông tin
                                        nội thất.</small><br>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="card">
                        <div class="card-header card-header-text">
                            <!-- <div class="card-text"> -->
                            <p class="card-title text-rose">GIỚI THIỆU THANH TOÁN</p>
                            <!-- </div> -->
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea type="text" class="form-control ckeditor" name="payment"
                                                    rows="10">{{ old('payment') }}</textarea>
                                                <small><i>Tối đa chỉ 3000 từ</i></small>
                                                @if ($errors->has('payment'))
                                                    <span class="invalid-feedback text-right" style="display: block;">
                                                        <strong>{{ $errors->first('payment') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <label class="col-md-2 col-form-label ">Ảnh thanh toán</label>
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <input type="file" class="form-control" id="imgload"
                                                        name="image_payment" style="opacity: 1; position: static;"><br>

                                                    @if ($errors->has('image_payment'))
                                                        <span class="invalid-feedback text-right" style="display: block;">
                                                            <strong>{{ $errors->first('image_payment') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <small><span class="fa fa-caret-right text-success"></span>Giới thiệu một số thông tin
                                        thanh toán.</small><br>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="card">
                        <div class="card-header card-header-text">
                            <!-- <div class="card-text"> -->
                            <p class="card-title text-rose">CÂU HỎI THƯỜNG GẶP</p>
                            <!-- </div> -->
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-home-1" type="button" role="tab"
                                                aria-controls="pills-home" aria-selected="true">Câu hỏi số 1</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-profile-2" type="button" role="tab"
                                                aria-controls="pills-profile" aria-selected="false">Câu hỏi số 2</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-contact-3" type="button" role="tab"
                                                aria-controls="pills-contact" aria-selected="false">CÂu hỏi số 3</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-contact-4" type="button" role="tab"
                                                aria-controls="pills-contact" aria-selected="false">CÂu hỏi số 4</button>
                                        </li>

                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home-1" role="tabpanel"
                                            aria-labelledby="pills-home-tab">
                                            <div class="row">
                                                <label class="col-md-2 col-form-label">Câu hỏi</label>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="quest_1"
                                                            value="{{ old('quest_1') }}">
                                                        @if ($errors->has('witdh'))
                                                            <span class="invalid-feedback text-right"
                                                                style="display: block;">
                                                                <strong>{{ $errors->first('quest_1') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-md-2 col-form-label">Trả lời</label>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <textarea type="text" class="form-control" name="answer_1"
                                                            rows="5">{{ old('answer_1') }}</textarea>
                                                        @if ($errors->has('answer_1'))
                                                            <span class="invalid-feedback text-right"
                                                                style="display: block;">
                                                                <strong>{{ $errors->first('answer_1') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-profile-2" role="tabpanel"
                                            aria-labelledby="pills-profile-tab">
                                            <div class="row">
                                                <label class="col-md-2 col-form-label">Câu hỏi</label>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="quest_2"
                                                            value="{{ old('quest_2') }}">
                                                        @if ($errors->has('witdh'))
                                                            <span class="invalid-feedback text-right"
                                                                style="display: block;">
                                                                <strong>{{ $errors->first('quest_2') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-md-2 col-form-label">Trả lời</label>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <textarea type="text" class="form-control" name="answer_2"
                                                            rows="5">{{ old('answer_2') }}</textarea>
                                                        @if ($errors->has('answer_2'))
                                                            <span class="invalid-feedback text-right"
                                                                style="display: block;">
                                                                <strong>{{ $errors->first('answer_2') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-contact-3" role="tabpanel"
                                            aria-labelledby="pills-contact-tab">
                                            <div class="row">
                                                <label class="col-md-2 col-form-label">Câu hỏi</label>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="quest_3"
                                                            value="{{ old('quest_3') }}">
                                                        @if ($errors->has('witdh'))
                                                            <span class="invalid-feedback text-right"
                                                                style="display: block;">
                                                                <strong>{{ $errors->first('quest_3') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-md-2 col-form-label">Trả lời</label>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <textarea type="text" class="form-control" name="answer_3"
                                                            rows="5">{{ old('answer_3') }}</textarea>
                                                        @if ($errors->has('answer_3'))
                                                            <span class="invalid-feedback text-right"
                                                                style="display: block;">
                                                                <strong>{{ $errors->first('answer_3') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-contact-4" role="tabpanel"
                                            aria-labelledby="pills-contact-tab">
                                            <div class="row">
                                                <label class="col-md-2 col-form-label">Câu hỏi</label>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="quest_4"
                                                            value="{{ old('quest_4') }}">
                                                        @if ($errors->has('witdh'))
                                                            <span class="invalid-feedback text-right"
                                                                style="display: block;">
                                                                <strong>{{ $errors->first('quest_4') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-md-2 col-form-label">Trả lời</label>
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <textarea type="text" class="form-control" name="answer_4"
                                                            rows="5">{{ old('answer_4') }}</textarea>
                                                        @if ($errors->has('answer_4'))
                                                            <span class="invalid-feedback text-right"
                                                                style="display: block;">
                                                                <strong>{{ $errors->first('answer_4') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <small><span class="fa fa-caret-right text-success"></span>Một số câu hỏi thường
                                        gặp.</small><br>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>

                </div>

                <div class="col-md-2">
                    <div class="card" style="position:sticky; top:15px;">
                        <div class="card-header card-header-rose card-header-text">
                            <!-- <div class="card-text"> -->
                            <p class="card-title">Action</p>
                            <!-- </div> -->
                        </div>
                        <div class="dropdown-divider"></div>

                        <div class="card-body">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-success" style="padding: 10px 25px"><i
                                        class="material-icons">check</i> Lưu</button>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
                <!-- </div> -->
            </div>
            <!-- end row -->
        </form>
    </div>
@endsection

@section('script')
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
                    $.each(data, function(key, value) {
                        $("select[name='adr_commune_id']").append(
                            "<option value='" + value.commune_id + "'>" + value.level +
                            " " + value.name_local + "</option>"
                        );
                    });
                }
            });
        });
    </script>
@endsection
