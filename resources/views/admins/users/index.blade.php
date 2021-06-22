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
            <li class="breadcrumb-item active" aria-current="page">Quản lý người dùng hệ thống</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-rose card-header-icon">
            <div class="card-icon">
              <i class="material-icons">people</i>
            </div>

            <div class="row">
              <div class="col-md-6">
                <h4 class="card-title">Danh sách Người dùng</h4>
              </div>

              <div class="col-md-6">
                <div style="float: right;">
                  <a href="{{ route('admin.system.user.create') }}" class="btn btn-success">
                    <span class="btn-label">
                      <i class="material-icons">add</i>
                    </span>
                    Tạo mới
                    <div class="ripple-container"></div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="toolbar">
              <!-- Here you can write extra buttons/actions for the toolbar -->
            </div>
            <div class="material-datatables">
              <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                <thead>
                  <tr>
                    <th class="disabled-sorting">#</th>
                    <th class="disabled-sorting">Tên</th>
                    <th class="disabled-sorting">Email</th>
                    <th class="disabled-sorting" style="width: 30%">Nhóm quyền</th>
                    <th>Ngày tạo</th>
                    <th class="disabled-sorting text-center">Tác vụ</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($users as $user)
                    <tr>
                      <td>{{ $loop->index + 1 }}</td>
                      <td>{{ $user['name'] }}</td>
                      <td>{{ $user['email'] }}</td>
                      <td>
                        @foreach($user['roles'] as $role)
                          <button 
                            @if($role['id'] == 1)
                              class="btn btn-rose btn-sm"
                            @elseif($role['id'] == 2)
                              class="btn btn-success btn-sm"
                            @elseif($role['id'] == 3)
                              class="btn btn-info btn-sm"
                            @else
                              class="btn btn-default btn-sm"
                            @endif
                          >{{ $role['description'] }}
                            <div class="ripple-container"></div>
                          </button>
                        @endforeach
                      </td>
                      <td>{{ $user['created_at'] }}</td>
                      <td class="text-center">
                        <a href="{{ route('admin.system.user.edit',['id' => $user['id']]) }}" class="btn btn-link btn-success btn-just-icon edit"><i class="material-icons">edit</i></a>
                        <a href="{{ route('admin.system.user.delete',['id' => $user['id']]) }}" data-url="{{ route('admin.system.user.delete',['id' => $user['id']]) }}" onclick="return confirmSubmitDel()" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>
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
    function confirmSubmitDel()
    {
      var table = $('#datatables').DataTable();

      // Delete a record
      table.on('click', '.remove', function(e) {
        e.preventDefault();

        var url = $(this).attr('data-url');
        
        Swal.fire({
          title: 'Bạn có muốn xóa?',
          text: 'Bạn sẽ không thể khôi phục người dùng này!',
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
