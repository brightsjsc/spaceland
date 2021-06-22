@extends('admins.layouts.index')

@section('head_title')
  {{ 'Menu' }}
@endsection

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="material-icons">home</i> Bảng điều khiển</a></li>
            <li class="breadcrumb-item active" aria-current="page">Menu</li>
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
                <h4 class="card-title">Menu</h4>
              </div>

              <div class="col-md-6">
                <div style="float: right;">
                  <a href="{{ route('admin.system.menu.create') }}" class="btn btn-success">
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
                    <th>#</th>
                    <th>Menu</th>
                    <th>Menu cha</th>
                    <th>Sắp xếp</th>
                    <th>Icon</th>
                    <th class="disabled-sorting text-center">Vị trí</th>
                    <th class="disabled-sorting text-center">Trạng thái</th>
                    <th class="disabled-sorting text-center">Tác vụ</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    function menu($data, $parent=0, $str='', $select=0){
                      foreach ($data as $value) {
                        $id = $value['id'];
                        $title = $value['title'];
                        $url = $value['url'];
                        $parent_id = $value['parent_id'];
                        $order = $value['order'];
                        $icon = $value['icon'];
                        $prioritize = $value['prioritize'];
                        $status = $value['status'];
                        
                        if($parent_id == $parent) {
                          ?>
                            <tr>
                              <td></td>
                              <td>
                                <a href="{{ route('admin.system.menu.edit',['id' => $id]) }}" title="Sửa">
                                  @if ($str == '')
                                    <span class="text-rose bold">{{ $str." ".$title }}</span>
                                  @elseif ($str == ' ---/')
                                    <span class="text-info bold">{{ $str." ".$title }}</span>
                                  @else
                                    <span class="text-default bold">{{ $str." ".$title }}</span>
                                  @endif
                                </a>
                              </td>
                              <td>
                                @if($parent_id != 0)
                                  <?php
                                    $p = DB::table('menus')->where('id',$parent_id)->first();
                                    if ($str == ' ---/') {
                                      echo '<span class="text-info">'.$p->title.'</span>';
                                    } elseif ($str == ' ---/ ---/') {
                                      echo '<span class="text-default">'.$p->title.'</span>';
                                    }
                                  ?>
                                @else
                                  <span class="text-danger bold">Root</span>
                                @endif
                              </td>
                              <td @if($parent_id == 0) class="text-danger bold"  @endif>{{ $order }}</td>
                              <td>{{ $icon }}</td>
                              <td class="td-actions text-center">
                                @if ($prioritize == 0)
                                  <span class="btn btn-default">MAIN MENU</span>
                                @elseif ($prioritize == 1)
                                  <span class="btn btn-default">FOOTER MENU</span>
                                @endif
                              </td>
                              <td class="td-actions text-center">
                                @if ($status == 0)
                                  <span class="btn btn-success">ACTIVE</span>
                                @else
                                  <span class="btn btn-danger">DISABLE</span>
                                @endif
                              </td>
                              <td class="td-actions text-center">
                                <a href="{{ $url }}" class="btn btn-success btn-link btn-just-icon" title="Xem" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a>

                                <a href="{{ route('admin.system.menu.edit',['id' => $id]) }}" class="btn btn-success btn-link btn-just-icon" title="Sửa"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                                <a href="{{ route('admin.system.menu.delete',['id' => $id]) }}" data-url="{{ route('admin.system.menu.delete',['id' => $id]) }}" onclick="return confirmSubmitDel()" class="btn btn-danger btn-link btn-just-icon remove" title="Xóa"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                              </td>
                            </tr>
                          <?php
                          menu($data, $id, $str.' ---/');
                        }
                      }
                    }

                    menu($menus,0,'',0);
                  ?>
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
          [20, 40, 60, -1],
          [20, 40, 60, "All"]
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
