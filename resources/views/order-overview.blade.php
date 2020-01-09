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
          <div class="checkout-step mb-40">
            <ul>
              <li> 
                  <a href="/checkout">
                  <div class="step">
                    <div class="line"></div>
                    <div class="circle">1</div>
                  </div>
                  <span>Shipping</span> 
                </a> 
              </li>
              <li class="active"> 
                <a href="/order-overview">
                  <div class="step">
                    <div class="line"></div>
                    <div class="circle">2</div>
                  </div>
                  <span>Order Overview</span> 
                </a> 
              </li>
              <li> 
                <a href="/payment">
                  <div class="step">
                    <div class="line"></div>
                    <div class="circle">3</div>
                  </div>
                  <span>Payment</span> 
                </a> 
              </li>
              <li> 
                <a href="/order-complete">
                  <div class="step">
                    <div class="line"></div>
                    <div class="circle">4</div>
                  </div>
                  <span>Order Complete</span> 
                </a> 
              </li>
              <li>
                <div class="step">
                  <div class="line"></div>
                </div>
              </li>
            </ul>
            <hr>
          </div>
          <div class="checkout-content">
            <div class="row">
              <div class="col-12">
                <div class="heading-part align-center">
                  <h2 class="heading">Order Overview</h2>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8 mb-sm-30">
                <div class="cart-item-table commun-table mb-30">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Product</th>
                          <th>Product Detail</th>
                          <th>Color</th>
                          <th>Size</th>
                          <th>Sub Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($cart->cartItems as $cartItem)
                        <tr>
                          <td><a href="/product-page/{{$cartItem->product->id}}">
                            <div class="product-image"><img alt="{{$cartItem->product->name}}" src="{{$cartItem->product->thumbnail}}"></div>
                            </a></td>
                          <td><div class="product-title">
                            <a href="/product-page/{{$cartItem->product->id}}">{{$cartItem->product->name}}</a>
                              <div class="product-info-stock-sku m-0">
                                <div>
                                  <label>Price: </label>
                                  <div class="price-box"> <span class="info-deta price">{{$cartItem->product->discountPrice()}} &euro;</span> </div>
                                </div>
                              </div>
                              <div class="product-info-stock-sku m-0">
                                <div>
                                  <label>Quantity: </label>
                                  <span class="info-deta">{{$cartItem->quantity}}</span> </div>
                              </div>
                            </div>
                          </td>
                          <td>{{$cartItem->color ? $cartItem->color : '-'}}</td>
                          <td>{{$cartItem->size ? $cartItem->size : '-'}}</td>
                          <td>
                            <div data-id="100" class="total-price price-box">
                              <span class="price">{{$cartItem->subTotal()}} &euro;</span>
                            </div>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="cart-total-table commun-table mb-30">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th colspan="2">Cart Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Item(s) Subtotal</td>
                          <td><div class="price-box"> <span class="price">{{$cart->total()}} &euro;</span> </div></td>
                        </tr>
                        <tr>
                          <td>Shipping</td>
                          <td><div class="price-box"> <span class="price">15.00 &euro;</span> </div></td>
                        </tr>
                        <tr>
                          <td><b>Amount Payable</b></td>
                          <td><div class="price-box"> <span class="price"><b>{{$cart->total() + 15}} &euro;</b></span> </div></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="right-side float-none-xs"> <a href="/payment" class="btn btn-color">Next</a> </div>
              </div>
              <div class="col-md-4">
                <div class="cart-total-table address-box commun-table mb-30">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Shipping Address</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <ul>
                              <li class="inner-heading"> <b>{{$user->shippingAddress()->user_name}}</b> </li>
                              <li>
                                <p>{{$user->shippingAddress()->address}}</p>
                              </li>
                              <li>
                                <p>{{$user->shippingAddress()->city}}</p>
                              </li>
                              <li>
                                <p>{{$user->shippingAddress()->country}}</p>
                              </li>
                            </ul>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="cart-total-table address-box commun-table">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Billing Address</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <ul>
                              <li class="inner-heading"> <b>{{$user->billingAddress()->user_name}}</b> </li>
                              <li>
                                <p>{{$user->billingAddress()->address}}</p>
                              </li>
                              <li>
                                <p>{{$user->billingAddress()->city}}</p>
                              </li>
                              <li>
                                <p>{{$user->billingAddress()->country}}</p>
                              </li>
                            </ul>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
  