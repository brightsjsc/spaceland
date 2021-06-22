@extends('admins.layouts.index')

@section('head_title')
  {{ 'Thêm sản phẩm' }}
@endsection

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Bảng điều khiển</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.product.index') }}">Sản phẩm</a></li>
            <li class="breadcrumb-item active" aria-current="page">Thêm sản phẩm</li>
          </ol>
        </nav>
      </div>
    </div>


    <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-text">
              <!-- <div class="card-text"> -->
                <p class="card-title text-rose">THÔNG TIN CƠ BẢN</p>
              <!-- </div> -->
            </div>
            <div class="dropdown-divider"></div>

            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <label class="col-md-2 col-form-label required">Tiêu đề</label>
                        <div class="col-md-10">
                          <div class="form-group">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nhập tiêu đề">
                            @if ($errors->has('name'))
                              <span class="invalid-feedback text-right" style="display: block;">
                                <strong>{{ $errors->first('name') }}</strong>
                              </span>
                            @endif
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="row">
                        <label class="col-md-4 col-form-label required">Danh mục</label>
                        <div class="col-md-8">
                          <div class="form-group">
                            <select class="form-control" name="product_cate_id">
                              <option value=""> --- Chọn danh mục sản phẩm --- </option>
                              <?php
                                cate_parent($categories,0,'',0);
                                function cate_parent($data, $parent=0, $str='--', $select=0){
                                  foreach ($data as $value) {
                                    $id = $value['id'];
                                    $name = $value['name'];
                                    $parent_id = $value['parent_id'];

                                    if($parent_id == $parent) {
                                      if(($select != 0) && ($id == $select)) {
                                        echo "<option value='$id' selected>$str $name</option>";
                                      }else{
                                        echo "<option value='$id'>$str $name</option>";
                                      }
                                      cate_parent($data, $id, $str.'--',$select);
                                    }
                                  }
                                }
                              ?>
                            </select>
                            @if ($errors->has('product_cate_id'))
                              <span class="invalid-feedback text-right" style="display: block;">
                                <strong>{{ $errors->first('product_cate_id') }}</strong>
                              </span>
                            @endif
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="row">
                        <label class="col-md-4 col-form-label required">Tỉnh/Thành phố</label>
                        <div class="col-md-8">
                          <div class="form-group">
                            <select class="form-control" name="adr_city_id">
                              <option value="0"> --- Chọn Tỉnh/Thành phố --- </option>
                              @foreach ($cities as $city)
                                <option value="{{ $city->city_id }}"> {{ $city->level." ".$city->name_local }} </option>
                              @endforeach
                            </select>
                            @if ($errors->has('adr_city_id'))
                              <span class="invalid-feedback text-right" style="display: block;">
                                <strong>{{ $errors->first('adr_city_id') }}</strong>
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
                        <label class="col-md-4 col-form-label required">Quận/Huyện</label>
                        <div class="col-md-8">
                          <div class="form-group">
                            <select class="form-control" name="adr_district_id">
                              <option value=""> --- Chọn Quận / Huyện / Thị xã --- </option>
                            </select>
                            @if ($errors->has('adr_district_id'))
                              <span class="invalid-feedback text-right" style="display: block;">
                                <strong>{{ $errors->first('adr_district_id') }}</strong>
                              </span>
                            @endif
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="row">
                        <label class="col-md-4 col-form-label required">Phường/Xã</label>
                        <div class="col-md-8">
                          <div class="form-group">
                            <select class="form-control" name="adr_commune_id">
                              <option value=""> --- Chọn Phường / Xã --- </option>

                            </select>
                            @if ($errors->has('adr_commune_id'))
                              <span class="invalid-feedback text-right" style="display: block;">
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
                        <label class="col-md-2 col-form-label">
                          <span class="required">Địa chỉ cụ thể:</span> <br>
                          <small><i>(Số nhà, ngõ, đường)</i></small>
                        </label>
                        <div class="col-md-10">
                          <div class="form-group">
                            <input type="text" class="form-control" name="address" value="{{ old('address') }}">
                            @if ($errors->has('address'))
                              <span class="invalid-feedback text-right" style="display: block;">
                                <strong>{{ $errors->first('address') }}</strong>
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
                        <label class="col-md-4 col-form-label required">Dự án</label>
                        <div class="col-md-8">
                          <div class="form-group">
                            <select class="form-control" name="project_id[]" multiple="multiple" id="project">
                              <option value=""> --- Chọn dự án --- </option>
                            </select>
                            @if ($errors->has('project_id'))
                              <span class="invalid-feedback text-right" style="display: block;">
                                <strong>{{ $errors->first('project_id') }}</strong>
                              </span>
                            @endif
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="row">
                        <label class="col-md-4 col-form-label required">Diện tích <small>(Đơn vị: m2)</small></label>
                        <div class="col-md-8">
                          <div class="form-group">
                            <input type="text" class="form-control" name="acreage" value="{{ old('acreage') }}" placeholder="Nhập số">
                            @if ($errors->has('acreage'))
                              <span class="invalid-feedback text-right" style="display: block;">
                                <strong>{{ $errors->first('acreage') }}</strong>
                              </span>
                            @endif
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="row">
                        <label class="col-md-4 col-form-label required">Giá</label>
                        <div class="col-md-8">
                          <div class="form-group">
                            <input type="text" class="form-control" name="price" id="price" value="{{ old('price') }}">
                            @if ($errors->has('price'))
                              <span class="invalid-feedback text-right" style="display: block;">
                                <strong>{{ $errors->first('price') }}</strong>
                              </span>
                            @endif
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="row">
                        <label class="col-md-4 col-form-label required">Đơn vị tính giá tiền</label>
                        <div class="col-md-8">
                          <div class="form-group">
                            <select class="form-control" name="price_type">
                              <option value="0"> --- Chọn đơn vị tính giá --- </option>
                              <option value="1"> /tháng </option>
                              <option value="2"> /m2 </option>
                            </select>
                            @if ($errors->has('price_type'))
                              <span class="invalid-feedback text-right" style="display: block;">
                                <strong>{{ $errors->first('price_type') }}</strong>
                              </span>
                            @endif
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end content -->
          </div>
          <!--  end card  -->

          <div class="card">
            <div class="card-header card-header-text">
              <!-- <div class="card-text"> -->
                <p class="card-title text-rose">THÔNG TIN MÔ TẢ</p>
              <!-- </div> -->
            </div>
            <div class="dropdown-divider"></div>

            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <textarea type="text" class="form-control ckeditor" name="description" rows="10">{{ old('description') }}</textarea>
                        <small><i>Tối đa chỉ 3000 từ</i></small>
                        @if ($errors->has('description'))
                          <span class="invalid-feedback text-right" style="display: block;">
                            <strong>{{ $errors->first('description') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <small><span class="fa fa-caret-right text-success"></span> Giới thiệu chung về bất động sản của bạn. Ví dụ: Khu nhà có vị trí thuận lợi: Gần công viên, gần trường học ... Tổng diện tích 52m2, đường đi ô tô vào tận cửa.</small><br>
                  <small> <i class="text-rose">Lưu ý: tin rao chỉ để mệnh giá tiền Việt Nam Đồng.</i> </small>
                </div>
              </div>
            </div>
            <br>
          </div>

          <div class="card">
            <div class="card-header card-header-text">
              <!-- <div class="card-text"> -->
                <p class="card-title text-rose">THÔNG TIN KHÁC</p>
              <!-- </div> -->
            </div>
            <div class="dropdown-divider"></div>

            <div class="card-body">
              <center><small> <i class="text-info">Bạn nên điền đầy đủ thông tin vào các mục dưới đây để tin đăng có hiệu quả hơn</i> </small></center>
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="row">
                        <label class="col-md-4 col-form-label">Mặt tiền</label>
                        <div class="col-md-8">
                          <div class="form-group">
                            <input type="text" class="form-control" name="witdh" value="{{ old('witdh') }}">
                            @if ($errors->has('witdh'))
                              <span class="invalid-feedback text-right" style="display: block;">
                                <strong>{{ $errors->first('witdh') }}</strong>
                              </span>
                            @endif
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="row">
                        <label class="col-md-4 col-form-label">Đường vào (m)</label>
                        <div class="col-md-8">
                          <div class="form-group">
                            <input type="text" class="form-control" name="land_witdh" value="{{ old('land_witdh') }}">
                            @if ($errors->has('land_witdh'))
                              <span class="invalid-feedback text-right" style="display: block;">
                                <strong>{{ $errors->first('land_witdh') }}</strong>
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
                        <label class="col-md-4 col-form-label">Hướng nhà</label>
                        <div class="col-md-8">
                          <div class="form-group">
                            <input type="text" class="form-control" name="home_direction" value="{{ old('home_direction') }}">
                            @if ($errors->has('home_direction'))
                              <span class="invalid-feedback text-right" style="display: block;">
                                <strong>{{ $errors->first('home_direction') }}</strong>
                              </span>
                            @endif
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="row">
                        <label class="col-md-4 col-form-label">Hướng ban công</label>
                        <div class="col-md-8">
                          <div class="form-group">
                            <input type="text" class="form-control" name="bacon_direction" value="{{ old('bacon_direction') }}">
                            @if ($errors->has('bacon_direction'))
                              <span class="invalid-feedback text-right" style="display: block;">
                                <strong>{{ $errors->first('bacon_direction') }}</strong>
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
                        <label class="col-md-4 col-form-label">Số tâng</label>
                        <div class="col-md-8">
                          <div class="form-group">
                            <input type="text" class="form-control" name="floor_number" value="{{ old('floor_number') }}">
                            @if ($errors->has('floor_number'))
                              <span class="invalid-feedback text-right" style="display: block;">
                                <strong>{{ $errors->first('floor_number') }}</strong>
                              </span>
                            @endif
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="row">
                        <label class="col-md-4 col-form-label">Số phòng ngủ</label>
                        <div class="col-md-8">
                          <div class="form-group">
                            <input type="text" class="form-control" name="room_number" value="{{ old('room_number') }}">
                            @if ($errors->has('room_number'))
                              <span class="invalid-feedback text-right" style="display: block;">
                                <strong>{{ $errors->first('room_number') }}</strong>
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
                        <label class="col-md-4 col-form-label">Số toilet</label>
                        <div class="col-md-8">
                          <div class="form-group">
                            <input type="text" class="form-control" name="toilet_number" value="{{ old('toilet_number') }}">
                            @if ($errors->has('toilet_number'))
                              <span class="invalid-feedback text-right" style="display: block;">
                                <strong>{{ $errors->first('toilet_number') }}</strong>
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
                        <label class="col-md-2 col-form-label">Nội thất</label>
                        <div class="col-md-10">
                          <div class="form-group">
                            <textarea type="text" class="form-control" name="furniture" rows="10">{{ old('furniture') }}</textarea>
                            @if ($errors->has('furniture'))
                              <span class="invalid-feedback text-right" style="display: block;">
                                <strong>{{ $errors->first('furniture') }}</strong>
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
                        <label class="col-md-2 col-form-label">Thông tin pháp lý</label>
                        <div class="col-md-10">
                          <div class="form-group">
                            <textarea type="text" class="form-control" name="legality" rows="5">{{ old('legality') }}</textarea>
                            @if ($errors->has('legality'))
                              <span class="invalid-feedback text-right" style="display: block;">
                                <strong>{{ $errors->first('legality') }}</strong>
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
                <p class="card-title text-rose">HÌNH ẢNH, VIDEO VÀ GOOGLE MAP</p>
              <!-- </div> -->
            </div>
            <div class="dropdown-divider"></div>

            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <label class="col-md-2 col-form-label required">Ảnh</label>
                    <div class="col-md-10">
                      <div class="form-group">
                        <input type="file" class="form-control" id="imgload" name="image" required style="opacity: 1; position: static;"><br>
                        <div class="gallery row"></div>

                        @if ($errors->has('image'))
                          <span class="invalid-feedback text-right" style="display: block;">
                            <strong>{{ $errors->first('image') }}</strong>
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
                    <label class="col-md-2 col-form-label required">Gallery</label>
                    <div class="col-md-10">
                      <div class="form-group">
                        <input type="file" class="form-control" id="gallery-load" name="gallery[]" multiple style="opacity: 1; position: static;"><br>
                        <div class="gallery-list row"></div>

                        @if ($errors->has('gallery'))
                          <span class="invalid-feedback text-right" style="display: block;">
                            <strong>{{ $errors->first('gallery') }}</strong>
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
                    <label class="col-md-2 col-form-label">Video</label>
                    <div class="col-md-10">
                      <div class="form-group">
                        <input type="text" class="form-control" name="video_url" value="{{ old('video_url') }}" placeholder="Nhập link video">
                        @if ($errors->has('video_url'))
                          <span class="invalid-feedback text-right" style="display: block;">
                            <strong>{{ $errors->first('video_url') }}</strong>
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
                    <label class="col-md-2 col-form-label">Vị trí Google Map</label>
                    <div class="col-md-10">
                      <div class="form-group">
                        <input type="text" class="form-control" name="map" value="{{ old('map') }}" placeholder="Nhập tọa độ trên Google Map">
                        @if ($errors->has('map'))
                          <span class="invalid-feedback text-right" style="display: block;">
                            <strong>{{ $errors->first('map') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
              </div><br>
            </div>
            <br>
          </div>

          <div class="card">
            <div class="card-header card-header-text">
              <!-- <div class="card-text"> -->
                <p class="card-title text-rose">THÔNG TIN LIÊN HỆ</p>
              <!-- </div> -->
            </div>
            <div class="dropdown-divider"></div>

            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <label class="col-md-2 col-form-label">Tên liên hệ</label>
                        <div class="col-md-10">
                          <div class="form-group">
                            <input type="text" class="form-control" name="contact_name" value="{{ old('contact_name') }}">
                            @if ($errors->has('contact_name'))
                              <span class="invalid-feedback text-right" style="display: block;">
                                <strong>{{ $errors->first('contact_name') }}</strong>
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
                        <label class="col-md-4 col-form-label">Điện thoại</label>
                        <div class="col-md-8">
                          <div class="form-group">
                            <input type="text" class="form-control" name="contact_phone" value="{{ old('contact_phone') }}">
                            @if ($errors->has('contact_phone'))
                              <span class="invalid-feedback text-right" style="display: block;">
                                <strong>{{ $errors->first('contact_phone') }}</strong>
                              </span>
                            @endif
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="row">
                        <label class="col-md-4 col-form-label required">Di động</label>
                        <div class="col-md-8">
                          <div class="form-group">
                            <input type="text" class="form-control" name="contact_mobile" value="{{ old('contact_mobile') }}">
                            @if ($errors->has('contact_mobile'))
                              <span class="invalid-feedback text-right" style="display: block;">
                                <strong>{{ $errors->first('contact_mobile') }}</strong>
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
                        <label class="col-md-4 col-form-label">Địa chỉ</label>
                        <div class="col-md-8">
                          <div class="form-group">
                            <input type="text" class="form-control" name="contact_address" value="{{ old('contact_address') }}">
                            @if ($errors->has('contact_address'))
                              <span class="invalid-feedback text-right" style="display: block;">
                                <strong>{{ $errors->first('contact_address') }}</strong>
                              </span>
                            @endif
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="row">
                        <label class="col-md-4 col-form-label">Email</label>
                        <div class="col-md-8">
                          <div class="form-group">
                            <input type="text" class="form-control" name="contact_email" value="{{ old('contact_email') }}">
                            @if ($errors->has('contact_email'))
                              <span class="invalid-feedback text-right" style="display: block;">
                                <strong>{{ $errors->first('contact_email') }}</strong>
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
        </div>

        <div class="col-md-12">
          <div class="card" style="margin-top: 0">
            <div class="card-header card-header-rose card-header-text">
              <!-- <div class="card-text"> -->
                <p class="card-title text-rose">HÀNH ĐỘNG</p>
              <!-- </div> -->
            </div>
            <div class="dropdown-divider"></div>

            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <label class="col-md-2 col-form-label">Tình trạng</label>
                    <div class="col-md-10">
                      <div class="form-group">
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                            <input class="form-check-input" name="status" type="radio" checked value="0"> Còn trống
                            <span class="circle">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                            <input class="form-check-input" name="status" type="radio" value="1"> Đã cho thuê
                            <span class="circle">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>

                        @if ($errors->has('status'))
                          <span class="invalid-feedback text-right" style="display: block;">
                            <strong>{{ $errors->first('status') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-md-2 col-form-label">Xuất bản?</label>
                    <div class="col-md-10">
                      <div class="form-group">
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                            <input class="form-check-input" name="publish" type="radio" checked value="0"> Xuất bản
                            <span class="circle">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                            <input class="form-check-input" name="publish" type="radio" value="1"> Chưa xuất bản
                            <span class="circle">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>

                        @if ($errors->has('publish'))
                          <span class="invalid-feedback text-right" style="display: block;">
                            <strong>{{ $errors->first('publish') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <br>

              <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-success" style="padding: 10px 25px"><i class="material-icons">check</i> Lưu</button>
              </div>
            </div>
            <br>
          </div>
        </div>
      </div>
      <!-- end row -->
    </form>
  </div>
@endsection

@section('script')
<script>
  (function ($) {
    $.fn.simpleMoneyFormat = function() {
      this.each(function(index, el) {
        var elType = null; // input or other
        var value = null;
        // get value
        if($(el).is('input') || $(el).is('textarea')){
          value = $(el).val().replace(/,/g, '');
          elType = 'input';
        } else {
          value = $(el).text().replace(/,/g, '');
          elType = 'other';
        }
        // if value changes
        $(el).on('paste keyup', function(){
          value = $(el).val().replace(/,/g, '');
          formatElement(el, elType, value); // format element
        });
        formatElement(el, elType, value); // format element
      });
      function formatElement(el, elType, value){
        var result = '';
        var valueArray = value.split('');
        var resultArray = [];
        var counter = 0;
        var temp = '';
        for (var i = valueArray.length - 1; i >= 0; i--) {
          temp += valueArray[i];
          counter++
          if(counter == 3){
            resultArray.push(temp);
            counter = 0;
            temp = '';
          }
        };
        if(counter > 0){
          resultArray.push(temp);
        }
        for (var i = resultArray.length - 1; i >= 0; i--) {
          var resTemp = resultArray[i].split('');
          for (var j = resTemp.length - 1; j >= 0; j--) {
            result += resTemp[j];
          };
          if(i > 0){
            result += ','
          }
        };
        if(elType == 'input'){
          $(el).val(result);
        } else {
          $(el).empty().text(result);
        }
      }
    };
  }(jQuery));

  $('#price').simpleMoneyFormat();

  $(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {
      if (input.files) {
        var filesAmount = input.files.length;
        for (i = 0; i < filesAmount; i++) {
          var reader = new FileReader();
          reader.onload = function(event) {
            $($.parseHTML('<img>')).attr('src', event.target.result).attr('class', 'image_pre').appendTo(placeToInsertImagePreview);
          }
          reader.readAsDataURL(input.files[i]);
        }
      }
    };

    $('#imgload').on('change', function() {
      $('.gallery').empty();
      imagesPreview(this, 'div.gallery');
    });
  });

  $(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {
      if (input.files) {
        var filesAmount = input.files.length;
        for (i = 0; i < filesAmount; i++) {
          var reader = new FileReader();
          reader.onload = function(event) {
            $($.parseHTML('<img>')).attr('src', event.target.result).attr('class', 'gallery_pre').appendTo(placeToInsertImagePreview);
          }
          reader.readAsDataURL(input.files[i]);
        }
      }
    };

    $('#gallery-load').on('change', function() {
      $('.gallery-list').empty();
      imagesPreview(this, 'div.gallery-list');
    });
  });
</script>

@if(session('result'))
  <!--  Plugin for Sweet Alert -->
  <script src="{{ asset('assets/js/plugins/sweetalert2.js') }}"></script>
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
    $("select[name='adr_city_id']").change(function(){
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
          $("select[name='adr_district_id']").append("<option value=''> - Quận/Huyện - </option>");
          $.each(data, function(key, value){
            $("select[name='adr_district_id']").append(
              "<option value='" + value.district_id + "'>" + value.level + " " + value.name_local + "</option>"
            );
          });
        }
      });
    });

    var url_get_communes = "{{ url('/admin/ajax/showCommuneOfDistrict') }}";
    $("select[name='adr_district_id']").change(function(){
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
          $("select[name='adr_commune_id']").append("<option value=''> - Phường/Xã - </option>");
          $.each(data, function(key, value){
            $("select[name='adr_commune_id']").append(
              "<option value='" + value.commune_id + "'>" + value.level + " " + value.name_local + "</option>"
            );
          });
        }
      });
    });

    var url_get_project_of_city = "{{ url('/admin/ajax/showProjectOfCity') }}";
    $("select[name='adr_city_id']").change(function(){
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
          $("select[name='project_id[]']").html('');
          $("select[name='project_id[]']").append("<option value=''> - Dự án - </option>");
          $.each(data, function(key, value){
            $("select[name='project_id[]']").append(
              "<option value='" + value.id + "'>" + value.name + "</option>"
            );
          });
        }
      });
    });
    $(document).ready(function() {
        $('#project').select2();
    });
    var url_get_project_of_district = "{{ url('/admin/ajax/showProjectOfDistrict') }}";
    $("select[name='adr_district_id']").change(function(){
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
            $("select[name='project_id[]']").html('');
            $("select[name='project_id[]']").append("<option value=''> - Dự án - </option>");
            $.each(data, function(key, value){
              $("select[name='project_id[]']").append(
                "<option value='" + value.id + "'>" + value.name + "</option>"
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
            $("select[name='project_id[]']").html('');
            $("select[name='project_id[]']").append("<option value=''> - Dự án - </option>");
            $.each(data, function(key, value){
              $("select[name='project_id[]']").append(
                "<option value='" + value.id + "'>" + value.name + "</option>"
              );
            });
          }
        });
      }
    });

    var url_get_project = "{{ url('/admin/ajax/showProjectOfCommune') }}";
    $("select[name='adr_commune_id']").change(function(){
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
            $("select[name='project_id[]']").html('');
            $("select[name='project_id[]']").append("<option value=''> - Dự án - </option>");
            $.each(data, function(key, value){
              $("select[name='project_id[]']").append(
                "<option value='" + value.id + "'>" + value.name + "</option>"
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
            $("select[name='project_id[]']").html('');
            $("select[name='project_id[]']").append("<option value=''> - Dự án - </option>");
            $.each(data, function(key, value){
              $("select[name='project_id[]']").append(
                "<option value='" + value.id + "'>" + value.name + "</option>"
              );
            });
          }
        });
      }
    });
</script>
@endsection
