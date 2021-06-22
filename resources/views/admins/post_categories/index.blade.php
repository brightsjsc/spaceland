@extends('admins.layouts.index')

@section('head_title')
  {{ 'Danh mục Tin tức' }}
@endsection

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="material-icons">home</i> Bảng điều khiển</a></li>
            <li class="breadcrumb-item active" aria-current="page">Danh mục Tin tức</li>
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
                <h4 class="card-title">Danh mục</h4>
              </div>

              <div class="col-md-6">
                <div style="float: right;">
                  <a href="{{ route('admin.post_category.create') }}" class="btn btn-success">
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
                    <th>ID</th>
                    <th>Danh mục</th>
                    <th>Danh mục cha</th>
                    <th>Sắp xếp</th>
                    <th>Icon</th>
                    <th class="disabled-sorting text-center">Ưu tiên</th>
                    <th class="disabled-sorting text-center">Trạng thái</th>
                    <th class="disabled-sorting text-center">Tác vụ</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($categories as $category)
                    <tr>
                      <td>{{ $loop->index + 1 }}</td>
                      <td>
                        @if($category['parent_id'] != 0)
                          <span class="text-success">{{ $category['name'] }}</span>
                        @else
                          <span class="text-danger">{{ $category['name'] }}</span>
                        @endif
                      </td>
                      <td>
                        @if($category['parent_id'] != 0)
                          <?php
                            $parent = DB::table('categories')->where('id',$category['parent_id'])->first();
                            echo '<span class="text-success">'.$parent->name.'</span>';
                          ?>
                        @else
                          <span class="text-danger">Root</span>
                        @endif
                      </td>
                      <td>
                        @if($category['parent_id'] != 0)
                          <span class="text-success">{{ $category['order'] }}</span>
                        @else
                          <span class="text-danger">{{ $category['order'] }}</span>
                        @endif
                      </td>
                      <td>{{ $category['icon'] }}</td>
                      <td class="td-actions text-center">
                        @if ($category['prioritize'] == 0)
                          <span class="btn btn-success">ON</span>
                        @else
                          <span class="btn btn-danger">OFF</span>
                        @endif
                      </td>
                      <td class="td-actions text-center">
                        @if ($category['status'] == 0)
                          <span class="btn btn-success">ON</span>
                        @else
                          <span class="btn btn-danger">OFF</span>
                        @endif
                      </td>
                      <td class="td-actions text-center">
                        <a href="{{ route('admin.post_category.edit',['id' => $category['id']]) }}" class="btn btn-success btn-link btn-just-icon" title="Sửa"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        <a href="{{ route('admin.post_category.delete',['id' => $category['id']]) }}" data-url="{{ route('admin.post_category.delete',['id' => $category['id']]) }}" onclick="return confirmSubmitDel()" class="btn btn-danger btn-link btn-just-icon remove" title="Xóa"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
