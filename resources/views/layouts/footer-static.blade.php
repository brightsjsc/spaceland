<footer class="footer-static">
  <div class="container">
    <div class="row footer-top">
      <div class="footer-col-1 col-xs-12 col-md-5">
        {{-- <h4 class="footer-title">thuechungcuhn.me</h4> --}}
        <a href="">
        <img src="{{asset('assets/img/Logo (2).png')}}" alt="">
        </a>
        <ul>
          <li>
            <i class="fa fa-envelope"></i> Email: thuechungcuhn2020@gmail.com
          </li>
          <li>
            <i class="fa fa-phone"></i> Mobile: 0985.622.139
          </li>
          <li>
            <i class="fa fa-bolt"></i>  Hotline: 0969.856.985
          </li>
           <li>
            <i class="fa fa-map-marker"></i>  Add: CT2A Nam Cường, Cổ Nhuế, Bắc Từ Liêm, TP Hà Nội.
          </li>
        </ul>
      </div>

      <div class="footer-col-2 col-xs-12 col-md-7">
        <div clas="row">
            <div clas="col-xs-12 col-md-6">
               <div class="footer-block">
                <h4 class="footer-title">Về chúng tôi</h4>
                <ul>
                  <li>
                    <a href="#">Báo giá & hỗ trợ</a>
                  </li>
                  <li>
                    <a href="#">Câu hỏi thường gặp</a>
                  </li>
                  <li>
                    <a href="#">Về chúng tôi</a>
                  </li>
                  <li>
                    <a href="{{}}">Liên hệ</a>
                  </li>
                </ul>
              </div>
          </div>

          <div clas="col-xs-12 col-md-6">
            <div class="footer-block">
          <h4 class="footer-title">Chung cư theo quận</h4>
          @include('layouts.footer-menu')
        </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="row">
        <div class="col-md-4 col-12 coppyright">
          <i class="fas fa-copyright"></i><span>Bản quyền © 2020 thuộc về thuechungcuhn.me</span>
        </div>
        <div class="col-md-8 col-12">
          <ul class="social-contact ">
            <li><a href=""><i class="fab fa-facebook"></i></a></li>
            <li><a href=""><i class="fab fa-youtube"></i></a></li>
            <li><a href=""><i class="fas fa-envelope"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
