@extends('master')

@section('title', 'Checkout')

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
              <li class="active"> 
                <a href="checkout.html">
                  <div class="step">
                    <div class="line"></div>
                    <div class="circle">1</div>
                  </div>
                  <span>Shipping</span> 
                </a> 
              </li>
              <li> 
                <a href="order-overview.html">
                  <div class="step">
                    <div class="line"></div>
                    <div class="circle">2</div>
                  </div>
                  <span>Order Overview</span> 
                </a> 
              </li>
              <li> 
                <a href="payment.html">
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
          <div class="checkout-content" >
            <div class="row">
              <div class="col-12">
                <div class="heading-part align-center">
                  <h2 class="heading">Please fill up your Shipping details</h2>
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-xl-6 col-lg-8 col-md-8">
                
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
                      <a href="/order-overview" class="btn btn-color" type="submit">Next</a>
                    </div>
                  </div>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
  