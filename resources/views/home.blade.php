@extends('master')

@section('body opening')
<body class="homepage">
<div class="se-pre-con"></div>
<div class="main">
@endsection

  @section('banner')
  @include('includes.banner')
  @endsection

  @section('content')
  <!-- SUB-BANNER START -->
  @include('includes.subbanner')
  <!-- SUB-BANNER END -->

  <!--  New arrivals Products Slider Block Start  -->
  <section class="pt-70">
    <div class="container">
      <div class="product-listing">
        <div class="row">
          <div class="col-12">
            <div class="heading-part mb-30">
              <h2 class="main_title heading"><span>New Arrivals</span></h2>
            </div>
          </div>
        </div>
        <div class="pro_cat">
          <div class="row">
            <div class="owl-carousel pro-cat-slider ">

              @foreach($newArrivals as $product)
                <div class="item">
                  <div class="product-item">
                    <div class="main-label new-label"><span>New</span></div>
                    @if($product->sale)
                    <div class="main-label sale-label"><span>Sale</span></div>
                    @endif
                    <div class="product-image">
                      <a href="/product-page/{{$product->id}}"><img src="{{Voyager::image($product->thumbnail)}}" alt='Stylexpo'></a>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="/product-page/{{$product->id}}">{{$product->name}}</a> </div>
                      <div class="price-box">
                        @if($product->sale)
                        <span class="price">{{number_format($product->price - ($product->price * $product->sale), 2, '.', '')}} &euro;</span><del class="price old-price">{{$product->price}} &euro;</del>
                        @else
                        <span class="price">{{$product->price}} &euro;</span>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  New arrivals Products Slider Block End  -->

  <!-- Top Categories Start-->
  <section class=" ptb-70">
    <div class="top-cate-bg ptb-70">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="heading-part mb-30">
              <h2 class="main_title heading"><span>Top Categories</span></h2>
            </div>
          </div>
        </div>
        <div class="pro_cat">
          <div class="row">
            <div id="top-cat-pro" class="owl-carousel sell-pro align-center">

              @foreach($topCategories as $category)
              <div class="item ">
                <a href="/shop/{{$category->slug}}">
                  <div class="item-inner">
                      <img src="{{Voyager::image($category->thumbnail)}}" alt="Stylexpo">
                    <div class="cate-detail">
                      <span>{{$category->name}}</span>
                    </div>
                  </div>
                </a>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Top Categories End-->

  <!-- perellex-banner Start
  <section>
    <div class="perellex-banner">
      <div class="container">
        <div class="row">
          <div class="col-xl-8 offset-xl-2 ptb-70 client-box">
            <div class="perellex-delail align-center">
              <div class="perellex-offer"><span class="line-bottom">Up to 50% Off on Electronics</span></div>
              <div class="perellex-title ">New computer models are releasing </div>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              <a href="/shop" class="btn btn-color">Shop Now!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
   perellex-banner End -->

  <!-- Daily Deals Start -->
  <section class=" pb-70">
    <div class="container">
      <div class="daily-deals">
        <div class="row m-0">
          <div class="col-12 p-0">
            <div class="heading-part mb-30">
              <h2 class="main_title heading"><span>Daily Deals</span></h2>
            </div>
          </div>
        </div>
        <div class="pro_cat">
          <div class="row">
            <div id="daily_deals" class="owl-carousel ">

              @foreach($dailyDeals as $product)
              <div class="item">
                <div class="product-item">
                  <div class="main-label sale-label"><span>Sale</span></div>
                  <div class="row ">
                    <div class="col-md-6 col-12 deals-img ">
                      <div class="product-image">
                        <a href="/product-page/{{$product->id}}">
                          <img src="{{Voyager::image($product->thumbnail)}}" alt="Stylexpo">
                        </a>
                      </div>
                    </div>
                    <div class="col-md-6 col-12 mt-xs-30">
                      <div class="product-item-details">
                        <div class="product-item-name">
                          <a href="/product-page/{{$product->id}}">{{$product->name}}</a>
                        </div>
                        <div class="price-box">
                          @if($product->sale)
                          <span class="price">{{number_format($product->price - ($product->price * $product->sale), 2, '.', '')}} &euro;</span><del class="price old-price">{{$product->price}} &euro;</del>
                          @else
                          <span class="price">{{$product->price}} &euro;</span>
                          @endif
                        </div>
                        <p style="max-height: 80px;overflow: hidden;text-overflow: ellipsis;">{!!$product->description!!}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Daily Deals End -->

  <!--  Site Services Features Block Start  -->
  <div class="ser-feature-block">
    <div class="container">
      <div class="center-xs">
        <div class="row">
          <div class="col-xl-3 col-md-6 service-box">
            <div class="feature-box ">
              <div class="feature-icon feature1"></div>
              <div style="cursor: default;" class="feature-detail">
                <div style="cursor: default;" class="ser-title">Free Delivery</div>
                <div style="cursor: default;" class="ser-subtitle">From $59.89</div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 service-box">
            <div class="feature-box">
              <div class="feature-icon feature2"></div>
              <div style="cursor: default;" class="feature-detail">
                <div style="cursor: default;" class="ser-title">Support 24/7</div>
                <div style="cursor: default;" class="ser-subtitle">Online 24 hours</div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 service-box">
            <div class="feature-box ">
              <div class="feature-icon feature3"></div>
              <div style="cursor: default;" class="feature-detail">
                <div style="cursor: default;" class="ser-title">Free return</div>
                <div style="cursor: default;" class="ser-subtitle">365 a day</div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 service-box">
            <div class="feature-box ">
              <div class="feature-icon feature4"></div>
              <div style="cursor: default;" class="feature-detail">
                <div style="cursor: default;" class="ser-title">Big Saving</div>
                <div style="cursor: default;" class="ser-subtitle">Weeken Sales</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--  Site Services Features Block End  -->

  <!--small banner Block Start
  <section class="pt-70">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="sub-banner small-banner small-banner1">
            <a href="/shop">
              <img src="{{ asset('img/small-banner1.jpg') }}" alt="Stylexpo">
            </a>
          </div>
        </div>
        <div class="col-lg-6 mt-sm-30">
          <div class="sub-banner small-banner small-banner2">
            <a href="/shop">
              <img src="{{ asset('img/small-banner2.jpg') }}" alt="Stylexpo">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  small banner Block Start-->

  <!--  Special products Products Slider Block Start  -->
  <section class="ptb-70">
    <div class="container">
      <div class="product-listing">
        <div class="row">
          <div class="col-12">
            <div class="row">
              <div class="col-12">
                <div class="heading-part mb-30">
                  <h2 class="main_title heading"><span>Best seller</span></h2>
                </div>
              </div>
            </div>
            <div class="pro_cat">
              <div class="row">
                <div class="owl-carousel pro-cat-slider">

                  @foreach($bestSellers as $product)
                  <div class="item">
                    <div class="product-item">
                      @if($product->sale)
                      <div class="main-label sale-label"><span>Sale</span></div>
                      @endif
                      <div class="product-image">
                        <a href="/product-page/{{$product->id}}"> <img src="{{Voyager::image($product->thumbnail)}}" alt="Stylexpo"></a>
                      </div>
                      <div class="product-item-details">
                        <div class="product-item-name"> <a href="/product-page/{{$product->id}}">{{$product->name}}</a> </div>
                        <div class="price-box">
                          @if($product->sale)
                          <span class="price">{{number_format($product->price - ($product->price * $product->sale), 2, '.', '')}} &euro;</span><del class="price old-price">{{$product->price}} &euro;</del>
                          @else
                          <span class="price">{{$product->price}} &euro;</span>
                          @endif
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  Special products Products Slider Block End  -->

  <!--Blog Block Start -->
  <section class="pb-70">
    <div class="container">
      <div class="row">
        <div class="col-12 ">
          <div class="heading-part mb-30">
            <h2 class="main_title heading"><span>Latest News</span></h2>
          </div>
        </div>
      </div>
        <div class="row">
        <div id="blog" class="owl-carousel">
            @foreach($latestNews as $post)
            <div class="item mb-md-30">
            <div class="blog-item">
              <div class="">
              <div class="blog-media">
                <img src="{{Voyager::image($post->image)}}" alt="Stylexpo">
                <div class="blog-effect"></div>
                <a href="/single-blog/{{$post->id}}" title="Click For Read More" class="read">&nbsp;</a>
              </div>
              </div>
              <div class="mt-30">
                <div class="blog-detail">
                  <div class="blog-title"><a href="/single-blog/{{$post->id}}">{{$post->title}}</a></div>
                    <a href="/single-blog/{{$post->id}}">Read more
                        <i class="fa fa-angle-double-right"></i>
                    </a>
                </div>
              </div>
            </div>
          </div>
            @endforeach

            </div>
          </div>
        </div>
  </section>
  <!--Blog Block End -->

  <!-- Brand logo block Start  -->
  <div class="brand-logo">
    <div class="container">
      <div class="row">
        <div class="col-12 ">
          <div class="heading-part mb-30">
            <h2 class="main_title heading"><span>Our Brands</span></h2>
          </div>
        </div>
      </div>
      <div class="row brand">
        <div class="col-md-12">
          <div id="brand-logo" class="owl-carousel align_center">

            @foreach($brands as $brand)
            <div class="item"><img src="{{Voyager::image($brand->logo)}}" alt="{{$brand->name}}"></div>
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Brand logo block End  -->
@endsection

@section('script')
<script>
    var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/player_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // 3. This function creates an <iframe> (and YouTube player)
    //    after the API code downloads.
    var player;
    function onYouTubePlayerAPIReady() {
      player = new YT.Player('player', {
        playerVars: {'loop': 1, 'playlist': 'Lgitw016T44', 'rel': 0, 'autoplay': 1, 'controls': 0,'autohide':1,'showinfo': 0, 'wmode':'opaque' },
        videoId: 'Lgitw016T44',
        //suggestedQuality: 'hd720',
        events: {
          'onReady': onPlayerReady}
      });
    }

    // 4. The API will call this function when the video player is ready.
    function onPlayerReady(event) {
      event.target.mute();
      event.target.setPlaybackQuality('hd720');
      //$(".video").fitVids();

      $('.video i').on('click',function() {
        if ($('.video').hasClass('on')) {
          event.target.mute();
          $('.video').removeClass('on');
        } else {
          event.target.unMute();
          $('.video').addClass('on');
        }
      });

    }

    function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.BUFFERING) {
            event.target.setPlaybackQuality('hd720');
        }
    }

</script>
@endsection
