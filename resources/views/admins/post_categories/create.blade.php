@extends('admins.layouts.index')

@section('head_title')
  {{ 'Thêm danh mục' }}
@endsection

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Bảng điều khiển</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.post_category.index') }}">Danh mục</a></li>
            <li class="breadcrumb-item active" aria-current="page">Thêm danh mục</li>
          </ol>
        </nav>
      </div>
    </div>

    
    <form action="{{ route('admin.post_category.store') }}" method="POST">
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
                    <h4 class="card-title">Thêm danh mục</h4>
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
                          <label class="col-md-3 col-form-label">Thứ tự sắp xếp</label>
                          <div class="col-md-9">
                            <div class="form-group">
                              <input type="text" class="form-control" name="order" value="{{ old('order') }}">
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
                              <input type="text" class="form-control" name="icon" value="{{ old('icon') }}">
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
                                  cate_parent($parent,0,'',0);
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
                          <label class="col-md-3 col-form-label">Từ khóa</label>
                          <div class="col-md-9">
                            <div class="form-group">
                              <input type="text" class="form-control" name="keywords" value="{{ old('keywords') }}">
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
                              <textarea type="text" class="form-control" name="description" rows="5">{{ old('description') }}</textarea>
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
                          <label class="col-md-3 col-form-label">Vị trí ưu tiên</label>
                          <div class="col-md-9">
                            <div class="form-group">
                              <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                  <input class="form-check-input" name="prioritize" type="radio" checked value="0"> Thường
                                  <span class="circle">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                              <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                  <input class="form-check-input" name="prioritize" type="radio" value="1"> Footer
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
                                  <input class="form-check-input" name="status" type="radio" checked value="0"> ON
                                  <span class="circle">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                              <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                  <input class="form-check-input" name="status" type="radio" value="1"> OFF
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