<?php 

$timeNow = round(time() * 1000);
$randNumber = rand(1,10000);
$idFormRandom = "formContact_" . md5($timeNow . $randNumber);

?>
<div class="contact ">
<form action="{{route('contact')}}" method="post" id="{{ $idFormRandom }}">
            @csrf
            <div class="form-group">
                <input type="text" 
                placeholder="Họ tên"
                 class="form-control
                  @error('name') is-invalid @enderror" 
                  name="name" 
                  id="fullname"
                  required 
                  >
                @error('name')
                    <span><small>{{ $message }}</small></span>
                @enderror
            </div>
            <div class="form-group">
                <input type="phone" placeholder="Số điện thoại" class="form-control  @error('phone') is-invalid @enderror" name="phone" id="phoneNumber" required>
                @error('phone')
                <span><small>{{ $message }}</small></span>
            @enderror
            </div>
            <div class="form-group">
               <select name="id_district"class="form-control  @error('id_district') is-invalid @enderror" id="district_name" required >
                <option value="" selected disabled hidden>Quận/Huyện</option>
                   @foreach ($getDistrict as $item)
                        <option value="{{$item->id}}" >{{$item->name_local}}</option>
                   @endforeach
               </select>
               @error('id_district')
               <span ><small>{{ $message }}</small></span>
                @enderror
            </div>
            <button type="submit" class="btn btn-success btn-md btn-block">Gửi</button>
        </form>
    </div>
</div>
<script>
    $(function(){
        $("#{{$idFormRandom}}").validate({
            rules: {
                name: {
                    required:true,
                    minlength:6
                },
                phone : {
                    required:true,
                    minlength:10,
                    regx:/^[0-9-+]+$/
                },
                id_district: {
                    required:true,
                },
            },
            messages:{
                name: {
                    required:"Mời bạn điền đầy đủ thông tin ",
                    minlength:"Mời bạn nhập trên 6 ký tự "
                },
                phone : {
                    required:"Mời bạn nhập số điện thoại",
                    minlength:"mời bạn nhập đủ 10 số",
                    regx:"số từ 0-9"
                },
                id_district: {
                    required:"Mời bạn chọn quận huyện ",
                },
            }
        })
    })
</script>


