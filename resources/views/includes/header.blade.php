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
                  <select id="search-category" class="option-drop" name="search-category">
                    <option value="">All Categories</option>
                    <option value="20">Electronics</option>
                    <option value="26">■ PC</option>
                    <option value="43">&nbsp;&nbsp;&nbsp;- Dell Inspiron</option>
                    <option value="44">&nbsp;&nbsp;&nbsp;- Hp Notebook</option>
                    <option value="47">&nbsp;&nbsp;&nbsp;- Sony Vio</option>
                    <option value="55">&nbsp;&nbsp;&nbsp;- Samsung Tablet</option>
                    <option value="27">■ Mac</option>
                    <option value="48">&nbsp;&nbsp;&nbsp;- Desktop Mac</option>
                    <option value="49">&nbsp;&nbsp;&nbsp;- Laptop Mac</option>
                    <option value="50">&nbsp;&nbsp;&nbsp;- Samsung Mac</option>
                    <option value="38">&nbsp;&nbsp;&nbsp;- Android tablets</option>
                    <option value="51">■ Laptops</option>
                    <option value="52">&nbsp;&nbsp;&nbsp;- Accer laptop</option>
                    <option value="56">&nbsp;&nbsp;&nbsp;- apple ipad</option>
                    <option value="53">&nbsp;&nbsp;&nbsp;- HP Laptop</option>
                    <option value="54">&nbsp;&nbsp;&nbsp;- DELL Laptop</option>
                    <option value="18">jewellery</option>
                    <option value="25">Components</option>
                    <option value="29">■ Mice and Trackballs</option>
                    <option value="28">■ Monitors</option>
                    <option value="35">&nbsp;&nbsp;&nbsp;- Desktop</option>
                    <option value="36">&nbsp;&nbsp;&nbsp;- LED</option>
                    <option value="30">■ Printers</option>
                    <option value="31">■ Scanners</option>
                    <option value="32">■ Web Cameras</option>
                    <option value="57">Books</option>
                    <option value="17">Interior</option>
                    <option value="24">Fashion</option>
                    <option value="33">House Hold</option>
                    <option value="34">Accessories</option>
                  </select>
                </fieldset>
              </div>
              <div class="main-search">
                <div class="header_search_toggle desktop-view">
                  <form>
                    <div class="search-box">
                      <input class="input-text" type="text" placeholder="Search entire store here...">
                      <button class="search-btn"></button>
                    </div>
                  </form>
                </div>
              </div>
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
                      <li class="level sub-megamenu">
                        <span class="opener plus"></span>
                        <a href="shop.html" class="page-scroll"><i class="fa fa-female"></i>Fashion (10)</a>
                        <div class="megamenu mobile-sub-menu">
                          <div class="megamenu-inner-top">
                            <ul class="sub-menu-level1">
                              <li class="level2">
                                <a href="shop.html"><span>Kids Fashion</span></a>
                                <ul class="sub-menu-level2 ">
                                  <li class="level3"><a href="shop.html"><span>■</span>Blazer & Coat</a></li>
                                  <li class="level3"><a href="shop.html"><span>■</span>Sport Shoes</a></li>
                                  <li class="level3"><a href="shop.html"><span>■</span>Trousers</a></li>
                                  <li class="level3"><a href="shop.html"><span>■</span>Purse</a></li>
                                  <li class="level3"><a href="shop.html"><span>■</span>Wallets</a></li>
                                  <li class="level3"><a href="shop.html"><span>■</span>Skirts</a></li>
                                  <li class="level3"><a href="shop.html"><span>■</span>Tops</a></li>
                                  <li class="level3"><a href="shop.html"><span>■</span>Sleepwear</a></li>
                                  <li class="level3"><a href="shop.html"><span>■</span>Jeans</a></li>
                                </ul>
                              </li>
                              <li  class="level2">
                                <div class="sub-menu-slider d-none d-lg-block ">
                                  <div class="row">
                                    <div class="owl-carousel sub_menu_slider">
                                      <div class="product-item">
                                        <div class="product-image"> 
                                          <a href="product-page.html"> 
                                            <img src="{{ asset('img/2.jpg') }}" alt="Stylexpo"> 
                                          </a>
                                          <div class="product-detail-inner">
                                            <div class="detail-inner-left align-center">
                                              <ul>
                                                <li class="pro-cart-icon">
                                                  <form>
                                                    <button title="Add to Cart"><span></span></button>
                                                  </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="wishlist.html" title="Wishlist"></a></li>
                                                <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-item-details">
                                          <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> 
                                          </div>
                                          <div class="price-box"> <span class="price">$80.00</span>  
                                          </div>
                                          <div class="rating-summary-block right-side">
                                            <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="product-item">
                                        <div class="product-image"> 
                                          <a href="product-page.html"> 
                                            <img src="{{ asset('img/6.jpg') }}" alt="Stylexpo"> 
                                          </a>
                                          <div class="product-detail-inner">
                                            <div class="detail-inner-left align-center">
                                              <ul>
                                                <li class="pro-cart-icon">
                                                  <form>
                                                    <button title="Add to Cart"><span></span></button>
                                                  </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="wishlist.html" title="Wishlist"></a></li>
                                                <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-item-details">
                                          <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                                          <div class="price-box"> <span class="price">$80.00</span>              
                                          </div>
                                          <div class="rating-summary-block right-side">
                                            <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="product-item">
                                        <div class="product-image"> 
                                          <a href="product-page.html"> 
                                            <img src="{{ asset('img/8.jpg') }}" alt="Stylexpo"> 
                                          </a>
                                          <div class="product-detail-inner">
                                            <div class="detail-inner-left align-center">
                                              <ul>
                                                <li class="pro-cart-icon">
                                                  <form>
                                                    <button title="Add to Cart"><span></span></button>
                                                  </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="wishlist.html" title="Wishlist"></a></li>
                                                <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-item-details">
                                          <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                                          <div class="price-box"> <span class="price">$80.00</span>  
                                          </div>
                                          <div class="rating-summary-block right-side">
                                            <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="product-item">
                                        <div class="product-image"> 
                                          <a href="product-page.html"> 
                                            <img src="{{ asset('img/10.jpg') }}" alt="Stylexpo"> 
                                          </a>
                                          <div class="product-detail-inner">
                                            <div class="detail-inner-left align-center">
                                              <ul>
                                                <li class="pro-cart-icon">
                                                  <form>
                                                    <button title="Add to Cart"><span></span></button>
                                                  </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="wishlist.html" title="Wishlist"></a></li>
                                                <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                                              </ul>
                                            </div>
                                          </div>                  
                                        </div>
                                        <div class="product-item-details">
                                          <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                                          <div class="price-box"> <span class="price">$80.00</span> 
                                          </div>
                                          <div class="rating-summary-block right-side">
                                            <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="product-item">
                                        <div class="product-image"> 
                                          <a href="product-page.html"> 
                                            <img src="{{ asset('img/16.jpg') }}" alt="Stylexpo"> 
                                          </a>
                                          <div class="product-detail-inner">
                                            <div class="detail-inner-left align-center">
                                              <ul>
                                                <li class="pro-cart-icon">
                                                  <form>
                                                    <button title="Add to Cart"><span></span></button>
                                                  </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="wishlist.html" title="Wishlist"></a></li>
                                                <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-item-details">
                                          <div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
                                          <div class="price-box"> <span class="price">$80.00</span>
                                          </div>
                                          <div class="rating-summary-block right-side">
                                            <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </li>
                      <li class="level">
                        <a href="shop.html" class="page-scroll"><i class="fa fa-camera-retro"></i>Cameras (70)</a>
                      </li>
                      <li class="level">
                        <a href="shop.html" class="page-scroll">
                          <i class="fa fa-desktop"></i>computers (10)<div class="menu-label"><span class="hot-menu"> Hot </span></div> 
                        </a>
                      </li>
                      <li class="level sub-megamenu">
                        <span class="opener plus"></span>
                        <a href="shop.html" class="page-scroll"><i class="fa fa-clock-o"></i>Wathches (15)</a>
                          <div class="megamenu mobile-sub-menu">
                            <div class="megamenu-inner-top">
                              <ul class="sub-menu-level1">
                                <li class="level2">
                                  <a href="shop.html"><span>Men Fashion</span></a>
                                  <ul class="sub-menu-level2">
                                    <li class="level3"><a href="shop.html"><span>■</span>Dresses</a></li>
                                    <li class="level3"><a href="shop.html"><span>■</span>Sport Jeans</a></li>
                                    <li class="level3"><a href="shop.html"><span>■</span>Skirts</a></li>
                                    <li class="level3"><a href="shop.html"><span>■</span>Tops</a></li>
                                    <li class="level3"><a href="shop.html"><span>■</span>Sleepwear</a></li>
                                    <li class="level3"><a href="shop.html"><span>■</span>Jeans</a></li>
                                  </ul>
                                </li>
                                <li class="level2">
                                  <a href="shop.html"><span>Women Fashion</span></a>
                                  <ul class="sub-menu-level2 ">
                                    <li class="level3"><a href="shop.html"><span>■</span>Blazer & Coat</a></li>
                                    <li class="level3"><a href="shop.html"><span>■</span>Sport Shoes</a></li>
                                    <li class="level3"><a href="shop.html"><span>■</span>Phone Cases</a></li>
                                    <li class="level3"><a href="shop.html"><span>■</span>Trousers</a></li>
                                    <li class="level3"><a href="shop.html"><span>■</span>Purse</a></li>
                                    <li class="level3"><a href="shop.html"><span>■</span>Wallets</a></li>
                                  </ul>
                                </li>
                                <li class="level2 d-none d-lg-block">
                                  <a href="shop.html">
                                    <img src="{{ asset('img/drop_banner.jpg') }}" alt="Stylexpo">
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                      </li>
                      <li class="level">
                        <a href="shop.html" class="page-scroll">
                          <i class="fa fa-shopping-bag"></i>Bags (18)<div class="menu-label"><span class="new-menu"> New </span></div>
                        </a>
                      </li>
                      <li class="level sub-megamenu ">
                        <span class="opener plus"></span>
                        <a href="shop.html" class="page-scroll"><i class="fa fa-tablet"></i>Smartphones (20)</a>
                        <div class="megamenu mobile-sub-menu">
                            <div class="megamenu-inner-top">
                              <ul class="sub-menu-level1">
                                <li class="level2">
                                  <a href="shop.html"><span>Women Clothings</span></a>
                                  <ul class="sub-menu-level2">
                                    <li class="level3"><a href="shop.html"><span>■</span>Dresses</a></li>
                                    <li class="level3"><a href="shop.html"><span>■</span>Sport Jeans</a></li>
                                    <li class="level3"><a href="shop.html"><span>■</span>Skirts</a></li>
                                    <li class="level3"><a href="shop.html"><span>■</span>Tops</a></li>
                                    <li class="level3"><a href="shop.html"><span>■</span>Sleepwear</a></li>
                                    <li class="level3"><a href="shop.html"><span>■</span>Jeans</a></li>
                                  </ul>
                                </li>
                                <li class="level2">
                                  <a href="shop.html"><span>Men Clothings</span></a>
                                  <ul class="sub-menu-level2 ">
                                    <li class="level3"><a href="shop.html"><span>■</span>Blazer & Coat</a></li>
                                    <li class="level3"><a href="shop.html"><span>■</span>Sport Shoes</a></li>
                                    <li class="level3"><a href="shop.html"><span>■</span>Phone Cases</a></li>
                                    <li class="level3"><a href="shop.html"><span>■</span>Trousers</a></li>
                                    <li class="level3"><a href="shop.html"><span>■</span>Purse</a></li>
                                    <li class="level3"><a href="shop.html"><span>■</span>Wallets</a></li>
                                  </ul>
                                </li>
                                <li class="level2">
                                  <a href="shop.html"><span>Juniors kid</span></a>
                                  <ul class="sub-menu-level2 ">
                                    <li class="level3"><a href="shop.html"><span>■</span>Blazer & Coat</a></li>
                                    <li class="level3"><a href="shop.html"><span>■</span>Sport Shoes</a></li>
                                    <li class="level3"><a href="shop.html"><span>■</span>Phone Cases</a></li>
                                    <li class="level3"><a href="shop.html"><span>■</span>Trousers</a></li>
                                    <li class="level3"><a href="shop.html"><span>■</span>Purse</a></li>
                                    <li class="level3"><a href="shop.html"><span>■</span>Wallets</a></li>
                                  </ul>
                                </li>
                              </ul>
                            </div>
                        </div>
                      </li>
                      <li class="level">
                        <a href="shop.html" class="page-scroll"><i class="fa fa-heart"></i>Software</a>
                      </li>
                      <li class="level "><a href="shop.html" class="page-scroll"><i class="fa fa-headphones"></i>Headphone (12)</a></li>
                      <li class="level">
                        <a href="shop.html" class="page-scroll"><i class="fa fa-microphone"></i>Accessories (70)</a>
                      </li>
                      <li class="level"><a href="shop.html" class="page-scroll"><i class="fa fa-bolt"></i>Printers & Ink</a></li>
                      <li class="level"><a href="shop.html" class="page-scroll"><i class="fa fa-plus-square"></i>More Categories</a></li>
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
                      <li class="float-right">
                        <a href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                      @endif
                      <li class="float-right">
                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                      @else
                      <li class="float-right">
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                        </form>
                      </li>
                      <li class="float-right">
                        <a href="/account">Account</a>
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
  