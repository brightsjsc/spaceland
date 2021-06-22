@extends('admins.layouts.index')

@section('head_title')
  {{ 'Quản lý Quyền' }}
@endsection

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="material-icons">home</i> Bảng điều khiển</a></li>
            <li class="breadcrumb-item">Quản trị hệ thống</li>
            <li class="breadcrumb-item active" aria-current="page">Quản lý Quyền</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-rose card-header-icon">
            <div class="card-icon">
              <i class="material-icons">assignment</i>
            </div>

            <div class="row">
              <div class="col-md-6">
                <h4 class="card-title">Danh sách quyền</h4>
              </div>

              <div class="col-md-6">
                <div style="float: right;">
                  <a href="{{ route('admin.system.permission.create') }}" class="btn btn-success">
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
                    <th class="disabled-sorting">Quyền</th>
                    <th class="disabled-sorting">Mô tả</th>
                    <th class="disabled-sorting">Controller</th>
                    <th>Ngày tạo</th>
                    <th class="disabled-sorting text-center">Tác vụ</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($permissions as $permission)
                    <tr>
                      <td>{{ $loop->index + 1 }}</td>
                      <td>{{ $permission->name }}</td>
                      <td>{{ $permission['description'] }}</td>
                      <td>{{ $permission['controller'] }}</td>
                      <td>{{ $permission['created_at'] }}</td>
                      <td class="text-center">
                        <a href="{{ route('admin.system.permission.edit',['id' => $permission['id']]) }}" class="btn btn-link btn-success btn-just-icon edit">
                          <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </a>
                        <a href="{{ route('admin.system.permission.delete',['id' => $permission['id']]) }}" data-url="{{ route('admin.system.permission.delete',['id' => $permission['id']]) }}" onclick="return confirmSubmitDel()" class="btn btn-link btn-danger btn-just-icon remove">
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
        "pagingType": "full_numbers",
        "lengthMenu": [
          [20, 25, 50, -1],
          [20, 25, 50, "All"]
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
          text: 'Bạn sẽ không thể khôi phục quyền này!',
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
