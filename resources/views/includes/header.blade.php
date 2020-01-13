<!-- HEADER START -->
<header class="navbar navbar-custom container-full-sm" id="header">
    <div class="header-middle">
      <div class="container">
        <hr>
        <div class="row">
          <div class="col-xl-3 col-md-3 col-lgmd-20per">
            <div class="header-middle-left">
              <div class="navbar-header float-none-sm">
                <a class="navbar-brand page-scroll" href="/">
                  <img alt="Stylexpo" src="{{ asset('img/logo.png') }}">
                </a>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-md-6 col-lgmd-60per">
            <div class="header-right-part">
              <div class="category-dropdown select-dropdown">
                <fieldset>
                  <select class="option-drop" name="category" id="category-dropdown">
                    <option value="">All categories</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->slug}}">{{$category->name}}</option>
                    @endforeach
                  </select>
                </fieldset>
              </div>
              <div class="main-search">
                <div class="header_search_toggle desktop-view">
                  <div class="search-box">
                    <input id="shop-query" class="input-text" type="text" name="q" placeholder="Search entire store here...">
                    <button onclick="shop()" class="search-btn"></button>
                  </div>
                  <script type="text/javascript">
                    function shop() {
                      let shopQuery = document.getElementById('shop-query').value;
                      let categorySlug = document.getElementById('category-dropdown').value;
                      let url = categorySlug ? '/shop/' + categorySlug : '/shop';
                      url = shopQuery ? url + "?q=" + shopQuery : url;
                      location.assign(url);
                    }
                  </script>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-3 col-lgmd-20per">
            <div class="right-side float-left-xs header-right-link">
              <ul>
                <li class="wishlist-icon">
                  <a href="/wishlist">
                    <span></span>
                  </a>
                </li>
                <li class="cart-icon">
                  <a href="/cart">
                    <span>@if($cart)<small class="cart-notification">{{$cart->size()}}</small>@endif</span>
                  </a>
                  @if($cart && $cart->size() > 0)
                  <div class="cart-dropdown header-link-dropdown">
                    <ul class="cart-list link-dropdown-list">
                      @foreach($cart->cartItems as $item)
                      <li ><a class="close-cart"><i class="fa fa-times-circle"></i></a>
                        <div class="media"> <a class="pull-left"> <img alt="{{$item->product->name}}" src="{{Voyager::image($item->product->thumbnail)}}"></a>
                          <div class="media-body"><span><a href="/product-page/{{$item->product->id}}">{{$item->product->name}}</a></span>
                            <p class="cart-price">{{$item->product->price}}</p>
                            <div class="product-qty">
                              <label>Qty: {{$item->quantity}}</label>
                            </div>
                          </div>
                        </div>
                      </li>
                      @endforeach
                    </ul>
                    <p class="cart-sub-totle">
                      <span class="pull-left">Cart Subtotal</span><span class="pull-right"><strong class="price-box">{{$cart->total()}} &euro;</strong></span>
                    </p>
                    <div class="clearfix"></div>
                    <div class="mt-20"> <a href="/cart" class="btn-color btn">Cart</a> <a href="/checkout" class="btn-color btn right-side">Checkout</a> </div>
                  </div>
                  @endif
                </li>
                <li class="side-toggle">
                  <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"><i class="fa fa-bars"></i></button>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-bottom">
      <div class="container">
        <div class="row position-r">
          <div class="col-xl-2 col-lg-3 col-lgmd-20per position-initial">
            <div class="sidebar-menu-dropdown home">
              <a class="btn-sidebar-menu-dropdown"><span></span> Categories </a>
              <div id="cat" class="cat-dropdown">
                <div class="sidebar-contant">
                  <div id="menu" class="navbar-collapse collapse" >
                    <div class="top-right-link mobile right-side">
                      <ul>
                        <li class="login-icon content">
                          <a class="content-link">
                          <span class="content-icon"></span>
                          </a>
                          <a href="login.html" title="Login">Login</a> or
                          <a href="register.html" title="Register">Register</a>
                          <div class="content-dropdown">
                            <ul>
                              <li class="login-icon"><a href="login.html" title="Login"><i class="fa fa-user"></i> Login</a></li>
                              <li class="register-icon"><a href="register.html" title="Register"><i class="fa fa-user-plus"></i> Register</a></li>
                            </ul>
                          </div>
                        </li>
                        <li class="track-icon">
                          <a title="Track your order"><span></span> Track your order</a>
                        </li>
                        <li class="gift-icon">
                          <a href="" title="Gift card"><span></span> Gift card</a>
                        </li>
                      </ul>
                    </div>
                    <ul class="nav navbar-nav ">
                      @foreach($categories as $category)
                      <li class="level">
                        <a href="/shop/{{$category->slug}}" class="page-scroll">{{$category->name}}</a>
                      </li>
                      @endforeach
                    </ul>
                    <div class="header-top mobile">
                      <div class="">
                        <div class="row">
                          <div class="col-12">
                            <div class="top-link top-link-left select-dropdown ">
                              <fieldset>
                                <select name="speed" class="country option-drop">
                                  <option selected="selected">English</option>
                                  <option>Frence</option>
                                  <option>German</option>
                                </select>
                                <select name="speed" class="currency option-drop">
                                  <option selected="selected">USD</option>
                                  <option>EURO</option>
                                  <option>POUND</option>
                                </select>
                              </fieldset>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="top-link right-side">
                              <div class="help-num" >Need Help? : 03 233 455 55</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-xl-9 col-lg-9 col-lgmd-80per">
            <div class="bottom-inner">
              <div class="position-r">
                <div class="nav_sec position-r">
                  <div class="mobilemenu-title mobilemenu">
                    <span>Menu</span>
                    <i class="fa fa-bars pull-right"></i>
                  </div>
                  <div class="mobilemenu-content">
                    <ul class="nav navbar-nav" id="menu-main">
                      <li class="{{ request()->is('/') ? 'active' : '' }}">
                        <a href="/"><span>Home</span></a>
                      </li>
                      <li class="{{ request()->is('shop*') ? 'active' : '' }}">
                        <a href="/shop"><span>Shop</span></a>
                      </li>
                      <li class="{{ request()->is('about') ? 'active' : '' }}">
                        <a href="/about"><span>About Us</span></a>
                      </li>
                      <li class="{{ request()->is('blog') ? 'active' : '' }}">
                        <a href="/blog"><span>Blog</span></a>
                      </li>
                      <li class="{{ request()->is('contact') ? 'active' : '' }}">
                        <a href="/contact"><span>Contact</span></a>
                      </li>
                      @guest
                      @if (Route::has('register'))
                      <li class="float-right {{ request()->is('register') ? 'active' : '' }}">
                        <a href="{{ route('register') }}"><span>{{ __('Register') }}</span></a>
                      </li>
                      @endif
                      <li class="float-right {{ request()->is('login') ? 'active' : '' }}">
                        <a href="{{ route('login') }}"><span>{{ __('Login') }}</span></a>
                      </li>
                      @else
                      <li class="float-right">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                          <span>{{ __('Logout') }}</span>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                        </form>
                      </li>
                      <li class="float-right {{ request()->is('account') ? 'active' : '' }}">
                        <a href="/account"><span>Account<span></a>
                      </li>
                      @endguest
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- HEADER END -->
