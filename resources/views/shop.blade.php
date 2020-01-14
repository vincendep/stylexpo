@extends('master')

@section('body opening')
<body >
<div class="se-pre-con"></div>
<div class="main">
@endsection

  @section('bread crumb')
  @include('includes.breadcrumb')
  @endsection

  @section('content')
  <!-- CONTAIN START -->
  <section class="ptb-70">
    <div class="container">
      <div class="row">
        <div class="col-xl-2 col-lg-3 mb-sm-30 col-lgmd-20per">
          <div class="sidebar-block">
            <div class="sidebar-box listing-box mb-40"> <span class="opener plus"></span>
              <div class="sidebar-title">
                <h3><span>Categories</span></h3>
              </div>
              <div class="sidebar-contant">
                <ul>
                    @foreach($categories as $category)
                        <li><a class="{{request()->is('shop/' . $category->slug) ? 'active-link' : ''}}" href="/shop/{{$category->slug}}">{{$category->name}}</a></li>
                    @endforeach
                </ul>
              </div>
            </div>
            <div class="sidebar-box mb-40"> <span class="opener plus"></span>
              <div class="sidebar-title">
                <h3><span>Shop by</span></h3>
              </div>
              <div class="sidebar-contant">
                <!--
                <div class="price-range mb-30">
                  <div class="inner-title">Price range</div>
                  <input class="price-txt" type="text" id="amount">
                  <div id="slider-range"></div>
                </div>
                -->
                <form id="filter-form" action="{{Request::url()}}" method="GET">
                  <div class="size mb-20">
                    <div class="inner-title">Size</div>
                    <ul>
                      @foreach($sizes as $size)
                      <li>
                        <label style="text-transform: uppercase;">
                          <input @if(Request::input('size') && in_array($size->name, Request::input('size'))) checked @endif type="checkbox" name="size[]" value="{{$size->name}}"/>
                          &nbsp;{{$size->name}}
                        </label>
                      </li>
                      @endforeach
                    </ul>
                  </div>
                  <div class="mb-20">
                    <div class="inner-title">Color</div>
                    <ul>
                      @foreach($colors as $color)
                      <li>
                        <label style="text-transform: capitalize;">
                          <input @if(Request::input('color') && in_array($color->name, Request::input('color'))) checked @endif type="checkbox" name="color[]" value="{{$color->name}}"/>&nbsp;{{$color->name}}
                        </label>
                      </li>
                      @endforeach
                    </ul>
                  </div>
                  <input type="submit" class="btn btn-color" value="Refine"/>
                </form>
              </div>
            </div>
            <div class="sidebar-box mb-40 d-none d-lg-block">
              <a href="#">
                <img src="{{ asset('img/left-banner.jpg') }}" alt="Stylexpo">
              </a>
            </div>
            <div class="sidebar-box sidebar-item"> <span class="opener plus"></span>
              <div class="sidebar-title">
                <h3><span>Best Seller</span></h3>
              </div>
              <div class="sidebar-contant">
                <ul>

                  @foreach($bestSellers as $bestSeller)
                  <li>
                    <div class="pro-media"><a href="#"><img alt="{{$bestSeller->name}}" src="{{Voyager::image($bestSeller->thumbnail)}}"></a></div>
                    <div class="pro-detail-info"><a href="#">{{$bestSeller->name}}</a>
                      <div class="rating-summary-block">
                        <div class="rating-result" title="53%"> <span style="width:53%"></span> </div>
                      </div>
                      <div class="price-box"> <span class="price">{{$bestSeller->price}}</span> </div>
                      <div class="cart-link">
                        <form>
                          <button title="Add to Cart">Add To Cart</button>
                        </form>
                      </div>
                    </div>
                  </li>
                  @endforeach

                </ul>
              </div>
            </div>
          </div>
        </div>
        <div id="product-listing" class="col-xl-10 col-lg-9 col-lgmd-80per">
          <div class="shorting mb-30">
            <div class="row">
              <div class="col-lg-6">
                <div class="short-by float-right-sm"> <span>Sort By :</span>
                  <div class="select-item select-dropdown">
                    <fieldset>
                      <select name="order" form="filter-form" onchange="this.form.submit()">
                        <option @if(Request::input('order') && Request::input('order') == 'asc-name')) selected="" @endif value="asc-name">Name (A to Z)</option>
                        <option @if(Request::input('order') && Request::input('order') == 'desc-name')) selected="" @endif value="desc-name">Name(Z - A)</option>
                        <option @if(Request::input('order') && Request::input('order') == 'asc-price')) selected="" @endif value="asc-price">price(low&gt;high)</option>
                        <option @if(Request::input('order') && Request::input('order') == 'desc-price')) selected="" @endif value="desc-price">price(high &gt; low)</option>
                        <option @if(Request::input('order') && Request::input('order') == 'desc-rating')) selected="" @endif value="desc-rating">rating(highest)</option>
                        <option @if(Request::input('order') && Request::input('order') == 'asc-rating')) selected="" @endif value="asc-rating">rating(lowest)</option>
                      </select>
                    </fieldset>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="show-item right-side float-right-sm"> <span>Show :</span>
                  <div class="select-item select-dropdown">
                    <fieldset>
                      <select onchange="updateProductsPerPage(this)" id="products-per-page">
                        <option value="4" selected="selected">4</option>
                        <option value="8">8</option>
                        <option value="12">12</option>
                        <option value="24">24</option>
                      </select>
                    </fieldset>
                  </div>
                  <span>Per Page</span>
                </div>
              </div>
            </div>
          </div>
          <div class="product-listing">
            <div class="inner-listing">
              <div class="row">

                @foreach($products as $product)
                <div class="col-md-4 col-6 item-width mb-30 item-box">
                  <div class="product-item">
                    @if ($product->sale)
                    <div class="main-label sale-label"><span>Sale</span></div>
                    @endif
                    <div class="product-image"><a href="/product-page/{{$product->id}}"><img src="{{Voyager::image($product->thumbnail)}}" alt="{{$product->name}}"></a>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"><a href="/product-page/{{$product->id}}">{{$product->name}}</a></div>
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
              <div class="row">
                <div class="col-12">
                  <div class="pagination-bar">
                    <ul id="pagination-bar">
                      <!--<li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#"><i class="fa fa-angle-right"></i></a></li>-->
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- CONTAINER END -->
  <script type="text/javascript">
    var numberOfPages = undefined;
    var currPage = 1;
    var productsPerPage = document.getElementById('products-per-page').value;
    var products = document.getElementsByClassName("item-box");

    function showProducts() {
      for(let product of products) {
        product.style.display = "none";
      }
      for(let i = currPage * productsPerPage - productsPerPage; i < currPage * productsPerPage && i < products.length; i++) {
        products[i].style.display = "block";
      }
    }

    function updateProductsPerPage(select) {
      if (!select) {
        select = document.getElementById('products-per-page');
      }
      currPage = 1;
      productsPerPage = select.value;

      showProducts();
      generatePagination();
    }

    function generatePagination() {
      let paginationBar = document.getElementById('pagination-bar');
      numberOfPages = Math.ceil(products.length / productsPerPage);
      paginationBar.innerHTML = "";
      if (numberOfPages > 1) {
        let larrow = '<li><a onclick="back()"><i class="fa fa-angle-left"></i></a></li>';
        let rarrow = '<li><a onclick="next()"><i class="fa fa-angle-right"></i></a></li>';
        paginationBar.innerHTML += larrow;
        for (let i = 1; i <= numberOfPages; i++) {
          let pageClass = '';
          if (currPage == i) {
            pageClass = ' class="active"';
          }
          let page = '<li' + pageClass + '><a onclick="changePage(' + i + ')" href="#product-listing">' + i + '</a></li>';
          paginationBar.innerHTML += page;
        }
        paginationBar.innerHTML += rarrow;
      }
    }

    function back() {
      if (currPage > 1) {
        currPage--;
        showProducts();
        generatePagination()
        location.href = "#product-listing";
      }
    }

    function changePage(newPage) {
      currPage = newPage;
      showProducts();
      generatePagination();
    }

    function next() {
      if (currPage < numberOfPages) {
        currPage++;
        showProducts();
        generatePagination();
        location.href = "#product-listing";
      }
    }

    updateProductsPerPage();

  </script>

  @endsection

