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
        @if($wishlist->size() > 0)
        <div class="col-12 ">
          <div class="cart-item-table commun-table">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Product</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Stock Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($wishlist->wishItems as $item)
                  <tr>
                    <td>
                      <a href="product-page.html">
                      <div class="product-image"><img alt="{{$item->product->name}}" src="{{Voyager::image($item->product->thumbnail)}}"></div>
                      </a>
                    </td>
                    <td>
                      <div class="product-title">
                        <a href="/product-page/{{$item->product->id}}">{{$item->product->name}}</a>
                      </div>
                    </td>
                    <td>
                      <ul>
                        <li>
                          <div class="base-price price-box">
                            @php $product = $item->product @endphp
                            @if($product->sale)
                            <span class="price">{{number_format($product->price - ($product->price * $product->sale), 2, '.', '')}} &euro;</span><del class="price old-price">{{$product->price}} &euro;</del>
                            @else
                            <span class="price">{{$product->price}} &euro;</span>
                            @endif
                          </div>
                        </li>
                      </ul>
                    </td>
                    <td>
                      <div class="total-price price-box">
                        <span class="price">{{$product->quantity > 0 ? 'In stock' : 'Out of stock'}}</span>
                      </div>
                    </td>
                    <td>
                      <form action="/wish-items/{{$item->id}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit">
                          <i title="Remove Item From Wishlist" data-id="100" class="fa fa-trash cart-remove-item"></i>
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
        <h2 class="mx-auto my-5">There are no items in your Wish List</h2>
        @endif
      </div>
      <div class="mb-30">
        <div class="row">
          <div class="col-md-12">
            <div class="mt-30 text-center">
              <a href="/shop" class="btn btn-color">
                <span><i class="fa fa-angle-left"></i></span>Back to Shopping
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
