@extends('layouts.login')

@section('head_title')
  {{ config('app.name', 'Trang đăng nhập') }}
@endsection

@section('content')
<div class="page-header login-page header-filter" filter-color="black">

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
        
    <div class="login-form">
      <form class="form" method="POST" action="{{ route('login') }}">
        @csrf
          <h2 class="text-center"> <img src="{{asset('assets/img/logo.png')}}" alt=""></h2>       
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email ..." value="{{ old('email') }}">
                  
            @if ($errors->has('email'))
              <span class="invalid-feedback text-right" style="display: block;">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
          </div>
          <div class="form-group">
            <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Mật khẩu ...">

            @if ($errors->has('password'))
              <span class="invalid-feedback text-right" style="display: block;">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
            @endif
          </div>
          <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
          </div>     
      </form>
      </div>
      </div>
    </div>
  </div>

  
  
</div>

@endsection

