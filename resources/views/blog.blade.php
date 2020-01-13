@extends('master')

@section('title', 'Blog')

@section('open body')
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
        <div class="col-xl-10 col-lg-9 col-lgmd-80per">
          <div class="blog-listing">
            <div class="row">
                @foreach($posts as $post)
              <div class="col-xl-6 col-12">
                <div class="blog-item" >
                  <div class="blog-media mb-30">
                    <img src="{{Voyager::image($post->image)}}" alt="Stylexpo">
                    <div class="blog-effect"></div>
                      <a href="/single-blog/{{$post->id}}" title="Click For Read More" class="read">&nbsp;</a>
                  </div>
                  <div class="blog-detail" style="max-height:190px; text-overflow: ellipsis; overflow: hidden">
                    <h3> <a href="/single-blog/{{$post->id}}">{{$post->title}}</a></h3>
                       {!!$post->body!!}
                    <hr>
                  </div>
                    <div class="post-info" >
                        <a href="/single-blog/{{$post->id}}">Read more
                            <i class="fa fa-angle-double-right"></i>
                        </a>
                    </div>
                </div>
              </div>
                @endforeach
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-lg-3 col-lgmd-20per">
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
                      <div class="pro-media">  <a href="/single-blog/{{$post->id}}"><img alt="T-shirt" src="{{Voyager::image($post->image)}}"></a> </div>
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
