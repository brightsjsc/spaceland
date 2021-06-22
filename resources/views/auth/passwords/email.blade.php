@extends('layouts.index')

@section('content')
<div class="page-header login-page header-filter" filter-color="black" 
    style="background-image: url({{ asset('assets/img/login.jpg') }}); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
                <form class="form" method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="card card-reset card-hidden">
                        <div class="card-header card-header-rose card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">lock</i>
                            </div>
                            <h4 class="card-title">{{ __('Thay đổi mật khẩu') }}</h4>
                        </div>

                        <div class="card-body">
                            @if (session('status'))
                                <span class="text-success ml-auto mr-auto">
                                    <strong>{{ session('status') }}</strong>
                                </span>
                            @endif

                            <div class="form-group bmd-form-group">
                                <label for="emails" class="bmd-label-floating"> Email Address *</label>
                                <input type="email" value="{{ old('email') }}" class="form-control" id="emails" required="true" name="email" aria-required="true">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback text-center" style="display: block;">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-rose">{{ __('Send Password Reset Link') }}</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</div>
@endsection
