@extends('layouts.index')

@section('head_title')
  {{ $product_cate->name }}
@endsection
@section('keyword')
{{ $product_cate->keywords }}
@endsection
@section('contain-content')
  {{ $product_cate->description }}
@endsection
@section('image-page')
    {{asset('uploads/images/bg1.jpg')}}
@endsection

@section('content')
@include('layouts.page-header')
<div class="container" style="padding-top: 20px;">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $product_cate->name }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class=" product-list">
                <div class="product-header">
                    <div class="header-title">
                        <h4 class="product-title text-uppercase">{{ $product_cate->name }}</h4>
                    </div>
                    <div class="header-sort">
                        <div class="product-sort">
                            <div class="product-sort-control">
                                <form id="form-sort" action="" method="get">
                                    <div class="sort-item">
                                        <div class="sort-custom">
                                            <select name="orderBy" id="sort">
                                                <option value="tin-moi-nhat"
                                                    @if (!empty($request['orderBy']) && $request['orderBy'] == 'tin-moi-nhat')
                                                        selected
                                                    @endif
                                                >Tin mới nhất</option>
                                                <option value="tin-cu-nhat"
                                                    @if (!empty($request['orderBy']) && $request['orderBy'] == 'tin-cu-nhat')
                                                        selected
                                                    @endif
                                                >Tin cũ nhất</option>
                                                <option value="gia-tu-thap-den-cao"
                                                    @if (!empty($request['orderBy']) && $request['orderBy'] == 'gia-tu-thap-den-cao')
                                                        selected
                                                    @endif
                                                >Giá từ thấp đến cao</option>
                                                <option value="gia-tu-cao-den-thap"
                                                    @if (!empty($request['orderBy']) && $request['orderBy'] == 'gia-tu-cao-den-thap')
                                                        selected
                                                    @endif
                                                >Giá từ cao đến thấp</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-body">
                    @foreach($products as $product)
                        <div class="product-item row">

                            <div class="product-image col-5">
                                <a href="{{ route('productDetail',['product' => $product->alias]) }}"><img src="{{ asset('uploads/images/products/thumbs/'.$product->image) }}" alt="{{ $product->name }}" title="{{ $product->name }}" width="100%"></a>
                            </div>
                            <div class="product-main col-7">
                                <div class="product-title">
                                    <h4><a href="{{ route('productDetail',['product' => $product->alias]) }}">{{ $product->name }}</a></h4>
                                </div>
                                <div class="product-info">
                                    <span class="price">
                                        @if ($product->price_type == 1)
                                            {{ number_format($product->price,0,',','.') }} đ/tháng
                                        @elseif ($product->price_type == 2)
                                            {{ number_format($product->price,0,',','.') }} đ/m2
                                        @else
                                            Thỏa thuận
                                        @endif
                                    </span>
                                    <div>
                                    @if ($product->acreage != '')
                                        <span class="dot">·</span>
                                        <span class="area">{{ $product->acreage }} m2</span>
                                    @endif
                                    @if ($product->room_number != '')
                                        <span class="dot">·</span>
                                        <span class="bedroom">{{ $product->room_number }} PN</span>
                                    @endif
                                    <span class="dot">·</span>
                                    <span class="location">{{ $product->project->district->level." ".$product->project->district->name_local }}</span>
                                </div>
                                <div class="product-content">
                                    <span>Thông tin chi tiết:</span><br>
                                    <span>Căn hộ rộng : {!! $product->acreage !!} m2</span><br>
                                    <span>Tình Trạng : {!! $product->furniture !!}</span><br>
                                </div>

                            </div>
                        </div>
                        </div>
                    @endforeach
                </div>
                <div class="product-paginate">
                    <nav class="paginate">
                        <ul class="pagination">

                            @if(url()->full() == url()->current())
                                <!--Arrow left-->
                                <li class="{{ ($products->currentPage() == 1) ? 'page-item disabled' : 'page-item' }}">
                                    <a href="{{ $products->previousPageUrl() }}" class="page-link waves-effect waves-effect" aria-label="Previous">
                                        <span aria-hidden="true">Trước</span>
                                        <span class="sr-only">«</span>
                                    </a>
                                </li>

                                @for($i = 1; $i <= $products->lastPage(); $i++)
                                    <li class="{{ ($products->currentPage() == $i) ? 'page-item active disabled' : 'page-item' }}">
                                        <a href="{{ $products->url($i) }}" class="page-link waves-effect waves-effect">{{ $i }}</a>
                                    </li>
                                @endfor

                                <!--Arrow right-->
                                <li class="{{ ($products->currentPage() == $products->lastPage()) ? 'page-item disabled' : 'page-item' }}">
                                    <a href="{{ $products->nextPageUrl() }}" class="page-link waves-effect waves-effect" aria-label="Next">
                                        <span aria-hidden="true">Tiếp</span>
                                        <span class="sr-only">»</span>
                                    </a>
                                </li>
                            @else
                                <!--Arrow left-->
                                <li class="{{ ($products->currentPage() == 1) ? 'page-item disabled' : 'page-item' }}">
                                    <a href="{{ url()->full().'&page='.($products->currentPage()-1) }}" class="page-link waves-effect waves-effect" aria-label="Previous">
                                        <span aria-hidden="true">Trước</span>
                                        <span class="sr-only">«</span>
                                    </a>
                                </li>

                                @for($i = 1; $i <= $products->lastPage(); $i++)
                                    <li class="{{ ($products->currentPage() == $i) ? 'page-item active disabled' : 'page-item' }}">
                                        <a href="{{ url()->full().'&page='.$i }}" class="page-link waves-effect waves-effect">{{ $i }}</a>
                                    </li>
                                @endfor

                                <!--Arrow right-->
                                <li class="{{ ($products->currentPage() == $products->lastPage()) ? 'page-item disabled' : 'page-item' }}">
                                    <a href="{{ url()->full().'&page='.($products->currentPage()+1) }}" class="page-link waves-effect waves-effect" aria-label="Next">
                                        <span aria-hidden="true">Tiếp</span>
                                        <span class="sr-only">»</span>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            {{-- @include('layouts.cate-area') --}}
            {{-- @include('layouts.bds') --}}
            <div class="project-related">
                <div class="project-header">
                   <h3 class="title-pro"> Liên Hệ</h3>
                </div>
                <div class="project-list">
                    @include('pages.contact')
                </div>
            </div>

        </div>
    </div>

</div>

@include('layouts.footer-static')

@endsection

@section('script')
<script>
    $(document).ready(function() {
        $("#sort").change(function(){
            $("#form-sort").submit();
        });
        if($("select[name='adr_district_id']").attr('data-has-data') == 'true'){
            setTimeout(function(){
                $("select[name='adr_district_id']").change();
            }, 100)
        }

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
                var hasCommune = $("select[name='adr_commune_id']").attr('data-has-data') == 'true';
                var idSelected = $("select[name='adr_commune_id']").attr('data-id-selected') || '-1';
              $("select[name='adr_commune_id']").html('');
              $("select[name='adr_commune_id']").append("<option value=''> Chọn Phường/Xã </option>");
              $.each(data, function(key, value){
                $("select[name='adr_commune_id']").append(
                  "<option value='" + value.commune_id + "' " + (idSelected == value.commune_id ? "selected" : "") + ">" + value.level + " " + value.name_local + "</option>"
                );
              });
              if(hasCommune){
                  $("select[name='adr_commune_id']").change();
                  $("select[name='adr_district_id']").removeClass('first_change')
              }
            }
          });
        });

        var url_get_project_of_district = "{{ url('/admin/ajax/showProjectOfDistrict') }}";
        $("select[name='adr_district_id']").change(function(){
            if($(this).hasClass('first_change')){
                return true;
            }
          var district_id = $(this).val();
          var token = $("input[name='_token']").val();

          if (district_id == '') {
            var city_id = $("select[name='adr_city_id']").val();
            $.ajax({
              url: url_get_project_of_city,
              method: 'POST',
              data: {
                  city_id: city_id,
                  _token: token
              },
              success: function(data) {
                $("select[name='project_id']").html('');
                $("select[name='project_id']").append("<option value=''> Chọn dự án </option>");
                $.each(data, function(key, value){
                  $("select[name='project_id']").append(
                    "<option value='" + value.id + "'>" + value.name + "</option>"
                  );
                });
              }
            });
          } else {
            $.ajax({
              url: url_get_project_of_district,
              method: 'POST',
              data: {
                  district_id: district_id,
                  _token: token
              },
              success: function(data) {
                $("select[name='project_id']").html('');
                $("select[name='project_id']").append("<option value=''> Chọn dự án </option>");
                $.each(data, function(key, value){
                  $("select[name='project_id']").append(
                    "<option value='" + value.id + "'>" + value.name + "</option>"
                  );
                });
              }
            });
          }
        });

        var url_get_project = "{{ url('/admin/ajax/showProjectOfCommune') }}";
        $("select[name='adr_commune_id']").change(function(){
          var commune_id = $(this).val();
          var token = $("input[name='_token']").val();

          if (commune_id == '') {
            var district_id = $("select[name='adr_district_id']").val();
            $.ajax({
              url: url_get_project_of_district,
              method: 'POST',
              data: {
                  district_id: district_id,
                  _token: token
              },
              success: function(data) {
                  var idSelected = $("select[name='project_id']").attr('data-id-selected') || '-1';
                $("select[name='project_id']").html('');
                $("select[name='project_id']").append("<option value=''> Chọn dự án </option>");
                $.each(data, function(key, value){
                  $("select[name='project_id']").append(
                    "<option value='" + value.id + "' " + (idSelected == value.id ? "selected" : "") + ">" + value.name + "</option>"
                  );
                });
              }
            });
          } else {
            $.ajax({
              url: url_get_project,
              method: 'POST',
              data: {
                  commune_id: commune_id,
                  _token: token
              },
              success: function(data) {
                  var idSelected = $("select[name='project_id']").attr('data-id-selected') || '-1';
                $("select[name='project_id']").html('');
                $("select[name='project_id']").append("<option value=''> Chọn dự án </option>");
                $.each(data, function(key, value){
                  $("select[name='project_id']").append(
                    "<option value='" + value.id + "' " + (idSelected == value.id ? "selected" : "") + ">" + value.name + "</option>"
                  );
                });
              }
            });
          }
        });
    });
</script>
@endsection
