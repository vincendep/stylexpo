@extends('master')

@section('open body')
<body >
  <div class="se-pre-con"></div>
  <div class="main"> 
    @endsection

    @section('bread crumb')
    @include('includes/breadcrumb')
    @endsection

    @section('content')
    <section class="checkout-section ptb-70">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="row justify-content-center">
              <div class="col-xl-6 col-lg-8 col-md-8 ">
                <form class="main-form full" method="POST" action="{{ route('register') }}">
                  @csrf
                  <div class="row">
                    <div class="col-12 mb-20">
                      <div class="heading-part heading-bg">
                        <h2 class="heading">{{ __('Register') }}</h2>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="input-box">

                        <label for="name">{{ __('Name') }}</label>

                        
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="input-box">
                        

                        <label for="email" >{{ __('E-Mail Address') }}</label>

                        
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        
                      </div>
                    </div>
                    
                    <div class="col-12">
                      <div class="input-box">
                        

                        <label for="password">{{ __('Password') }}</label>

                        
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="input-box">
                        

                        <label for="password-confirm">{{ __('Confirm Password') }}</label>

                        
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        
                      </div>
                    </div>
                    <div class="col-12">
                      
                      <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                      </button>
                    </div>
                    <div class="col-12">
                      <hr>
                      <div class="new-account align-center mt-20"> <span>Already have an account with us</span> <a class="link" title="Register with Stylexpo" href="{{ route('login') }}">Login Here</a> </div>
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