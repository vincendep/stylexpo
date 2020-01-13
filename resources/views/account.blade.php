@extends('master')

@section('title', 'Account')

@section('open body')
<body >
<div class="se-pre-con"></div>
<div class="main">
@endsection

  @section('bread crumb')
  @include('includes.breadcrumb')
  @endsection

  @section('content')
  <section class="checkout-section ptb-70">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="account-sidebar account-tab mb-sm-30">
            <div class="dark-bg tab-title-bg">
              <div class="heading-part">
                <div class="sub-title"><span></span> My Account</div>
              </div>
            </div>
            <div class="account-tab-inner">
              <ul class="account-tab-stap">
                <li id="step1" class="active"> <a href="javascript:void(0)">My Dashboard<i class="fa fa-angle-right"></i> </a> </li>
                <li id="step2"> <a href="javascript:void(0)">Account Details<i class="fa fa-angle-right"></i> </a> </li>
                <li id="step3"> <a href="javascript:void(0)">My Order List<i class="fa fa-angle-right"></i> </a> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-9">
          <div id="data-step1" class="account-content" data-temp="tabdata">
            <div class="row">
              <div class="col-12">
                <div class="heading-part heading-bg mb-30">
                  <h2 class="heading m-0">Account Dashboard</h2>
                </div>
              </div>
            </div>
            <div class="mb-30">
              <div class="row">
                <div class="col-12">
                  <div class="heading-part">
                    <h3 class="sub-heading">Hello, {{$user->name}}</h3>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet.
                  <a class="account-link" id="subscribelink" href="#">Click Here</a></p>
                </div>
              </div>
            </div>
            <div class="m-0">
              <div class="row">
                <div class="col-12 mb-20">
                  <div class="heading-part">
                    <h3 class="sub-heading">Account Information</h3>
                  </div>
                  <hr>
                </div>
                <div class="col-md-6">
                  <div class="cart-total-table address-box commun-table">
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
                              @if($user->shippingAddress())
                              <ul>
                                <li class="inner-heading"> <b>{{$user->shippingAddress()->user_name}}</b> </li>
                                <li>
                                  <p>{{$user->shippingAddress()->address}}, {{$user->shippingAddress()->postcode}}</p>
                                </li>
                                <li>
                                  <p>{{$user->shippingAddress()->city}}</p>
                                </li>
                                <li>
                                  <p>{{$user->shippingAddress()->country}}</p>
                                </li>
                              </ul>
                              @else
                              <p class="text-center">You haven't a shipping address.</p>
                              @endif
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
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
                              @if($user->billingAddress())
                              <ul>
                                <li class="inner-heading"><b>{{$user->billingAddress()->user_name}}</b></li>
                                <li>
                                  <p>{{$user->billingAddress()->address}}, {{$user->billingAddress()->postcode}}</p>
                                </li>
                                <li>
                                  <p>{{$user->billingAddress()->city}}</p>
                                </li>
                                <li>
                                  <p>{{$user->billingAddress()->country}}</p>
                                </li>
                              </ul>
                              @else
                              <p class="text-center">You haven't a billing address.</p>
                              @endif
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
          <div id="data-step2" class="account-content" data-temp="tabdata" style="display:none">
            <div class="row">
              <div class="col-12">
                <div class="heading-part heading-bg mb-30">
                  <h2 class="heading m-0">Account Details</h2>
                </div>
              </div>
            </div>
            <div class="m-0">
              <form class="main-form full" action="\addresses" method="post">
                @csrf
                <div class="mb-20">
                  <div class="row">
                    <div class="col-12 mb-20">
                      <div class="heading-part">
                        <h3 class="sub-heading">Shipping Address</h3>
                      </div>
                      <hr>
                    </div>
                    <div class="col-md-6">
                      <div class="input-box">
                        <label for="shippingnameid">Full Name</label>
                        <input id="shippingnameid" @if($user->shippingAddress()) value="{{$user->shippingAddress()->user_name}}" @endif type="text" required name="shippingname">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-box">
                        <label for="shippingemailid">Email Address</label>
                        <input id="shippingemailid" @if($user->shippingAddress()) value="{{$user->shippingAddress()->email}}" @endif type="email" name="shippingemail" required/>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-box">
                        <label for="shippingcompanyid">Company</label>
                        <input id="shippingcompanyid" @if($user->shippingAddress()) value="{{$user->shippingAddress()->company_name}}" @endif name="shippingcompany" type="text">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-box">
                        <label for="shippingcontactid">Contact Number</label>
                        <input id="shippingcontactid" @if($user->shippingAddress()) value="{{$user->shippingAddress()->contact_number}}" @endif name="shippingcontact" type="text" required/>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="input-box">
                        <label for="shippingaddressid">Shipping Address</label>
                        <input id="shippingaddressid" @if($user->shippingAddress()) value="{{$user->shippingAddress()->address}}" @endif name="shippingaddress" type="text" required />
                        <span>Please provide the number and street.</span>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="input-box">
                        <label for="shippinglandmarkid">Shipping Landmark</label>
                        <input id="shippinglandmarkid" @if($user->shippingAddress()) value="{{$user->shippingAddress()->landmark}}" @endif name="shippinglandmark" type="text" />
                        <span>Please include landmark (e.g : Opposite Bank) as the carrier service may find it easier to locate your address.</span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-box">
                        <label for="shippingcountryid">Country</label>
                        <input type="text" @if($user->shippingAddress()) value="{{$user->shippingAddress()->country}}" @endif name="shippingcountry" id="shippingcountryid">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-box">
                        <label for="shippingcityid">City</label>
                        <input type="text" required="" @if($user->shippingAddress()) value="{{$user->shippingAddress()->city}}" @endif id="shippingcityid" name="shippingcity">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="input-box">
                        <label for="shippingpostcodeid">Postcode/ZIP</label>
                        <input type="text" required="" @if($user->shippingAddress()) value="{{$user->shippingAddress()->postcode}}" @endif name="shippingpostcode" id="shippingpostcodeid">
                      </div>
                    </div>
                  </div>
                </div>
                  <div class="row">
                    <div class="col-12 mb-20">
                      <div class="heading-part">
                        <h3 class="sub-heading">Billing Address</h3>
                      </div>
                      <hr>
                    </div>
                    <div class="col-md-6">
                      <div class="input-box">
                        <label for="billingnameid">Full Name</label>
                        <input type="text" @if($user->billingAddress()) value="{{$user->billingAddress()->user_name}}" @endif required id="billingnameid" name="billingname">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-box">
                        <label for="billingemailid">Email Address</label>
                        <input type="text" @if($user->billingAddress()) value="{{$user->billingAddress()->email}}" @endif required id="billingemailid" name="billingemail">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-box">
                        <label for="billingcompanyid">Company</label>
                        <input type="text" @if($user->billingAddress()) value="{{$user->billingAddress()->company_name}}" @endif id="billingcompanyid" name="billingcompany">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-box">
                        <label for="billingcontactid">Contact Number</label>
                        <input type="text" @if($user->billingAddress()) value="{{$user->billingAddress()->contact_number}}" @endif required id="billingcontactid" name="billingcontact">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="input-box">
                        <label for="billingaddressid">Billing Address</label>
                        <input type="text" @if($user->billingAddress()) value="{{$user->billingAddress()->address}}" @endif required id="billingaddressid" name="billingaddress">
                        <span>Please provide the number and street.</span>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="input-box">
                        <label for="billinglandmarkid">Billing Landmark</label>
                        <input type="text" @if($user->billingAddress()) value="{{$user->billingAddress()->landmark}}" @endif id="billinglandmarkid" name="billinglandmark">
                        <span>Please include landmark (e.g : Opposite Bank) as the carrier service may find it easier to locate your address.</span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-box">
                        <label for="billingcountryid">Billing Country</label>
                        <input type="text" @if($user->billingAddress()) value="{{$user->billingAddress()->country}}" @endif name="billingcountry" id="billingcountryid"/>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-box">
                        <label for="billingcityid">Billing City</label>
                        <input type="text" @if($user->billingAddress()) value="{{$user->billingAddress()->city}}" @endif required name="billingcity" id="billingcityid"/>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="input-box">
                        <label for="billingpostcodeid">Postcode/ZIP</label>
                        <input type="text" @if($user->billingAddress()) value="{{$user->billingAddress()->postcode}}" @endif required id="billingpostcodeid" name="billingpostcode">
                      </div>
                    </div>
                    <div class="col-md-12 mt-30 text-center">
                      <button class="btn btn-color" type="submit">Update</button>
                    </div>
                  </div>
              </form>
            </div>
          </div>
          <div id="data-step3" class="account-content" data-temp="tabdata" style="display:none">
            <div id="form-print" class="admission-form-wrapper">
              @if($orders->first())
              <div class="row">
                <div class="col-12">
                  <div class="heading-part heading-bg mb-30">
                    <h2 class="heading m-0">My Orders</h2>
                  </div>
                </div>
              </div>

              @foreach($orders as $order)
              <div class="row">
                <div class="col-12 mb-xs-30">
                  <div class="cart-item-table commun-table">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th colspan="4">
                              <ul>
                                <li><span>Order placed</span> <span>{{$order->created_at}}</span></li>
                                <li class="price-box"><span>Total</span> <span class="price">{{$order->total()}} &euro;</span></li>
                                <li><span>Order No.</span> <span>#{{$order->id}}</span></li>
                              </ul>
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($order->orderLines as $orderLine)
                          <tr>
                            <td>
                              <a href="/product-page/{{$orderLine->product->id}}">
                                <div class="product-image">
                                  <img alt="{{$orderLine->product->name}}" src="{{Voyager::image($orderLine->product->thumbnail)}}">
                                </div>
                              </a>
                            </td>
                            <td>
                              <div class="product-title">
                                <a href="/product-page/{{$orderLine->product->id}}">{{$orderLine->product->name}}</a>
                              </div>
                              <div class="product-info-stock-sku m-0">
                                <div>
                                  <label>Quantity: </label>
                                  <span class="info-deta">{{$orderLine->quantity}}</span>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="base-price price-box">
                                <span class="price">{{$orderLine->product->price}} &euro;</span>
                              </div>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
              @else
              <h2 class="text-center">You have no orders.</h2>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection

