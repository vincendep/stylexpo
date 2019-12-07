@extends('master')

@section('open body')
<body >
<div class="se-pre-con"></div>
<div class="main"> 
@endsection
  
  @section('bread crumb')
  @include('includes.breadcrumb') 
  @endsection

  @section('content')
  <section class="checkout-section ptb-70">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-8 ">
              <form class="main-form full" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row">
                  <div class="col-12 mb-20">
                    <div class="heading-part heading-bg">
                      <h2 class="heading">Customer Login</h2>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="input-box">
                      <label for="login-email">Email address</label>
                      <input id="login-email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="input-box">
                      <label for="login-pass">Password</label>
                      <input id="login-password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="check-box left-side"> 
                      <span>
                      

                        <input class="checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                      </span>
                    </div>
                
                    <button name="submit" type="submit" class="btn-color right-side">{{ __('Login') }}</button>
                  </div>
                  <div class="col-12"> <a title="Forgot Password" class="forgot-password mtb-20" href="#">Forgot your password?</a>
                    <hr>
                  </div>
                  <div class="col-12">
                    <div class="new-account align-center mt-20"> <span>New to Stylexpo?</span> <a class="link" title="Register with Stylexpo" href="register.html">Create New Account</a> </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
