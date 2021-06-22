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
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="material-icons">home</i> Bảng điều khiển</a></li>
            <li class="breadcrumb-item">Quản trị hệ thống</li>
            <li class="breadcrumb-item"><a href="{{ route('admin.system.user.index') }}">Quản lý người dùng hệ thống</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sửa thông tin người dùng #{{ $user->id }}</li>
          </ol>
        </nav>
      </div>
    </div>
    
    <form action="{{ route('admin.system.user.update',['id' => $user->id]) }}" method="POST">
      @csrf

      <div class="row">
        <div class="col-md-9 pdr-0">
          <div class="card">
            <div class="card-header card-header-rose card-header-icon">
              <div class="card-icon">
                <i class="material-icons">person</i>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h4 class="card-title">Thông tin người dùng</h4>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <label class="col-md-3 col-form-label required">Tên người dùng</label>
                        <div class="col-md-9">
                          <div class="form-group">
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}">
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
                    <div class="col-md-12">
                      <div class="row">
                        <label class="col-md-3 col-form-label required">Email đăng nhập</label>
                        <div class="col-md-9">
                          <div class="form-group">
                            <input type="text" class="form-control" name="email" value="{{ $user->email }}">
                            @if ($errors->has('email'))
                              <span class="invalid-feedback text-right" style="display: block;">
                                <strong>{{ $errors->first('email') }}</strong>
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
                        <label class="col-md-3 col-form-label">New Password</label>
                        <div class="col-md-9">
                          <div class="form-group">
                            <input type="password" class="form-control" name="password">
                            @if ($errors->has('password'))
                              <span class="invalid-feedback text-right" style="display: block;">
                                <strong>{{ $errors->first('password') }}</strong>
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
                        <label class="col-md-3 col-form-label">Re-type New Password</label>
                        <div class="col-md-9">
                          <div class="form-group">
                            <input type="password" class="form-control" name="password_confirmation">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <!-- end content-->
          </div>
          <!--  end card  -->

          <div class="card">
            <div class="card-header card-header-rose card-header-icon">
              <div class="card-icon">
                <i class="material-icons">lock_open</i>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <h4 class="card-title">Chọn nhóm quyền</h4>
                </div>
              </div>
            </div>

            <div class="card-body">
              <div class="row checkbox-radios">
                @foreach($roles as $role)
                  <div class="col-md-4">
                    <div class="form-check form-check-inline">
                      <label class="form-check-label">
                        <input class="form-check-input" name="role_id[]" type="checkbox" value="{{ $role->id }}"
                          {{ $user->roles -> contains($role->id) ? 'checked' : '' }}
                        > {{ $role->description }}
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                  </div>
                @endforeach

                @if ($errors->has('role_id'))
                  <span class="invalid-feedback text-right" style="display: block;">
                    <strong>{{ $errors->first('role_id') }}</strong>
                  </span>
                @endif
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
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