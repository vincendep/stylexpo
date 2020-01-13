@extends('master')

@section('open body')
<body >
<div class="se-pre-con"></div>
<div class="main">
@endsection

  @section('bread bread crumb')
  @include('includes/breadcrumb')
  @endsection

  @section('content')
  <section class="ptb-70">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <div class="row">
            <div class="col-12 mb-60">
                <div class="blog-media mb-30">
                    <a href="#"><img src="{{Voyager::image($single_post->image)}}" ></a>
              </div>
              <div class="blog-detail ">
                <h3>{{$single_post->title}}</h3>
                <p> {!!$single_post->body!!}</p>
                <hr>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="sidebar-block">
            <div class="sidebar-box listing-box mb-40"> <span class="opener plus"></span>
              <div class="sidebar-title">
                <h3><span>Categories</span></h3>
              </div>
              <div class="sidebar-contant">
                <ul>
                    @foreach($categories as $category)
                        <li><a href="/blog/{{$category->slug}}">{{$category->name}}</a></li>
                    @endforeach
                </ul>
              </div>
            </div>
            <div class="sidebar-box sidebar-item sidebar-item-wide"> <span class="opener plus"></span>
              <div class="sidebar-title">
                <h3><span>Recent Post</span></h3>
              </div>
              <div class="sidebar-contant">
                <ul>
                    @foreach($recent_posts as $post)
                  <li>
                    <div class="pro-media"> <a href="/single-blog/{{$post->id}}"><img alt="T-shirt" src={{ Voyager::image($post->image) }}></a> </div>
                    <div class="pro-detail-info"> <a href="/single-blog/{{$post->id}}">{{$post->title}}</a>
                    </div>
                  </li>
                    @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
