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
        @if($products)
        <div class="col-12 mb-xs-30">
          <div class="cart-item-table commun-table">
            <div class="table-responsive">
              <table class="compare-info">
                <tbody>
                  <tr>
                    <td></td>
                    <td class="image"> 
                      <a href="product-detail.html"></a> 
                      <img src="{{ asset('img/1.jpg') }}" alt="Stylexpo" title="" class="img-thumbnail" /> 
                    </td>
                    <td class="image"> 
                      <a href="product-detail.html"></a> 
                      <img src="{{ asset('img/1.jpg') }}" alt="Stylexpo" title="" class="img-thumbnail" />
                    </td>
                  </tr>
                  <tr>
                      <td>Price</td>
                      <td class="name">
                        <a href="product-detail.html">$80.00</a>
                      </td>
                      <td class="name">
                        <a href="product-detail.html">$80.00</a>
                      </td>
                  </tr>
                  <tr>
                      <td>Model</td>
                      <td>Product 2</td>
                      <td>Product 5</td>
                  </tr>
                  <tr>
                      <td>Brand</td>
                      <td>Lorem ipsum dolor sit amet,</td>
                      <td>Lorem ipsum dolor sit amet,</td>
                  </tr>
                  <tr>
                      <td>Availability</td>
                      <td class="availability">In Stock</td>
                      <td class="availability">In Stock</td>
                  </tr>
                  <tr>
                    <td>Rating</td>
                    <td class="rating"> 
                      <span class="fa fa-stack">
                        <i class="fa fa-star fa-stack-2x"></i>
                        <i class="fa fa-star-o fa-stack-2x"></i>
                      </span> 
                      <span class="fa fa-stack">
                        <i class="fa fa-star fa-stack-2x"></i>
                        <i class="fa fa-star-o fa-stack-2x"></i>
                      </span>
                      <span class="fa fa-stack">
                        <i class="fa fa-star fa-stack-2x"></i>
                        <i class="fa fa-star-o fa-stack-2x"></i>
                      </span> 
                      <span class="fa fa-stack">
                        <i class="fa fa-star fa-stack-2x"></i>
                        <i class="fa fa-star-o fa-stack-2x"></i>
                      </span> 
                      <span class="fa fa-stack">
                        <i class="fa fa-star-o fa-stack-2x"></i>
                      </span>
                        <br /> Based on 2 reviews.
                    </td>
                    <td class="rating"> 
                      <span class="fa fa-stack">
                        <i class="fa fa-star fa-stack-2x"></i>
                        <i class="fa fa-star-o fa-stack-2x"></i>
                      </span> 
                      <span class="fa fa-stack">
                        <i class="fa fa-star fa-stack-2x"></i>
                        <i class="fa fa-star-o fa-stack-2x"></i>
                      </span> 
                      <span class="fa fa-stack">
                        <i class="fa fa-star fa-stack-2x"></i>
                        <i class="fa fa-star-o fa-stack-2x"></i>
                      </span> 
                      <span class="fa fa-stack">
                        <i class="fa fa-star fa-stack-2x"></i>
                        <i class="fa fa-star-o fa-stack-2x"></i>
                      </span> 
                      <span class="fa fa-stack">
                        <i class="fa fa-star-o fa-stack-2x"></i>
                      </span>
                      <br /> Based on 1 reviews.
                    </td>
                  </tr>
                  <tr>
                      <td>Summary</td>
                      <td class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque elementum lacinia justo convallis ornare.</td>
                      <td class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque elementum lacinia justo convallis ornare.</td>
                  </tr>
                </tbody>
                <tr>
                  <td></td>
                  <td>
                    <button type="button" class="btn btn-black"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                    <button class="btn btn-color" type="button" title="Remove">Remove</button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-black"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                    <button class="btn btn-color" type="button" title="Remove">Remove</button>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        @endif
      </div>
    </div>
  </section>
  @endsection
