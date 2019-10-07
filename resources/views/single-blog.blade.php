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
                <img src={{ asset('img/blog_img3.jpg') }} alt="Stylexpo"> 
              </div>
              <div class="blog-detail ">
                <div class="post-info">
                  <ul>
                    <li><span class="post-date">03 jan 2018</span></li>
                    <li><span>By</span><a href="#"> cormon jons</a></li>
                  </ul>
                </div>
                <h3>Combined with a handful of model</h3>
                <p>Uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures donec sollicitudin erat eget malesuada scelerisque. Nullam consectetur, arcu sed tincidunt mattis, massa nunc sodales mauris, ut lobortis arcu tortor in risus. uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures donec sollicitudin erat eget malesuada scelerisque. Nullam consectetur, arcu sed tincidunt mattis, massa nunc sodales mauris, ut lobortis arcu tortor in risus.</p>
                <hr>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="comments-area-main">
                <div class="comments-area">
                  <h4>Comments<span>(2)</span></h4>
                  <ul class="comment-list mt-30">
                    <li>
                      <div class="comment-user"> <img src={{ asset('img/comment-user.jpg') }} alt="Stylexpo"> </div>
                      <div class="comment-detail">
                        <div class="user-name">John Doe</div>
                        <div class="post-info">
                          <ul>
                            <li>Fab 07, 2018</li>
                            <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                          </ul>
                        </div>
                        <p>Consectetur adipiscing elit integer sit amet augue laoreet maximus nuncac.</p>
                      </div>
                      <ul class="comment-list child-comment">
                        <li>
                          <div class="comment-user"> <img src={{ asset('img/comment-user.jpg') }} alt="Stylexpo"> </div>
                          <div class="comment-detail">
                            <div class="user-name">John Doe</div>
                            <div class="post-info">
                              <ul>
                                <li>Fab 07, 2018</li>
                                <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                              </ul>
                            </div>
                            <p>Consectetur adipiscing elit integer sit amet augue laoreet maximus nuncac.</p>
                          </div>
                        </li>
                        <li>
                          <div class="comment-user"> <img src={{ asset('img/comment-user.jpg') }} alt="Stylexpo"> </div>
                          <div class="comment-detail">
                            <div class="user-name">John Doe</div>
                            <div class="post-info">
                              <ul>
                                <li>Fab 07, 2018</li>
                                <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                              </ul>
                            </div>
                            <p>Consectetur adipiscing elit integer sit amet augue laoreet maximus nuncac.</p>
                          </div>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <div class="comment-user"> <img src={{ asset('img/comment-user.jpg') }} alt="Stylexpo"> </div>
                      <div class="comment-detail">
                        <div class="user-name">John Doe</div>
                        <div class="post-info">
                          <ul>
                            <li>Fab 07, 2018</li>
                            <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                          </ul>
                        </div>
                        <p>Consectetur adipiscing elit integer sit amet augue laoreet maximus nuncac.</p>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="main-form mt-30">
                  <h4>Leave a comments</h4>
                  <form >
                    <div class="row mt-30">
                      <div class="col-md-4 mb-30">
                        <input type="text" placeholder="Name" required>
                      </div>
                      <div class="col-md-4 mb-30">
                        <input type="email" placeholder="Email" required>
                      </div>
                      <div class="col-md-4 mb-30">
                        <input type="text" placeholder="Website" required>
                      </div>
                      <div class="col-12 mb-30">
                        <textarea cols="30" rows="3" placeholder="Message" required></textarea>
                      </div>
                      <div class="col-12 mb-sm-30">
                        <button class="btn btn-color" name="submit" type="submit">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="sidebar-block">
            <div class="sidebar-box mb-40">
              <form>
                <div class="search-box">
                  <input type="text" placeholder="Search entire store here..." class="input-text">
                  <button class="search-btn"></button>
                </div>
              </form>
            </div>
            <div class="sidebar-box listing-box mb-40"> <span class="opener plus"></span>
              <div class="sidebar-title">
                <h3><span>Categories</span></h3>
              </div>
              <div class="sidebar-contant">
                <ul>
                  <li><a href="#">Clothing <span>(21)</span></a></li>
                  <li><a href="#">Shoes <span>(05)</span></a></li>
                  <li><a href="#">Jewellery <span>(10)</span></a></li>
                  <li><a href="#">Furniture <span>(12)</span></a></li>
                  <li><a href="#">Bags <span>(18)</span></a></li>
                  <li><a href="#">Accessories <span>(70)</span></a></li>
                </ul>
              </div>
            </div>
            <div class="sidebar-box mb-40"> <span class="opener plus"></span>
              <div class="sidebar-title">
                <h3><span>Tags</span></h3>
              </div>
              <div class="sidebar-contant">
                <ul class="tagcloud">
                  <li><a href="#">Orange</a></li>
                  <li><a href="#">Neutral</a></li>
                  <li><a href="#">Print</a></li>
                  <li><a href="#">Tan</a></li>
                  <li><a href="#">Purple</a></li>
                  <li><a href="#">Yellow</a></li>
                  <li><a href="#">White</a></li>
                  <li><a href="#">Metallic</a></li>
                  <li><a href="#">Red</a></li>
                </ul>
              </div>
            </div>
            <div class="sidebar-box sidebar-item sidebar-item-wide"> <span class="opener plus"></span>
              <div class="sidebar-title">
                <h3><span>Recent Post</span></h3>
              </div>
              <div class="sidebar-contant">
                <ul>
                  <li>
                    <div class="pro-media"> <a href="#"><img alt="T-shirt" src={{ asset('img/blog_img1.jpg') }}></a> </div>
                    <div class="pro-detail-info"> <a href="#">Black African Print</a>
                      <div class="post-info">jul 11, 2017</div>
                    </div>
                  </li>
                  <li>
                    <div class="pro-media"> <a href="#"><img alt="T-shirt" src={{ asset('img/blog_img2.jpg') }}></a> </div>
                    <div class="pro-detail-info"> <a href="#">Black African Print</a>
                      <div class="post-info">jul 11, 2017</div>
                    </div>
                  </li>
                  <li>
                    <div class="pro-media"> <a href="#"><img alt="T-shirt" src={{ asset('img/blog_img3.jpg') }}></a> </div>
                    <div class="pro-detail-info"> <a href="#">Black African Print</a>
                      <div class="post-info">jul 11, 2017</div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
  