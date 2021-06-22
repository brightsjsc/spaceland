@extends('admins.layouts.index')

@section('head_title')
  {{ 'Sửa dự án' }}
@endsection

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Bảng điều khiển</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.productCate.index') }}">Dự án</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sửa dự án: {{ $project->name }}</li>
          </ol>
        </nav>
      </div>
    </div>

    
    <form action="{{ route('admin.project.update',['id' => $project->id]) }}" method="POST">
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
                    <h4 class="card-title">Sửa dự án</h4>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="row">
                          <label class="col-md-3 col-form-label required">Tên dự án</label>
                          <div class="col-md-9">
                            <div class="form-group">
                              <input type="text" class="form-control" name="name" value="{{ $project->name }}">
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
                          <label class="col-md-3 col-form-label required">Tỉnh / Thành phố</label>
                          <div class="col-md-9">
                            <div class="form-group">
                              <select class="form-control" name="adr_city_id">
                                @foreach ($cities as $city)
                                  <option value="{{ $city->city_id }}" 
                                    @if($city->city_id == $project->adr_city_id) selected @endif
                                  > {{ $city->level." ".$city->name_local }} </option>
                                @endforeach
                              </select>
                              @if ($errors->has('adr_city_id'))
                                <span class="invalid-feedback text-right" style="display: block;">
                                  <strong>{{ $errors->first('adr_city_id') }}</strong>
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
                          <label class="col-md-3 col-form-label required">Quận / Huyện / Thị xã</label>
                          <div class="col-md-9">
                            <div class="form-group">
                              <select class="form-control" name="adr_district_id">
                                @foreach ($districts as $district)
                                  <option value="{{ $district->district_id }}" 
                                    @if($district->district_id == $project->adr_district_id) selected @endif
                                  > {{ $district->level." ".$district->name_local }} </option>
                                @endforeach
                              </select>
                              @if ($errors->has('adr_district_id'))
                                <span class="invalid-feedback text-right" style="display: block;">
                                  <strong>{{ $errors->first('adr_district_id') }}</strong>
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
                          <label class="col-md-3 col-form-label required">Phường / Xã</label>
                          <div class="col-md-9">
                            <div class="form-group">
                              <select class="form-control" name="adr_commune_id">
                                @foreach ($communes as $commune)
                                  <option value="{{ $commune->commune_id }}" 
                                    @if($commune->commune_id == $project->adr_commune_id) selected @endif
                                  > {{ $commune->level." ".$commune->name_local }} </option>
                                @endforeach
                              </select>
                              @if ($errors->has('adr_commune_id'))
                                <span class="invalid-feedback text-right" style="display: block;">
                                  <strong>{{ $errors->first('adr_commune_id') }}</strong>
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
                          <label class="col-md-3 col-form-label">
                            <span class="required">Địa chỉ cụ thể:</span> <br> 
                            <small><i>(Số nhà, ngõ, đường)</i></small>
                          </label>
                          <div class="col-md-9">
                            <div class="form-group">
                              <input type="text" class="form-control" name="address" value="{{ $project->address }}">
                              @if ($errors->has('address'))
                                <span class="invalid-feedback text-right" style="display: block;">
                                  <strong>{{ $errors->first('address') }}</strong>
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
  <script type="text/javascript">
    var url_get_districts = "{{ url('/admin/ajax/showDistrictOfCity') }}";
    $("select[name='adr_city_id']").change(function(){
      var city_id = $(this).val();
      var token = $("input[name='_token']").val();

      //Producer
      $.ajax({
        url: url_get_districts,
        method: 'POST',
        data: {
            city_id: city_id,
            _token: token
        },
        success: function(data) {
          $("select[name='adr_district_id']").html('');
          $.each(data, function(key, value){
            $("select[name='adr_district_id']").append(
              "<option value='" + value.district_id + "'>" + value.level + " " + value.name_local + "</option>"
            );
          });
        }
      });
    });

    var url_get_communes = "{{ url('/admin/ajax/showCommuneOfDistrict') }}";
    $("select[name='adr_district_id']").change(function(){
      var district_id = $(this).val();
      var token = $("input[name='_token']").val();

      //Producer
      $.ajax({
        url: url_get_communes,
        method: 'POST',
        data: {
            district_id: district_id,
            _token: token
        },
        success: function(data) {
          $("select[name='adr_commune_id']").html('');
          $.each(data, function(key, value){
            $("select[name='adr_commune_id']").append(
              "<option value='" + value.id + "'>" + value.level + " " + value.name_local + "</option>"
            );
          });
        }
      });
    });   
  </script>

  @if(session('result'))
    <!--  Plugin for Sweet Alert -->
    <script src="{{ asset('assets/js/plugins/sweetalert2.js') }}"></script>
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