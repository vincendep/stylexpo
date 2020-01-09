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
              <li> <a href="/checkout">
                <div class="step">
                  <div class="line"></div>
                  <div class="circle">1</div>
                </div>
                <span>Shipping</span> </a> </li>
              <li> <a href="/order-overview">
                <div class="step">
                  <div class="line"></div>
                  <div class="circle">2</div>
                </div>
                <span>Order Overview</span> </a> </li>
              <li> <a href="/payment">
                <div class="step">
                  <div class="line"></div>
                  <div class="circle">3</div>
                </div>
                <span>Payment</span> </a> </li>
              <li class="active"> <a href="/order-complete">
                <div class="step">
                  <div class="line"></div>
                  <div class="circle">4</div>
                </div>
                <span>Order Complete</span> </a> </li>
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
                <div id="form-print" class="admission-form-wrapper">
                  <div class="cart-item-table complete-order-table commun-table mb-30">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Product</th>
                            <th>Product Detail</th>
                            <th>Size</th>
                            <th>Color</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($order->orderLines as $item)
                          <tr>
                            <td>
                              <a href="/product-page/{{$item->product->id}}">
                                <div class="product-image">
                                  <img alt="{{$item->product->name}}" src="{{$item->product->thumbnail}}">
                                </div>
                              </a>
                            </td>
                            <td>
                              <div class="product-title"> 
                                <a href="/product-page/{{$item->product->id}}">{{$item->product->name}}</a>
                                <div class="product-info-stock-sku m-0">
                                  <div>
                                    <label>Price: </label>
                                    <div class="price-box"> 
                                      <span class="info-deta price">{{$item->product->price}} &euro;</span> 
                                    </div>
                                  </div>
                                </div>
                                <div class="product-info-stock-sku m-0">
                                  <div>
                                    <label>Quantity: </label>
                                    <span class="info-deta">{{$item->quantity}}</span> 
                                  </div>
                                </div>
                              </div>
                            </td>
                            <td style="text-transform: uppercase;">{{$item->size ? $item->size->name : '-'}}</td>
                            <td style="text-transform: uppercase;">{{$item->color ? $item->color->name : '-'}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="complete-order-detail commun-table mb-30">
                    <div class="table-responsive">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td><b>Order Places :</b></td>
                            <td>{{$order->created_at}}</td>
                          </tr>
                          <tr>
                            <td><b>Total :</b></td>
                            <td><div class="price-box"> <span class="price">{{$order->total()}} &euro;</span> </div></td>
                          </tr>
                          <tr>
                            <td><b>Payment :</b></td>
                            <td>COD</td>
                          </tr>
                          <tr>
                            <td><b>Order No. :</b></td>
                            <td>#{{$order->id}}</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="mb-30">
                    <div class="heading-part">
                      <h3 class="sub-heading">Order Confirmation</h3>
                    </div>
                    <hr>
                    <p class="mt-20">Quisque id fermentum tellus. Donec fringilla mauris nec ligula maximus sodales. Donec ac felis nunc. Fusce placerat volutpat risus, ac fermentum ex tempus eget.</p>
                  </div>
                </div>
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
