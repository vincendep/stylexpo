@extends('master')

@section('title', 'Cart')

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
        @if($cart->cartItems->first())
        <div class="col-12">
          <div class="cart-item-table commun-table">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Product</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Color</th>
                    <th>Size</th>
                    <th>Quantity</th>
                    <th>Sub Total</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach ($cart->cartItems as $cartItem)
                  <tr>
                    <td>
                      <a href="/product-page/{{$cartItem->product->id}}">
                        <div class="product-image">
                          <img alt="{{$cartItem->product->name}}" src="{{Voyager::image($cartItem->product->thumbnail)}}">
                        </div>
                      </a>
                    </td>
                    <td>
                      <div class="product-title">
                        <a href="/product-page/{{$cartItem->product->id}}">{{$cartItem->product->name}}</a>
                      </div>
                    </td>
                    <td>
                      <ul>
                        <li>
                          <div class="base-price price-box">
                            <span class="price">{{$cartItem->product->price}} &euro;</span>
                          </div>
                        </li>
                      </ul>
                    </td>
                    <td>{{$cartItem->color ? $cartItem->color->name : '-'}}</td>
                    <td>{{$cartItem->size ? $cartItem->size->name : '-'}}</td>
                    <td>
                      <div class="input-box select-dropdown">
                        <fieldset>
                          <input type="number" style="max-width: 80px;" value="{{$cartItem->quantity}}" name="{{$cartItem->id}}" form="update-cart-form" data-id="100" class="quantity_cart form-control">
                        </fieldset>
                      </div>
                    </td>
                    <td>
                      <div class="total-price price-box">
                        <span class="price">{{$cartItem->subTotal()}} &euro;</span>
                      </div>
                    </td>
                    <td>
                      <form id="delete-item-form" action="/cart-items/{{$cartItem->id}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit">
                          <i title="Remove Item From Cart" data-id="100" class="fa fa-trash cart-remove-item"></i>
                        </button>
                      </form>
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
        @else
        <h2 class="mx-auto my-5">Your shopping cart is empty.</h2>
        @endif
      </div>
      <div class="mb-30">
        <div class="row" style="justify-content: space-around;">
          <div>
            <div class="mt-30">
              <a href="\shop" class="btn btn-color">
                <span><i class="fa fa-angle-left"></i></span>
                Back to Shopping
              </a>
            </div>
          </div>
          @if($cart->cartItems->first())
          <div>
            <form id="update-cart-form" action="/carts/{{$cart->id}}" method="POST">
              @csrf
              @method('PUT')
              <div class="mt-30 right-side float-none-xs">
                <button type="submit" class="btn btn-color">Update Cart</button>
              </div>
          </div>
          @endif
        </div>
      </div>
      <hr>
      @if($cart->cartItems->first())
      <div class="mtb-30">
        <div class="row">
          <div class="col-md-12">
            <div class="cart-total-table commun-table">
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
                      <td>
                        <div class="price-box">
                          <span class="price">{{$cart->total()}} &euro;</span>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Shipping</td>
                      <td>
                        <div class="price-box">
                          <span class="price">15 &euro;</span>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td><b>Amount Payable</b></td>
                      <td>
                        <div class="price-box">
                          <span class="price"><b>{{$cart->total() + 15}} &euro;</b></span>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="mt-30">
        <div class="row">
          <div class="col-12">
            <div class="text-center">
              <a href="/checkout" class="btn btn-color">Proceed to checkout
                <span><i class="fa fa-angle-right"></i></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      @endif
    </div>
  </section>
  @endsection
