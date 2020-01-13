@extends('master')

@section('open body')
<body  class="product-page">
<div class="se-pre-con"></div>
<div class="main">
@endsection

  @section('bread bread crumb')
  @include('includes/breadcrumb')
  @endsection

  @section('content')
  <section class="pt-70">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <div class="row">
            <div class="col-lg-5 col-md-5 mb-xs-30">
              <div class="fotorama" data-nav="thumbs" data-allowfullscreen="native">
                <a href="#"><img src="{{Voyager::image($product->thumbnail)}}" alt="{{$product->name}}"></a>

                @foreach($product->images as $image)
                <a href="#"><img src="{{Voyager::image($image->url)}}" alt="{{$product->name}}"></a>
                @endforeach

              </div>
            </div>
            <div class="col-lg-7 col-md-7">
              <div class="row">
                <div class="col-12">
                  <div class="product-detail-main">
                    <div class="product-item-details">
                      <h1 class="product-item-name">{{$product->name}}</h1>
                      <div class="rating-summary-block">
                        <div title="53%" class="rating-result"><span style="width:53%"></span> </div>
                      </div>
                      <div class="price-box">
                        @if($product->sale)
                        <span class="price">{{number_format($product->price - ($product->price * $product->sale), 2, '.', '')}} &euro;</span><del class="price old-price">{{$product->price}} &euro;</del>
                        @else
                        <span class="price">{{$product->price}} &euro;</span>
                        @endif
                      </div>
                      <div class="product-info-stock-sku">
                        <div>
                          <label>Availability: </label>
                          <span class="info-deta">{{$product->quantity > 0 ? 'In stock' : 'Out of stock'}}</span>
                        </div>
                      </div>
                      <p>{{$product->description}}</p>
                      <div class="product-size select-arrow input-box select-dropdown mb-20 mt-30">
                        <label>Size</label>
                        <fieldset>
                          <select name="size" form="add-to-cart-form" class="selectpicker form-control option-drop" id="select-by-size">

                            @foreach($product->sizes as $size)
                            <option value="{{$size->id}}">{{$size->name}}</option>
                            @endforeach

                          </select>
                        </fieldset>
                      </div>
                      <div class="product-color select-arrow input-box select-dropdown mb-20">
                        <label>Color</label>
                        <fieldset>
                          <select form="add-to-cart-form" name="color" class="selectpicker form-control option-drop" id="select-by-color">

                            @foreach($product->colors as $color)
                            <option value="{{$color->id}}">{{$color->name}}</option>
                            @endforeach

                          </select>
                        </fieldset>
                      </div>
                      <div class="mb-20">
                        <div class="product-qty">
                          <label for="qty">Qty:</label>
                          <div class="custom-qty">
                            <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) result.value--;return false;" class="reduced items" type="button"> <i class="fa fa-minus"></i> </button>
                            <input form="add-to-cart-form" type="text" class="input-text qty" title="Qty" value="1" maxlength="8" id="qty" name="quantity">
                            <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items" type="button"> <i class="fa fa-plus"></i> </button>
                          </div>
                        </div>
                        <div class="bottom-detail cart-button">
                          <ul>
                            <li class="pro-cart-icon">
                              <form id="add-to-cart-form" action="/cart-items" method="post">
                                @csrf
                                <input type="hidden" name="product" value="{{$product->id}}"/>
                                <button type="submit" title="Add to Cart" class="btn-color"><span></span>Add to Cart</button>
                              </form>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="bottom-detail">
                        <ul>
                          <li class="pro-wishlist-icon">
                            <form action="/wish-items" method="post">
                              @csrf
                              <input type="hidden" name="product" value="{{$product->id}}"/>
                              <button style="background-color: white; color: gray" type="submit">
                                <span></span>
                                Wishlist
                              </button>
                            </form>
                          </li>
                          <li class="pro-email-icon"><a href="#"><span></span>Email to Friends</a></li>
                        </ul>
                      </div>
                      <div class="share-link">
                        <label>Share This : </label>
                        <div class="social-link">
                          <ul class="social-icon">
                            <li><a class="facebook" title="Facebook" href="#"><i class="fa fa-facebook"> </i></a></li>
                            <li><a class="twitter" title="Twitter" href="#"><i class="fa fa-twitter"> </i></a></li>
                            <li><a class="linkedin" title="Linkedin" href="#"><i class="fa fa-linkedin"> </i></a></li>
                            <li><a class="rss" title="RSS" href="#"><i class="fa fa-rss"> </i></a></li>
                            <li><a class="pinterest" title="Pinterest" href="#"><i class="fa fa-pinterest"> </i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="brand-logo-pro align-center mb-30">
            <img src="{{Voyager::image($product->brand->logo)}}" alt="{{$product->brand->name}}">
          </div>
          <div class="sub-banner-block align-center">
            <img src="{{ asset('img/pro-banner.jpg') }}" alt="Stylexpo">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ptb-70">
    <div class="container">
      <div class="product-detail-tab">
        <div class="row">
          <div class="col-lg-12">
            <div id="tabs">
              <ul class="nav nav-tabs">
                <li><a class="tab-Description selected" title="Description">Description</a></li>
                <li><a class="tab-Product-Tags" title="Product-Tags">Product-Tags</a></li>
                <li><a class="tab-Reviews" title="Reviews">Reviews</a></li>
              </ul>
            </div>
            <div id="items">
              <div class="tab_content">
                <ul>
                  <li>
                    <div class="items-Description selected ">
                      <div class="Description"> <strong>{{$product->name}}</strong><br />
                        <p>{{$product->description}}</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="items-Product-Tags"><strong>Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</strong><br />
                      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur</div>
                  </li>
                  <li>
                    <div class="items-Reviews">
                      <div class="comments-area">
                        <h4>Comments<span>(2)</span></h4>
                        <ul class="comment-list mt-30">
                          <li>
                            <div class="comment-user"> <img src="{{ asset('img/comment-user.jpg') }}" alt="Stylexpo"> </div>
                            <div class="comment-detail">
                              <div class="user-name">John Doe</div>
                              <div class="post-info">
                                <ul>
                                  <li>Fab 11, 2016</li>
                                  <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                </ul>
                              </div>
                              <p>Consectetur adipiscing elit integer sit amet augue laoreet maximus nuncac.</p>
                            </div>
                            <ul class="comment-list child-comment">
                              <li>
                                <div class="comment-user"> <img src="{{ asset('img/comment-user.jpg') }}" alt="Stylexpo"> </div>
                                <div class="comment-detail">
                                  <div class="user-name">John Doe</div>
                                  <div class="post-info">
                                    <ul>
                                      <li>Fab 11, 2016</li>
                                      <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                    </ul>
                                  </div>
                                  <p>Consectetur adipiscing elit integer sit amet augue laoreet maximus nuncac.</p>
                                </div>
                              </li>
                              <li>
                                <div class="comment-user"> <img src="{{ asset('img/comment-user.jpg') }}" alt="Stylexpo"> </div>
                                <div class="comment-detail">
                                  <div class="user-name">John Doe</div>
                                  <div class="post-info">
                                    <ul>
                                      <li>Fab 11, 2016</li>
                                      <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                    </ul>
                                  </div>
                                  <p>Consectetur adipiscing elit integer sit amet augue laoreet maximus nuncac.</p>
                                </div>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <div class="comment-user"> <img src="{{ asset('img/comment-user.jpg') }}" alt="Stylexpo"> </div>
                            <div class="comment-detail">
                              <div class="user-name">John Doe</div>
                              <div class="post-info">
                                <ul>
                                  <li>Fab 11, 2016</li>
                                  <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                </ul>
                              </div>
                              <p>Consectetur adipiscing elit integer sit amet augue laoreet maximus nuncac.</p>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="main-form mt-30">
                        <h4>Leave a comments</h4>
                        <form >
                          <div class="row mt-30">
                            <div class="col-md-4 mb-30">
                              <input type="text" placeholder="Name" required>
                            </div>
                            <div class="col-md-4 mb-30">
                              <input type="email" placeholder="Email" required>
                            </div>
                            <div class="col-md-4 mb-30">
                              <input type="text" placeholder="Website" required>
                            </div>
                            <div class="col-12 mb-30">
                              <textarea cols="30" rows="3" placeholder="Message" required></textarea>
                            </div>
                            <div class="col-12 mb-30">
                              <button class="btn btn-color" name="submit" type="submit">Submit</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @if ($relatedProducts->first())
  <section class="pb-70">
    <div class="container">
      <div class="product-listing">
        <div class="row">
          <div class="col-12">
            <div class="heading-part mb-40">
              <h2 class="main_title heading"><span>Related Products</span></h2>
            </div>
          </div>
        </div>
        <div class="pro_cat">
          <div class="row">
            <div class="owl-carousel pro-cat-slider">
              @foreach($relatedProducts as $product)
              <div class="item">
                <div class="product-item">
                  @if($product->sale)
                  <div class="main-label sale-label"><span>Sale</span></div>
                  @endif
                  <div class="product-image">
                    <a href="\product-page\{{$product->id}}"> <img src="{{Voyager::image($product->thumbnail)}}" alt="{{$product->name}}"></a>
                  </div>
                  <div class="product-item-details">
                    <div class="product-item-name">
                      <a href="\product-page\{{$product->id}}">{{$product->name}}</a>
                    </div>
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
  @endif
  @endsection
