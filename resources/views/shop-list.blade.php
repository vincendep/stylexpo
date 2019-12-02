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
                  <li><a href="/shop-list/{{$category->slug}}">{{$category->name}}</a></li>
                  @endforeach

                </ul>
              </div>
            </div>
            <div class="sidebar-box mb-40"> <span class="opener plus"></span>
              <div class="sidebar-title">
                <h3><span>Shop by</span></h3>
              </div>
              <div class="sidebar-contant">
                <div class="price-range mb-30">
                  <div class="inner-title">Price range</div>
                  <input class="price-txt" type="text" id="amount">
                  <div id="slider-range"></div>
                </div>
                <div class="size mb-20">
                  <div class="inner-title">Size</div>
                  <ul >
                    <li><a href="#">S (10)</a></li>
                    <li><a href="#">M (05)</a></li>
                    <li><a href="#">L (10)</a></li>
                    <li><a href="#">XL (08)</a></li>
                    <li><a href="#">XXL (05)</a></li>
                  </ul>
                </div>
                <div class="mb-20">
                  <div class="inner-title">Color</div>
                  <ul>
                    <li><a href="#">Black <span>(0)</span></a></li>
                    <li><a href="#">Blue <span>(05)</span></a></li>
                    <li><a href="#">Brown <span>(10)</span></a></li>
                  </ul>
                </div>
                <div class="mb-20">
                  <div class="inner-title">Manufacture</div>
                  <ul>
                    <li><a href="#">Augue congue <span>(0)</span></a></li>
                    <li><a href="#">Eu magna <span>(05)</span></a></li>
                    <li><a href="#">Ipsum sit <span>(10)</span></a></li>
                  </ul>
                </div>
                <a href="#" class="btn btn-color">Refine</a> </div>
            </div>
            <div class="sidebar-box mb-40 d-none d-lg-block"> 
              <a href="#"> 
                <img src={{ asset('img/left-banner.jpg') }} alt="Stylexpo"> 
              </a> 
            </div>
            <div class="sidebar-box sidebar-item"> <span class="opener plus"></span>
              <div class="sidebar-title">
                <h3><span>Best Seller</span></h3>
              </div>
              <div class="sidebar-contant">
                <ul>
                  <li>
                    <div class="pro-media"> <a href="#"><img alt="T-shirt" src={{ asset('img/1.jpg') }}></a> </div>
                    <div class="pro-detail-info"> <a href="#">Black African Print</a>
                      <div class="rating-summary-block">
                        <div class="rating-result" title="53%"> <span style="width:53%"></span> </div>
                      </div>
                      <div class="price-box"> <span class="price">$80.00</span> </div>
                      <div class="cart-link">
                        <form>
                          <button title="Add to Cart">Add To Cart</button>
                        </form>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="pro-media"> <a href="#"><img alt="T-shirt" src={{ asset('img/1.jpg') }}></a> </div>
                    <div class="pro-detail-info"> <a href="#">Black African Print</a>
                      <div class="rating-summary-block">
                        <div class="rating-result" title="53%"> <span style="width:53%"></span> </div>
                      </div>
                      <div class="price-box"> <span class="price">$80.00</span> </div>
                      <div class="cart-link">
                        <form>
                          <button title="Add to Cart">Add To Cart</button>
                        </form>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="pro-media"> <a href="#"><img alt="T-shirt" src={{ asset('img/1.jpg') }}></a> </div>
                    <div class="pro-detail-info"> <a href="#">Black African Print</a>
                      <div class="rating-summary-block">
                        <div class="rating-result" title="53%"> <span style="width:53%"></span> </div>
                      </div>
                      <div class="price-box"> <span class="price">$80.00</span> </div>
                      <div class="cart-link">
                        <form>
                          <button title="Add to Cart">Add To Cart</button>
                        </form>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-10 col-lg-9 col-lgmd-80per">
          <div class="shorting mb-30">
            <div class="row">
              <div class="col-lg-6">
                <div class="view">
                  <div class="list-types grid"> <a href="/shop">
                    <div class="grid-icon list-types-icon"></div>
                    </a> 
                  </div>
                  <div class="list-types list active "> <a href="/shop-list">
                    <div class="list-icon list-types-icon"></div>
                    </a> 
                  </div>
                </div>
                <div class="short-by float-right-sm"> <span>Sort By :</span>
                  <div class="select-item select-dropdown">
                    <fieldset>
                      <select  name="speed" id="sort-price" class="option-drop">
                        <option value="" selected="selected">Name (A to Z)</option>
                        <option value="">Name(Z - A)</option>
                        <option value="">price(low&gt;high)</option>
                        <option value="">price(high &gt; low)</option>
                        <option value="">rating(highest)</option>
                        <option value="">rating(lowest)</option>
                      </select>
                    </fieldset>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="show-item right-side float-left-sm"> <span>Show :</span>
                  <div class="select-item select-dropdown">
                    <fieldset>
                      <select  name="speed" id="show-item" class="option-drop">
                        <option value="" selected="selected">24</option>
                        <option value="">12</option>
                        <option value="">6</option>
                      </select>
                    </fieldset>
                  </div>
                  <span>Per Page</span>
                  <div class="compare float-right-sm"> <a href="#" class="btn btn-color">Compare (0)</a> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="product-listing list-type">
            <div class="row">

              @foreach($products as $product)
              <div class="col-xl-6 col-12">
                <div class="shop-list-view">
                  <div class="product-item">
                    <div class="main-label sale-label"><span>Sale</span></div>
                    <div class="product-image"> <a href="product-page.html"><img src="{{$product->thumbnail}}" alt="{{$product->name}}"></a></div>
                  </div>
                  <div class="product-item-details">
                    <div class="product-item-name"> 
                      <a href="product-page.html">{{$product->name}}</a> 
                    </div>
                    <div class="rating-summary-block">
                      <div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
                    </div>
                    <div class="price-box"> <span class="price">{{$product->price}}</span> <del class="price old-price">{{$product->price}}</del> </div>
                    <p>{{$product->description}}</p>
                    <div class="bottom-detail">
                      <ul>
                        <li class="pro-cart-icon">
                          <form>
                            <button title="Add to Cart" class=""><span></span></button>
                          </form>
                        </li>
                        <li class="pro-wishlist-icon active"><a href="#"><span></span></a></li>
                        <li class="pro-compare-icon"><a href="#"><span></span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach

            </div>
            <div class="row">
              <div class="col-12">
                <div class="pagination-bar">
                  <ul>
                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection