<footer class="footer-static" id="footer-static">
  <div class="container">
    <div class="row footer-top">
      <div class="footer-col-1 col-xs-12 col-md-5">
        {{-- <h4 class="footer-title">thuechungcuhn.me</h4> --}}
        <a href="">
        <img src="{{asset('assets/img/Logo (2).png')}}" alt="">
        </a>
        <ul>
          <li>
            <i class="fa fa-envelope"></i> Email: fmi.jsc@gmail.com
          </li>
          <li>
            <i class="fa fa-bolt"></i>  Hotline: 091 314 45 99
          </li>
           <li>
            <i class="fa fa-map-marker"></i> Address: 36A Nguyễn Gia Trí, Phường 25, Quận Bình Thành, Tp.Hồ Chí Minh.
          </li>
        </ul>
      </div>

      <div class="footer-col-2 col-xs-12 col-md-7">
        <div clas="row">
            <div clas="col-xs-12 col-md-6">
               <div class="footer-block">

              </div>
          </div>

          <div clas="col-xs-12 col-md-6">
            <div class="footer-block">
          <h4 class="footer-title">Chung cư theo khu vực</h4>
          @include('layouts.footer-menu')
        </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="row">
        <div class="col-md-4 col-12 coppyright">
          <i class="fas fa-copyright"></i><span>Bản quyền © 2020 thuộc về spaceland.vn</span>
        </div>
        <div class="col-md-8 col-12">
          {{-- <ul class="social-contact ">
            <li><a href=""><i class="fab fa-facebook"></i></a></li>
            <li><a href=""><i class="fab fa-youtube"></i></a></li>
            <li><a href=""><i class="fas fa-envelope"></i></a></li>
          </ul> --}}
        </div>
      </div>
    </div>
  </div>
</footer>
