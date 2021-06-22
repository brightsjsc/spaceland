@extends('admins.layouts.index')

@section('head_title')
  {{ 'Thêm tin tức' }}
@endsection

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Bảng điều khiển</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.post.index') }}">Tin tức</a></li>
            <li class="breadcrumb-item active" aria-current="page">Thêm</li>
          </ol>
        </nav>
      </div>
    </div>

    
    <form action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <!-- <div class="col-md-12"> -->
          <div class="col-md-9 pdr-0">
            <div class="card">
              <div class="card-header card-header-rose card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">add</i>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <h4 class="card-title">Thêm bài viết</h4>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="row">
                          <label class="col-md-2 label-on-left required">Tiêu đề</label>
                          <div class="col-md-10">
                            <div class="form-group">
                              <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                              @if ($errors->has('title'))
                                <span class="invalid-feedback text-right" style="display: block;">
                                  <strong>{{ $errors->first('title') }}</strong>
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
                          <label class="col-md-2 label-on-left">Từ khóa</label>
                          <div class="col-md-10">
                            <div class="form-group">
                              <input type="text" class="form-control" name="keyword" value="{{ old('keyword') }}">
                              @if ($errors->has('keyword'))
                                <span class="invalid-feedback text-right" style="display: block;">
                                  <strong>{{ $errors->first('keyword') }}</strong>
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
                          <label class="col-md-2 label-on-left">Mô tả</label>
                          <div class="col-md-10">
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
                          <label class="col-md-2 label-on-left required">Danh mục</label>
                          <div class="col-md-10">
                            <div class="form-group">
                              <select class="form-control" name="postcate_id">
                                <option value=""> <== Root ==> </option>
                                <?php
                                  cate_parent($categories,0,'',0);
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
                              @if ($errors->has('postcate_id'))
                                <span class="invalid-feedback text-right" style="display: block;">
                                  <strong>{{ $errors->first('postcate_id') }}</strong>
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
                          <label class="col-md-2 label-on-left required">Ảnh</label>
                          <div class="col-md-10">
                            <div class="form-group">
                              <input type="file" class="form-control" id="imgload" name="image" required multiple style="opacity: 1; position: static;"><br>
                              <div class="gallery row"></div>
 
                              @if ($errors->has('image'))
                                <span class="invalid-feedback text-right" style="display: block;">
                                  <strong>{{ $errors->first('image') }}</strong>
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
                          <label class="col-md-2 label-on-left">Nội dung</label>
                          <div class="col-md-10">
                            <div class="form-group">
                              <textarea type="text" class="form-control ckeditor" name="content" rows="5">{{ old('content') }}</textarea>
                              @if ($errors->has('content'))
                                <span class="invalid-feedback text-right" style="display: block;">
                                  <strong>{{ $errors->first('content') }}</strong>
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
                          <label class="col-md-2 label-on-left">Tags</label>
                          <div class="col-md-10">
                            <div class="form-group" style="border: solid #ddd 1px">
                              <input type="text" class="form-control tagsinput" data-role="tagsinput" data-color="info" name="tag" value="{{ old('tag') }}">
                              @if ($errors->has('tag'))
                                <span class="invalid-feedback text-right" style="display: block;">
                                  <strong>{{ $errors->first('tag') }}</strong>
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
                          <label class="col-md-2 label-on-left">Loại tin</label>
                          <div class="col-md-10">
                            <div class="form-group">
                              <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                  <input class="form-check-input" name="type_id" type="checkbox" checked value="0"> Bình thường
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                              <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                  <input class="form-check-input" name="type_id" type="checkbox" value="1"> HOT
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                              <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                  <input class="form-check-input" name="type_id" type="checkbox" value="2"> NEW
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                              @if ($errors->has('type'))
                                <span class="invalid-feedback text-right" style="display: block;">
                                  <strong>{{ $errors->first('type') }}</strong>
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
                          <label class="col-md-2 label-on-left">Trạng thái</label>
                          <div class="col-md-10">
                            <div class="form-group">
                              <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                  <input class="form-check-input" name="status" type="radio" checked value="0"> Active
                                  <span class="circle">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                              <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                  <input class="form-check-input" name="status" type="radio" value="1"> Unactive
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
              <!-- end content -->          
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
<script>
  $(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {
      if (input.files) {
        var filesAmount = input.files.length;
        for (i = 0; i < filesAmount; i++) {
          var reader = new FileReader();
          reader.onload = function(event) {
            $($.parseHTML('<img>')).attr('src', event.target.result).attr('class', 'image_pre').appendTo(placeToInsertImagePreview);
          }
          reader.readAsDataURL(input.files[i]);
        }
      }
    };

    $('#imgload').on('change', function() {
      $('.gallery').empty();
      imagesPreview(this, 'div.gallery');
    });
  });
</script>
@endsection