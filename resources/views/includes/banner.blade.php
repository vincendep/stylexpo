<!-- BANNER START -->
<section class="">
    <div id="owl-example" class="banner owl-carousel">
      <div class="main-banner">
        @foreach ($banners as $banner)
        <div class="item">
          <div class="banner-1"> <img src="{{Voyager::image($banner->image)}}" alt="Stylexpo">
            <div class="banner-detail">
              <div class="container">
                <div class="row">
                  <div class="col-4"></div>
                  <div class="co-8">
                    <div class="banner-detail-inner">
                      <span style="text-transform: uppercase;" class="slogan">{{$banner->sale_text}}</span>
                      <h1 class="banner-title">{!! $banner->title !!}</h1>
                      <span class="offer">{!!$banner->excerpt!!}</span>
                    </div>
                    <a class="btn btn-color" href="/shop/{{$banner->category->slug ?? ''}}">Shop Now!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach

        {{-- <div class="item">
          <div class="banner-video wrap-video">
            <div class="video fluid-width-video-wrapper" style="padding-top: 56.25%;">
              <div id="player"></div>
            </div>
            <div class="banner-detail align-center">
              <div class="container">
                <div class="row">
                  <div class="col-12">
                    <div class="banner-detail-inner">
                      <h1 class="banner-title">Stylexpo Men & Women Fashion</span></h1>
                      <span class="offer">UP TO 25% OFF</span>
                    </div>
                      <a class="btn btn-color" href="/shop">Shop Now!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="banner-2"> <img src="{{ asset('img/banner2.jpg') }}" alt="Stylexpo">
            <div class="banner-detail">
              <div class="container">
                <div class="row">
                  <div class="col-8">
                    <div class="banner-detail-inner">
                      <span class="slogan">new look</span>
                      <h1 class="banner-title">Smart Watches For<br><span> Men & Women</span></h1>
                      <span class="offer">Most Popular Brand Products 20% off</span>
                    </div>
                      <a class="btn btn-color" href="/shop">Shop Now!</a>
                  </div>
                  <div class="col-4"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="banner-3"> <img src="{{ asset('img/banner3.jpg') }}" alt="Stylexpo">
            <div class="banner-detail">
              <div class="container">
                <div class="row">
                  <div class="col-lg-5 col-md-4 col-4"></div>
                  <div class="col-lg-7 col-md-8 col-8">
                    <div class="banner-detail-inner">
                      <span class="slogan">UP TO 30% OFF</span>
                      <h1 class="banner-title">Get latest headphone</h1>
                      <span class="offer">Get the top brands for headphone</span>
                    </div>
                      <a class="btn btn-color" href="/shop">Shop Now!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
      </div>
    </div>
  </section>
  <!-- BANNER END -->
