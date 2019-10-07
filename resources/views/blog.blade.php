@extends('master')

@section('title', 'Blog')

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
        <div class="col-xl-10 col-lg-9 col-lgmd-80per">
          <div class="blog-listing">
            <div class="row">
              <div class="col-xl-6 col-12">
                <div class="blog-item">
                  <div class="blog-media mb-30">
                    <img src={{ asset('img/blog_img1.jpg') }} alt="Stylexpo">
                    <div class="blog-effect"></div> 
                    <a href="single-blog.html" title="Click For Read More" class="read">&nbsp;</a> 
                  </div>
                  <div class="blog-detail">
                    <span class="post-date">01 jan 2017</span>
                    <h3><a href="single-blog.html">Combined with a handful of model</a></h3>
                    <p>Uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures donec sollicitudin erat eget malesuada scelerisque. Nullam consectetur, arcu sed tincidunt mattis, massa nunc sodales mauris, ut lobortis arcu tortor in risus.</p>
                    <hr>
                    <div class="post-info">
                      <ul>
                        <li><span>By</span><a href="#"> cormon jons</a></li>
                        <li><a href="#">(5) comments</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-12">
                <div class="blog-item">
                  <div class="blog-media mb-30">
                    <img src={{ asset('img/blog_img2.jpg') }} alt="Stylexpo">
                    <div class="blog-effect"></div> 
                    <a href="single-blog.html" title="Click For Read More" class="read">&nbsp;</a> 
                  </div>
                  <div class="blog-detail">
                    <span class="post-date">02 jan 2017</span>
                    <h3><a href="single-blog.html">Combined with a handful of model</a></h3>
                    <p>Uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures donec sollicitudin erat eget malesuada scelerisque. Nullam consectetur, arcu sed tincidunt mattis, massa nunc sodales mauris, ut lobortis arcu tortor in risus.</p>
                    <hr>
                    <div class="post-info">
                      <ul>
                        <li><span>By</span><a href="#"> cormon jons</a></li>
                        <li><a href="#">(5) comments</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-12">
                <div class="blog-item">
                  <div class="blog-media mb-30">
                    <img src={{ asset('img/blog_img3.jpg') }} alt="Stylexpo">
                    <div class="blog-effect"></div> 
                    <a href="single-blog.html" title="Click For Read More" class="read">&nbsp;</a> 
                  </div>
                  <div class="blog-detail">
                    <span class="post-date">03 jan 2017</span>
                    <h3><a href="single-blog.html">Combined with a handful of model</a></h3>
                    <p>Uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures donec sollicitudin erat eget malesuada scelerisque. Nullam consectetur, arcu sed tincidunt mattis, massa nunc sodales mauris, ut lobortis arcu tortor in risus.</p>
                    <hr>
                    <div class="post-info">
                      <ul>
                        <li><span>By</span><a href="#"> cormon jons</a></li>
                        <li><a href="#">(5) comments</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-12">
                <div class="blog-item">
                  <div class="blog-media mb-30">
                    <img src={{ asset('img/blog_img4.jpg') }} alt="Stylexpo">
                    <div class="blog-effect"></div> 
                    <a href="single-blog.html" title="Click For Read More" class="read">&nbsp;</a> 
                  </div>
                  <div class="blog-detail">
                    <span class="post-date">02 jan 2017</span>
                    <h3><a href="single-blog.html">Combined with a handful of model</a></h3>
                    <p>Uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures donec sollicitudin erat eget malesuada scelerisque. Nullam consectetur, arcu sed tincidunt mattis, massa nunc sodales mauris, ut lobortis arcu tortor in risus.</p>
                    <hr>
                    <div class="post-info">
                      <ul>
                        <li><span>By</span><a href="#"> cormon jons</a></li>
                        <li><a href="#">(5) comments</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-12">
                <div class="blog-item">
                  <div class="blog-media mb-30">
                    <img src={{ asset('img/blog_img5.jpg') }} alt="Stylexpo">
                    <div class="blog-effect"></div> 
                    <a href="single-blog.html" title="Click For Read More" class="read">&nbsp;</a> 
                  </div>
                  <div class="blog-detail">
                    <span class="post-date">03 jan 2017</span>
                    <h3><a href="single-blog.html">Combined with a handful of model</a></h3>
                    <p>Uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures donec sollicitudin erat eget malesuada scelerisque. Nullam consectetur, arcu sed tincidunt mattis, massa nunc sodales mauris, ut lobortis arcu tortor in risus.</p>
                    <hr>
                    <div class="post-info">
                      <ul>
                        <li><span>By</span><a href="#"> cormon jons</a></li>
                        <li><a href="#">(5) comments</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-12">
                <div class="blog-item">
                  <div class="blog-media mb-30">
                    <img src={{ asset('img/blog_img6.jpg') }} alt="Stylexpo">
                    <div class="blog-effect"></div> 
                    <a href="single-blog.html" title="Click For Read More" class="read">&nbsp;</a> 
                  </div>
                  <div class="blog-detail">
                    <span class="post-date">02 jan 2017</span>
                    <h3><a href="single-blog.html">Combined with a handful of model</a></h3>
                    <p>Uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures donec sollicitudin erat eget malesuada scelerisque. Nullam consectetur, arcu sed tincidunt mattis, massa nunc sodales mauris, ut lobortis arcu tortor in risus.</p>
                    <hr>
                    <div class="post-info">
                      <ul>
                        <li><span>By</span><a href="#"> cormon jons</a></li>
                        <li><a href="#">(5) comments</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="pagination-bar">
                  <ul>
                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-lg-3 col-lgmd-20per">
          <div class="sidebar-block">
            <div class="sidebar-box mb-40">
              <form>
                <div class="search-box">
                  <input type="text" placeholder="Search here..." class="input-text">
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
                  <li><a href="#">Print</a></li>
                  <li><a href="#">Neutral</a></li>
                  <li><a href="#">Tan</a></li>
                  <li><a href="#">Purple</a></li>
                  <li><a href="#">Red</a></li>
                  <li><a href="#">Yellow</a></li>
                  <li><a href="#">Blue</a></li>
                  <li><a href="#">White</a></li>
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
  