@extends('admins.layouts.index')

@section('head_title')
  {{ 'Danh sách tin tức' }}
@endsection

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="material-icons">home</i> Bảng điều khiển</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tin tức</li>
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
                <h4 class="card-title">Danh sách tin tức</h4>
              </div>

              <div class="col-md-6">
                <div style="float: right;">
                  <a href="{{ route('admin.post.create') }}" class="btn btn-success">
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
                    <th>Tiêu đề</th>
                    <th>Ảnh</th>
                    <th>Lượt xem</th>
                    <th class="disabled-sorting text-center">Danh mục</th>
                    <th class="disabled-sorting text-center">Trạng thái</th>
                    <th class="disabled-sorting text-center">Hành động</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($posts as $post)
                    <tr>
                      <td>{{ $loop->index + 1 }}</td>
                      <td>{{ $post['title'] }}</td>
                      <td>
                        <img src="{{ asset('uploads/images/posts/'.$post['image']) }}" alt="" width="80px"><br>
                      </td>
                      <td>{{ $post['views'] }}</td>
                      <td class="td-actions text-center">
                        {{ $post->category->name }}
                      </td>
                      <td class="td-actions text-center">
                        @if ($post['status'] == 0)
                          <span class="btn btn-success">Active</span>
                        @else
                          <span class="btn btn-danger">Unactive</span>
                        @endif
                      </td>
                      <td class="td-actions text-center">
                        <a href="{{ route('admin.post.edit',['id' => $post['id']]) }}" class="btn btn-success btn-link btn-just-icon" title="Sửa"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        <a href="{{ route('admin.post.delete',['id' => $post['id']]) }}" data-url="{{ route('admin.post.delete',['id' => $post['id']]) }}" onclick="return confirmSubmitDel()" class="btn btn-danger btn-link btn-just-icon remove" title="Xóa"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
        "columnDefs": [
          { "orderable": false, "targets": 0 }
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
