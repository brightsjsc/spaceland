@extends('layouts.project_index')

@section('head_title')
    {{ 'Chi tiết dự án ' . $project->name }}
@endsection
@section('image-page')
    {{ asset('uploads/images/bg2.jpg') }}
@endsection

@section('content')
    <div class="container-fuild" style="">
        <div class="dethail_banner" style="filter: brightness(65%);background-image: url('{{ asset('/uploads/images/projects/' . $project->background_img) }}');
            width:100%;
            height:30vh;
    background-repeat:no-repeat !important;
    background-position:center !important;
    background-size:cover !important;
    ">

        </div>
        <div class="container">
            <div class="text-center" id="Century">
                <br>
                <h1 style="font-weight: 900; color:#E65D26" class="text-decoration-underline">{{ $project->name }}</h1>
                <br>
                <div>
                    <table class="table table-detail table-bordered border-primary" style="">
                        <thead>
                            <th style="color: white; background:#E65D26;width:30%;line-height:40px">Tên thương mại</th>
                            <th style="color: white; background:#E65D26; text-align: center; line-height:40px">
                                {{ $project->name }}</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Vị trí dự án</td>
                                <td>{{ $project->address }}</td>
                            </tr>
                            <tr>
                                <td>Chủ đầu tư</td>
                                <td>{{ $project->investor }}</td>
                            </tr>
                            <tr>
                                <td>Đơn vị phát triển</td>
                                <td>{{ $project->dev_unit }}</td>
                            </tr>
                            <tr>
                                <td>Tổng diện tích</td>
                                <td>{{ $project->acreage }}</td>
                            </tr>
                            <tr>
                                <td>Mật độ xây dựng</td>
                                <td>{{ $project->density }}</td>
                            </tr>
                            <tr>
                                <td>Loại hình đầu tư</td>
                                <td>{{ $project->invest_type }}</td>
                            </tr>
                            <tr>
                                <td>Quy mô dự án</td>
                                <td>{{ $project->scale }}</td>
                            </tr>
                            <tr>
                                <td>Tiện ích The Miyako</td>
                                <td>{{ $project->utilities }}</td>
                            </tr>
                            <tr>
                                <td>Khởi công xây dựng</td>
                                <td>{{ $project->start_build }}</td>
                            </tr>
                            <tr>
                                <td>Dự kiến bào giao</td>
                                <td>{{ $project->end_build }}</td>
                            </tr>
                            <tr>
                                <td>Pháp lý</td>
                                <td>{{ $project->juridical }}</td>
                            </tr>
                            <tr>
                                <td>Hình thức sở hữu</td>
                                <td>{{ $project->owned_type }}</td>
                            </tr>
                            <tr>
                                <td>ĐƠN VỊ TƯ VẤN VÀ BÁN HÀNG</td>
                                <td class="text-danger">{{ $project->advisory }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="mt-4"
            style=" background-image: url('{{ asset('/uploads/images/projects/' . $project->image_des) }}');background-size: 100% 100%; height:auto;padding:0">
            <div class="row w-100 m-0">
                <div class=".col-md-12 col-lg-5">
                    <div class="text-introduce" style="">
                        <div style="background: #E65D26; height:10px"></div>

                        <br>
                        <h3 style="margin-left: 10px; margin-right:10%">GIỚI THIỆU VỀ DỰ ÁN @php
                            echo mb_strtoupper($project->name);
                        @endphp
                        </h3>
                        <br>
                        <div class="text-left" style="margin-left: 2%; height:auto;">
                            <?php echo $project['description']; ?>
                        </div>
                    </div>


                </div>

            </div>
        </div>
        <br>
        <br>
        <div id="Scale" style="background: white; padding:0">
            <h1 class="name-item" style="font-weight: 900;margin-left: 5%; color:#E65D26" class="text-decoration-underline">Quy mô dự án</h1>
            <div class="row w-100 m-0 reverse">
                <div class="col-md-12 col-lg-6">
                    <div class="margin-text-left" >
                        <br>
                        <div style="border-top:1px solid #2A9339; border-bottom:1px solid #2A9339;color:#2A9339"
                            class="text-center">
                            <h1 style="font-weight: 900;">{{ $project->acreage }}</h1>
                            <h5 style="font-weight: 900;">Diện tích dự án</h5>
                        </div>
                        <br>
                        <div style="height:auto">
                            <?php echo $project['description_scale']; ?>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6" style="border: 2px solid #E65D26; display:flex ; ">
                    <img src="{{ asset('/uploads/images/projects/' . $project->image_scale) }}" alt="" style=" width:100%;
                                                                                padding:3%">
                </div>
            </div>
        </div>
        <br>
        <br>
        <div id="locate" style="6">
            <h1 style="font-weight: 900; color:#003456;" class="text-decoration-underline text-center">Vị trí dự án</h1>
            <br>
            <div class="row w-100 reverse" style="background-color: #003456; margin: 0">
                <div class="col-md-12 col-lg-6" style="padding: 0 ; margin: auto;">
                    <div class="text-locate" style="">
                        <div style="background: #E65D26; height:10px"></div>
                        <br>
                        <h3 style="margin-left: 10px; margin-right:10%">GIỚI THIỆU VỀ DỰ ÁN @php
                            echo mb_strtoupper($project->name);
                        @endphp
                        </h3>
                        <br><br>
                        <div class="text-left" style="margin-left:10px; margin-right:10%">
                            <?php echo $project['description_locate']; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6" style=" height:auto;float: left; padding-top:2%;padding-bottom:2%">
                    <img class="img-locate" src="{{ asset('/uploads/images/projects/' . $project->image_locate) }}" alt="" style=" ">
                </div>
            </div>
        </div>
        <br>
        <div id="investor" style="background: white">
            <h1 class="name-item" style="font-weight: 900;;margin-left: 5%; color:#E65D26" class="text-decoration-underline">Chủ đầu tư</h1>
            <div class="row w-100 m-0 reverse">
                <div class="col-md-12 col-lg-6">
                    <div class="margin-text-left" >
                        <br>
                        <div>
                            <?php echo $project['description_investor']; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 " style="border: 2px solid #E65D26; display:flex;">
                    <img src="{{ asset('/uploads/images/projects/' . $project->image_investor) }}" alt="" style=" width:100%;
                                                                                 padding:3%">
                </div>
            </div>
        </div>
        <br>
        <div id="utilities" style="background: white">
            <h1 class="name-item" style="font-weight: 900; margin-left:53%; color:#E65D26" class="text-decoration-underline">Tiện ích</h1>
            <div class="row w-100 m-0">
                <div class="col-md-12 col-lg-6" style="border: 2px solid #E65D26; display:flex;">
                    <img src="{{ asset('/uploads/images/projects/' . $project->image_utilities) }}" alt="" style=" width:100%;
                                                                                padding:3%">
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="margin-text-left">
                        <br>


                        <div>
                            <?php echo $project['description_utilities']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div style="
                                 background-image: url('{{ asset('/assets/img/img-color.jpg') }}');
                                    background-size: 100% 100%; height:auto;">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row" style="padding:3%">
                            <div class="col-md-12 col-lg-6"
                                style="border: 2px solid white; padding:3%; display:flex;">
                                <img class="img-slide-detail" src="{{ asset('/uploads/images/projects/' . $project->image_more) }}" alt="" style=" width:100%;
                                                                                ">
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div style="margin-left: 5%; color:white">
                                    <br>
                                    <div>
                                        <?php echo $project['description_more']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row" style="padding:3%">
                            <div class="col-md-12 col-lg-6"
                            style="border: 2px solid white; padding:3%; display:flex;">
                            <img class="img-slide-detail" src="{{ asset('/uploads/images/projects/' . $project->image_more_2) }}" alt="" style=" width:100%;
                                                                               ">
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div style="margin-left: 5%; color:white">
                                    <br>
                                    <div>
                                        <?php echo $project['description_more_2']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row" style="padding:3%;">
                            <div class="col-md-12 col-lg-6"
                            style="border: 2px solid white; padding:3%; display:flex;">
                                <img class="img-slide-detail" src="{{ asset('/uploads/images/projects/' . $project->image_more_3) }}" alt="" style=" width:100%;
                                                                                ">
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div style="margin-left: 5%; color:white">
                                    <br>
                                    <div>
                                        <?php echo $project['description_more_3']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev d-detail-none" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next d-detail-none" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon d-lg-none" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>
        <br>
        <br>
        <br>
        <h1 style="font-weight: 900; color:#E65D26" class="text-decoration-underline text-center" id="ground">Mặt bằng</h1>
        <br>
        <div
            style=" background-image: url('{{ asset('/uploads/images/projects/' . $project->image_ground) }}');background-size: 100% 100%;">
            <div class="row w-100 m-0">

                <div class="col-md"> </div>

                <div class="col-md-12 col-lg-6">
                    <div class="text_ground" >
                        <div style="background: #E65D26; height:10px"></div>
                        <br>
                        <h3 style="margin-left: 10px; margin-right:5%">MẶT BẰNG THIẾT KẾ DỰ ÁN @php
                            echo mb_strtoupper($project->name);
                        @endphp
                        </h3>
                        <br>
                        <div style="background:white; color:black; padding: 30; margin: 20">
                            <?php echo $project['ground']; ?>
                        </div>
                        <br>
                    </div>
                </div>

            </div>
        </div>
       <div class="mt-3" id="design" style="border-top: 1px solid ">
        <h2 class="name-item" style="font-weight: 900; margin-left:10%; color:#E65D26; margin-top: 15px" class="text-decoration-underline">Thiết kế</h2>
        <div class="row w-100 reverse m-0"  >

                    <div class="col-md-12 col-lg-4">
                        <br>

                        <div style="padding: 15px;
                        text-align: left;">
                            <?php echo $project['design']; ?>

                        </div>
                    </div>
                    <div class="col-md-12 col-lg-8" >

                            <img class="img-design" src="{{ asset('/uploads/images/projects/' . $project->image_design) }}" alt="" style="">

                    </div>

        </div>
    </div>
    <div class="mt-3"  id="house"  style="border-top: 1px solid">
        <h2 class="name-item" style="font-weight: 900; margin-left:80%; color:#E65D26; margin-top: 15px" class="text-decoration-underline">Nhà mẫu</h2>
        <div class="row w-100 m-0">

                    <div class="col-md-12 col-lg-8">


                            <img class="img-design" src="{{ asset('/uploads/images/projects/' . $project->image_house) }}" alt="" style="">

                    </div>
                    <div class="col-md-12 col-lg-4">
                        <br>


                        <div style="padding: 15px;
                        text-align: right;">
                            <?php echo $project['model_house']; ?>

                        </div>
                    </div>
                </div>
     </div>
     <div class="mt-3"  id="furniture" style="border-top: 1px solid">
        <h2 class="name-item" style="font-weight: 900; margin-left:10%; color:#E65D26; margin-top: 15px" class="text-decoration-underline text-center">Nội thất</h1>
        <div class="row w-100 m-0 reverse"  >

                    <div class="col-md-12 col-lg-4">
                        <br>

                        <div style="padding:15px;
                        text-align:left;">
                            <?php echo $project['furniture']; ?>

                        </div>
                    </div>
                    <div class="col-md-12 col-lg-8">

                            <img class="img-design" src="{{ asset('/uploads/images/projects/' . $project->image_furniture) }}" alt="" >

                    </div>

        </div>

    </div>
        <div class="mt-3"  id="payment" style="border-top: 1px solid ; border-bottom: 1px solid ">
            <h2 class="name-item" style="font-weight: 900;margin-left:75%; color:#E65D26; margin-top: 15px" class="text-decoration-underline text-center">Giá bán & Thanh toán
            </h2>
           <div class="row w-100 m-0" >

                    <div class="col-md-12 col-lg-8">

                            <img class="img-design" src="{{ asset('/uploads/images/projects/' . $project->image_payment) }}" alt="" >

                    </div>
                    <div class="col-md-12 col-lg-4">
                        <br>


                        <div style="padding: 15px;
                        text-align: right;">
                            <?php echo $project['payment']; ?>
                        </div>
                    </div>

            </div>
        </div>
        <br>
        <br>
        <div id="ask" style="background: rgba(230, 93, 38, 0.85); width:100%;" class="w-auto p-3u">
            <h1 class="text-center text-white font-weight-bold" style="padding-top:20; padding-bottom: 20"> Câu hỏi thường gặp
            </h1>
            <div class="row detail-questions" style="">
                <div style="margin-bottom: 5%">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-outline-warning" type="button" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                    {{$project->quest_1}}
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <?php echo $project['answer_1']; ?>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-outline-warning collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        {{$project->quest_2}}
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <?php echo $project['answer_2']; ?>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-outline-warning collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        {{$project->quest_3}}
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <?php echo $project['answer_3']; ?>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-outline-warning collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        {{$project->quest_4}}

                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <?php echo $project['answer_4']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer-static')
@endsection
<script src="{{ asset('js/home.js') }}"></script>
@section('script')
@endsection
