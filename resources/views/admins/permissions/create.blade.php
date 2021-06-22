@extends('admins.layouts.index')

@section('head_title')
  {{ 'Danh sách người dùng' }}
@endsection

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Bảng điều khiển</a></li>
            <li class="breadcrumb-item">Quản trị hệ thống</li>
            <li class="breadcrumb-item"><a href="{{ route('admin.system.permission.index') }}">Quản lý quyền</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tạo quyền mới</li>
          </ol>
        </nav>
      </div>
    </div>

    <form action="{{ route('admin.system.permission.store') }}" method="POST">
      @csrf
      <div class="row">
        <div class="col-md-9">
          <div class="card">
              <div class="card-header card-header-rose card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">assignment</i>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <h4 class="card-title">Thông tin quyền mới</h4>
                  </div>
                </div>
              </div>

              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="row">
                          <label class="col-md-3 col-form-label required">Quyền</label>
                          <div class="col-md-9">
                            <div class="form-group">
                              <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                              @if ($errors->has('name'))
                                <span class="invalid-feedback text-right" style="display: block;">
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
                          <label class="col-md-3 col-form-label required">Mô tả</label>
                          <div class="col-md-9">
                            <div class="form-group">
                              <input type="text" class="form-control" name="description" value="{{ old('description') }}">
                              @if ($errors->has('description'))
                                <span class="invalid-feedback text-right" style="display: block;">
                                  <strong>{{ $errors->first('description') }}</strong>
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
                          <label class="col-md-3 col-form-label required">Controller</label>
                          <div class="col-md-9">
                            <div class="form-group">
                              <input type="text" class="form-control" name="controller" value="{{ old('controller') }}">
                              @if ($errors->has('controller'))
                                <span class="invalid-feedback text-right" style="display: block;">
                                  <strong>{{ $errors->first('controller') }}</strong>
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
          </div>
          <!--  end card  -->
        </div>

        <div class="col-md-3 pdl-0">
          <div class="card" style="position: sticky; top: 15px;">
            <div class="card-header card-header-rose card-header-text">
              <p class="card-title">Action</p>
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
      <!-- end row -->
    </form>
  </div>
@endsection

@section('script')
  <!--  Plugin for Sweet Alert -->
  <script src="{{ asset('assets/js/plugins/sweetalert2.js') }}"></script>
  
  @if(session('result'))
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