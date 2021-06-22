@extends('admins.layouts.index')

@section('head_title')
  {{ 'Giới thiệu' }}
@endsection

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="material-icons">home</i> Bảng điều khiển</a></li>
            <li class="breadcrumb-item active" aria-current="page">Giới thiệu</li>
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
                <h4 class="card-title">Giới thiệu</h4>
              </div>

              <div class="col-md-6">
                <div style="float: right;">
                  <a href="{{ route('admin.about.edit',['id' => $about->id]) }}" class="btn btn-success">
                    <span class="btn-label">
                      <i class="material-icons">edit</i>
                    </span>
                      Sửa
                    <div class="ripple-container"></div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="material-datatables">
              <div class="row">
                <h3 class="col-md-12 label-on-left">Giới thiệu</h3>
                <div class="col-md-12">
                  <span>{!! $about->about_us !!}</span>
                </div>
              </div>

              <div class="row">
                <h3 class="col-md-12 label-on-left">Hướng dẫn</h3>
                <div class="col-md-12">
                  <span>{!! $about->guide !!}</span>
                </div>
              </div>

              <div class="row">
                <h3 class="col-md-12 label-on-left">Công ty</h3>
                <div class="col-md-12">
                  <span>{{ $about->company }}</span>
                </div>
              </div>

              <div class="row">
                <h3 class="col-md-12 label-on-left">Địa chỉ</h3>
                <div class="col-md-12">
                  <span>{{ $about->adress }}</span>
                </div>
              </div>

              <div class="row">
                <h3 class="col-md-12 label-on-left">Địa chỉ E-mail</h3>
                <div class="col-md-12">
                  <span>{{ $about->email }}</span>
                </div>
              </div>

              <div class="row">
                <h3 class="col-md-12 label-on-left">Số điện thoại hỗ trợ</h3>
                <div class="col-md-10">
                  <span>{{ $about->phone_support }}</span>
                </div>
              </div>

              <div class="row">
                <h3 class="col-md-12 label-on-left">Số điện thoại khiếu nại</h3>
                <div class="col-md-10">
                  <span>{{ $about->phone_complain }}</span>
                </div>
              </div>

              <div class="row">
                <h3 class="col-md-12 label-on-left">Zalo</h3>
                <div class="col-md-10">
                  <span>{{ $about->zalo }}</span>
                </div>
              </div>

              <div class="row">
                <h3 class="col-md-12 label-on-left">Facebook page</h3>
                <div class="col-md-10">
                  <span>{{ $about->facebook }}</span>
                </div>
              </div>
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
