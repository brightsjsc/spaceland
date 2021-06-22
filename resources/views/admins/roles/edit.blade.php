@extends('admins.layouts.index')

@section('head_title')
  {{ 'Chi tiết - '.$role->description }}
@endsection

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Bảng điều khiển</a></li>
            <li class="breadcrumb-item">Quản trị hệ thống</li>
            <li class="breadcrumb-item"><a href="{{ route('admin.system.role.index') }}">Nhóm và phân quyền</a></li>
            <li class="breadcrumb-item active" aria-current="page">Chi tiết - {{ $role->description }}</li>
          </ol>
        </nav>
      </div>
    </div>

    <form action="{{ route('admin.system.role.update', ['id' => $role->id]) }}" method="POST">
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
                  <h4 class="card-title">Chi tiết nhóm quyền - "{{ $role->description }}"</h4>
                </div>
              </div>
            </div>

            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <label class="col-md-3 col-form-label required">Tên nhóm quyền</label>
                        <div class="col-md-9">
                          <div class="form-group">
                            <input type="text" class="form-control" name="name" value="{{ $role->name }}">
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
                        <label class="col-md-3 col-form-label required">Mô tả quyền</label>
                        <div class="col-md-9">
                          <div class="form-group">
                            <input type="text" class="form-control" name="description" value="{{ $role->description }}">
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
                </div>
              </div>
            </div>
          </div>
          <!--  end card  -->

          <div class="card">
            <div class="card-header card-header-rose card-header-icon">
              <div class="card-icon">
                <i class="material-icons">lock_open</i>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <h4 class="card-title">Chọn quyền</h4>
                </div>
              </div>
            </div>

            <div class="card-body">
              <div class="row checkbox-radios">
                @foreach($groupPermissionAll as $controller => $permissions)
                  <div class="col-md-4">
                    <div class="col-md-12">
                      <div class="form-check form-check-inline">
                        <label class="form-check-label bold-500">
                          <input class="form-check-input" id="{{ $controller }}" name="permission_group[]" type="checkbox" value="{{ $controller }}"
                            <?php
                              isset($groupPermissionOfUser[$controller]) ? $json1 = json_encode($groupPermissionOfUser[$controller]) : $json1 = '';
    
                              $json2 = json_encode($groupPermissionAll[$controller]);

                              if ($json1 == $json2) {
                                  echo 'checked';
                              } else {
                                  echo '';
                              }
                            ?>
                          > {{ $controller }}

                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-12 border">
                      <br>
                      @foreach($permissions as $permission)
                        <div class="col-md-12">
                          <div class="form-check form-check-inline">
                            <label class="form-check-label">
                              <input class="form-check-input {{ $controller }}" name="permission_id[]" type="checkbox" value="{{ $permission['id'] }}"
                                {{ $role->permissions -> contains($permission['id']) ? 'checked' : '' }}
                              > {{ $permission['description'] }}

                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </div>
                      @endforeach
                      <br>
                    </div>
                  </div>
                @endforeach
                @if ($errors->has('permission_id'))
                  <span class="invalid-feedback text-center" style="display: block;">
                    <strong>{{ $errors->first('permission_id') }}</strong>
                  </span>
                @endif
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3 pdl-0">
          <div class="card">
            <div class="card-header card-header-rose card-header-text">
              <!-- <div class="card-text"> -->
                <p class="card-title">Action</p>
              <!-- </div> -->
            </div>
            <div class="dropdown-divider"></div>
            <br>
            <div class="card-body">
              <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-success" style="padding: 10px 25px"><i class="material-icons">check</i> Lưu</button>
              </div>
            </div>
            <br><br>
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

  @foreach($groupPermissionAll as $controller => $permissions)
    <script type="text/javascript">
      $(document).ready(function() {
        $("#{{ $controller }}").click(function () {
            $(".{{ $controller }}").prop('checked', $(this).prop('checked'));
        });
      });
    </script>
  @endforeach
@endsection