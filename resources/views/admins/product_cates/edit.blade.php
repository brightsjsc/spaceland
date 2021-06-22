@extends('admins.layouts.index')

@section('head_title')
  {{ "Sửa danh mục: ".$category['name'] }}
@endsection

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Bảng điều khiển</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.productCate.index') }}">Danh mục</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ "Sửa danh mục: ".$category['name'] }}</li>
          </ol>
        </nav>
      </div>
    </div>

    
    <form action="{{ route('admin.productCate.update',['id' => $category['id']]) }}" method="POST">
      @csrf
      <div class="row">
        <!-- <div class="col-md-12"> -->
          <div class="col-md-9 pdr-0">
            <div class="card">
              <div class="card-header card-header-rose card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">person</i>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <h4 class="card-title">{{ "Sửa danh mục: ".$category['name'] }}</h4>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="row">
                          <label class="col-md-3 col-form-label required">Tên</label>
                          <div class="col-md-9">
                            <div class="form-group">
                              <input type="text" class="form-control" name="name" value="{{ $category['name'] }}">
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
                          <label class="col-md-3 col-form-label required">Thứ tự sắp xếp</label>
                          <div class="col-md-9">
                            <div class="form-group">
                              <input type="text" class="form-control" name="order" value="{{ $category['order'] }}">
                              @if ($errors->has('order'))
                                <span class="invalid-feedback text-right" style="display: block;">
                                  <strong>{{ $errors->first('order') }}</strong>
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
                          <label class="col-md-3 col-form-label">Icon</label>
                          <div class="col-md-9">
                            <div class="form-group">
                              <input type="text" class="form-control" name="icon" value="{{ $category['icon'] }}">
                              @if ($errors->has('icon'))
                                <span class="invalid-feedback text-right" style="display: block;">
                                  <strong>{{ $errors->first('icon') }}</strong>
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
                          <label class="col-md-3 col-form-label required">Danh mục cha</label>
                          <div class="col-md-9">
                            <div class="form-group">
                              <select class="form-control" name="parent_id">
                                <option value="0"> <== Root ==> </option>
                                <?php
                                  cate_parent($parent,0,'',$category['parent_id']);
                                  function cate_parent($data, $parent=0, $str='--', $select=0){
                                    foreach ($data as $value) {
                                      $id = $value['id'];
                                      $name = $value['name'];
                                      $parent_id = $value['parent_id'];

                                      if($parent_id == $parent) {
                                        if(($select != 0) && ($id == $select)) {
                                          echo "<option value='$id' selected>$str $name</option>";
                                        }else{
                                          echo "<option value='$id'>$str $name</option>";
                                        }
                                        cate_parent($data, $id, $str.'--',$select);
                                      }
                                    }
                                  }
                                ?>
                              </select>
                              @if ($errors->has('parent_id'))
                                <span class="invalid-feedback text-right" style="display: block;">
                                  <strong>{{ $errors->first('parent_id') }}</strong>
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
                          <label class="col-md-3 col-form-label">Nhóm danh mục</label>
                          <div class="col-md-9">
                            <div class="form-group">
                              <input type="text" class="form-control" name="group" value="{{ $category['group'] }}">
                              @if ($errors->has('group'))
                                <span class="invalid-feedback text-right" style="display: block;">
                                  <strong>{{ $errors->first('group') }}</strong>
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
                          <label class="col-md-3 col-form-label">Từ khóa</label>
                          <div class="col-md-9">
                            <div class="form-group">
                              <input type="text" class="form-control" name="keywords" value="{{ $category['keywords'] }}">
                              @if ($errors->has('keywords'))
                                <span class="invalid-feedback text-right" style="display: block;">
                                  <strong>{{ $errors->first('keywords') }}</strong>
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
                          <label class="col-md-3 col-form-label">Mô tả</label>
                          <div class="col-md-9">
                            <div class="form-group">
                              <textarea type="text" class="form-control" name="description" rows="5">{{ $category['description'] }}</textarea>
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
                          <label class="col-md-3 col-form-label">Hiển thị menu</label>
                          <div class="col-md-9">
                            <div class="form-group">
                              <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                  <input class="form-check-input" name="is_menu" type="radio" 
                                    @if($category['is_menu'] == 0) checked @endif value="0"> ON
                                  <span class="circle">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                              <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                  <input class="form-check-input" name="is_menu" type="radio" 
                                    @if($category['is_menu'] == 1) checked @endif value="1"> OFF
                                  <span class="circle">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                              @if ($errors->has('is_menu'))
                                <span class="invalid-feedback text-right" style="display: block;">
                                  <strong>{{ $errors->first('is_menu') }}</strong>
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
                          <label class="col-md-3 col-form-label">Hiển thị ưu tiên</label>
                          <div class="col-md-9">
                            <div class="form-group">
                              <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                  <input class="form-check-input" name="prioritize" type="radio" 
                                    @if($category['prioritize'] == 0) checked @endif value="0"> ON
                                  <span class="circle">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                              <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                  <input class="form-check-input" name="prioritize" type="radio" 
                                    @if($category['prioritize'] == 1) checked @endif value="1"> OFF
                                  <span class="circle">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                              @if ($errors->has('prioritize'))
                                <span class="invalid-feedback text-right" style="display: block;">
                                  <strong>{{ $errors->first('prioritize') }}</strong>
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
                          <label class="col-md-3 col-form-label">Trạng thái</label>
                          <div class="col-md-9">
                            <div class="form-group">
                              <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                  <input class="form-check-input" name="status" type="radio" 
                                    @if($category['status'] == 0) checked @endif value="0"> ON
                                  <span class="circle">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                              <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                  <input class="form-check-input" name="status" type="radio" 
                                    @if($category['status'] == 1) checked @endif value="1"> OFF
                                  <span class="circle">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                              @if ($errors->has('status'))
                                <span class="invalid-feedback text-right" style="display: block;">
                                  <strong>{{ $errors->first('status') }}</strong>
                                </span>
                              @endif
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <br>
                  </div>
                </div>
              </div>
              <!-- end content-->          
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