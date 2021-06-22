@extends('layouts.index')

@section('head_title')
  {{ config('app.name', 'DANHBA.NET - Trang đăng ký') }}
@endsection

@section('content')
<div class="page-header login-page header-filter" filter-color="black" style="background-image: url('assets/img/register.jpg'); background-size: cover; background-position: top center;">
  <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
        <form class="form" method="POST" action="{{ route('register') }}">
          @csrf

          <div class="card card-login card-hidden">
            <div class="card-header card-header-rose text-center">
              <h4 class="card-title">Đăng ký</h4>
              <!-- <div class="social-line">
                <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                  <i class="fa fa-facebook-square"></i>
                </a>
                <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                  <i class="fa fa-twitter"></i>
                </a>
                <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                  <i class="fa fa-google-plus"></i>
                </a>
              </div> -->
            </div>
            <div class="card-body ">
              <span class="bmd-form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">face</i>
                    </span>
                  </div>
                  <input type="text" name="name" class="form-control" placeholder="Họ tên ..." value="{{ old('name') }}">

                  @if ($errors->has('name'))
                    <span class="invalid-feedback text-right" style="display: block;">
                      <strong>{{ $errors->first('name') }}</strong>
                    </span>
                  @endif
                </div>
              </span>
              <span class="bmd-form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">email</i>
                    </span>
                  </div>
                  <input type="email" name="email" class="form-control" placeholder="Email ..." value="{{ old('email') }}">
                  
                  @if ($errors->has('email'))
                    <span class="invalid-feedback text-right" style="display: block;">
                      <strong>{{ $errors->first('email') }}</strong>
                    </span>
                  @endif
                </div>
              </span>
              <span class="bmd-form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Mật khẩu ...">

                  @if ($errors->has('password'))
                    <span class="invalid-feedback text-right" style="display: block;">
                      <strong>{{ $errors->first('password') }}</strong>
                    </span>
                  @endif
                </div>
              </span>
              <span class="bmd-form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock</i>
                    </span>
                  </div>
                  <input type="password" name="password_confirmation" class="form-control" placeholder="Xác nhận mật khẩu ...">
                </div>
              </span>
            </div>
            <div class="card-footer justify-content-center">
              @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                  {{ __('Quên mật khẩu?') }}
                </a>
              @endif

              <button type="submit" class="btn btn-success btn-link btn-lg">Đăng ký</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  @include('layouts.footer')
  
</div>
@endsection