@extends('admins.layouts.index')

@section('head_title')
  {{ 'Sửa giới thiệu' }}
@endsection

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Bảng điều khiển</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.about.index') }}">Giới thiệu</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sửa</li>
          </ol>
        </nav>
      </div>
    </div>

    
    <form action="{{ route('admin.about.update',['id' => $about['id']]) }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <!-- <div class="col-md-12"> -->
          <div class="col-md-9 pdr-0">
            <div class="card">
              <div class="card-header card-header-rose card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">add</i>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <h4 class="card-title">Sửa giới thiệu</h4>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="row">
                          <label class="col-md-2 label-on-left required">Giới thiệu</label>
                          <div class="col-md-10">
                            <div class="form-group">
                              <textarea type="text" class="form-control ckeditor" name="about_us" rows="5">{{ $about['about_us'] }}</textarea>
                              @if ($errors->has('about_us'))
                                <span class="invalid-feedback text-right" style="display: block;">
                                  <strong>{{ $errors->first('about_us') }}</strong>
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
                          <label class="col-md-2 label-on-left required">Hướng dẫn</label>
                          <div class="col-md-10">
                            <div class="form-group">
                              <textarea type="text" class="form-control ckeditor" name="guide" rows="5">{{ $about['guide'] }}</textarea>
                              @if ($errors->has('guide'))
                                <span class="invalid-feedback text-right" style="display: block;">
                                  <strong>{{ $errors->first('guide') }}</strong>
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
                          <label class="col-md-2 label-on-left required">Tên công ty</label>
                          <div class="col-md-10">
                            <div class="form-group">
                              <input type="text" class="form-control" name="company" value="{{ $about['company'] }}">
                              @if ($errors->has('company'))
                                <span class="invalid-feedback text-right" style="display: block;">
                                  <strong>{{ $errors->first('company') }}</strong>
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
                          <label class="col-md-2 label-on-left required">Địa chỉ</label>
                          <div class="col-md-10">
                            <div class="form-group">
                              <input type="text" class="form-control" name="adress" value="{{ $about['adress'] }}">
                              @if ($errors->has('adress'))
                                <span class="invalid-feedback text-right" style="display: block;">
                                  <strong>{{ $errors->first('adress') }}</strong>
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
                          <label class="col-md-2 label-on-left required">Email</label>
                          <div class="col-md-10">
                            <div class="form-group">
                              <input type="text" class="form-control" name="email" value="{{ $about['email'] }}">
                              @if ($errors->has('email'))
                                <span class="invalid-feedback text-right" style="display: block;">
                                  <strong>{{ $errors->first('email') }}</strong>
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
                          <label class="col-md-2 label-on-left required">Số điện thoại hỗ trợ</label>
                          <div class="col-md-10">
                            <div class="form-group">
                              <input type="text" class="form-control" name="phone_support" value="{{ $about['phone_support'] }}">
                              @if ($errors->has('phone_support'))
                                <span class="invalid-feedback text-right" style="display: block;">
                                  <strong>{{ $errors->first('phone_support') }}</strong>
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
                          <label class="col-md-2 label-on-left required">Số điện thoại khiếu nại</label>
                          <div class="col-md-10">
                            <div class="form-group">
                              <input type="text" class="form-control" name="phone_complain" value="{{ $about['phone_complain'] }}">
                              @if ($errors->has('phone_complain'))
                                <span class="invalid-feedback text-right" style="display: block;">
                                  <strong>{{ $errors->first('phone_complain') }}</strong>
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
                          <label class="col-md-2 label-on-left">Zalo</label>
                          <div class="col-md-10">
                            <div class="form-group">
                              <input type="text" class="form-control" name="zalo" value="{{ $about['zalo'] }}">
                              @if ($errors->has('zalo'))
                                <span class="invalid-feedback text-right" style="display: block;">
                                  <strong>{{ $errors->first('zalo') }}</strong>
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
                          <label class="col-md-2 label-on-left">Facebook page</label>
                          <div class="col-md-10">
                            <div class="form-group">
                              <input type="text" class="form-control" name="facebook" value="{{ $about['facebook'] }}">
                              @if ($errors->has('facebook'))
                                <span class="invalid-feedback text-right" style="display: block;">
                                  <strong>{{ $errors->first('facebook') }}</strong>
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

          <div class="col-md-3">
            <div class="card" style="position:sticky; top:15px;">
              <div class="card-header card-header-rose card-header-text">
                <!-- <div class="card-text"> -->
                  <p class="card-title">Action</p>
                <!-- </div> -->
              </div>
              <div class="dropdown-divider"></div>
              
              <div class="card-body">
                <div class="col-md-12 text-center">
                  <button type="submit" class="btn btn-success" style="padding: 10px 25px"><i class="material-icons">check</i> Lưu</button>
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
<script>
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
@endsection