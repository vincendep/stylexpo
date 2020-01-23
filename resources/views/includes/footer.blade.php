  <!-- FOOTER START -->
<div class="footer">
  <div class="container">
    <div class="footer-inner">
      <div class="footer-middle">
        <div style="justify-content: space-around;" class="row">
          <div class="col-xl-3 f-col">
            <div class="footer-static-block"> <span class="opener plus"></span>
              <div class="f-logo"> 
                <a href="index.html" class=""> 
                  <img src="{{ asset('img/footer-logo.png') }}" alt="Stylexpo"> 
                </a> 
              </div>
              <div class="footer-block-contant">
                  <p>Lorem khaled ipsum is a major key to success. It’s on you how you want to live your life. Always remember in the jungle there’s a lot of they in.</p>
                  <p>It’s on you how you want to live your life. Everyone has a choice.</p>
              </div>
            </div>
          </div>
          
          
          <div class="col-xl-3 f-col">
            <div class="footer-static-block"> <span class="opener plus"></span>
              <h3 class="title">address<span></span></h3>
              <ul class="footer-block-contant address-footer">
                <li class="item"> <i class="fa fa-map-marker"> </i>
                  <p> Università degli Studi dell'Aquila Palazzo Camponeschi, <br>piazza Santa Margherita 2, 67100 L'Aquila.</p>
                </li>
                <li class="item"> <i class="fa fa-envelope"> </i>
                  <p> <a href="#">infoservices@stylexpo.com </a> </p>
                </li>
                <li class="item"> <i class="fa fa-phone"> </i>
                  <p>(+39) 085000900020</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="footer-bottom ">
        <div class="row mtb-30">
          <div class="col-lg-6 ">
            <div class="copy-right ">© 2019 All Rights Reserved.</div>
          </div>
          <div class="col-lg-6 ">
            <div class="footer_social pt-xs-15 center-sm">
              <ul class="social-icon">
                <li><div class="title">Follow us on :</div></li>
                <li><a target="blank" href="https://www.facebook.com/denis.dipatrizio" title="Facebook" class="facebook"><i class="fa fa-facebook"> </i></a></li>
                <li><a href="https://www.twitter.com" target="blank" title="Twitter" class="twitter"><i class="fa fa-twitter"> </i></a></li>
                <li><a target="blank" href="https://www.linkedin.com" title="Linkedin" class="linkedin"><i class="fa fa-linkedin"> </i></a></li>
                <li><a target="blank" title="Pinterest" href="https://www.pinterest.com" class="pinterest"><i class="fa fa-pinterest"> </i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <hr>
        <div class="row align-center mtb-30 ">
          <div class="col-12 ">
            <div class="site-link">
              <ul>
                @foreach ($pages as $page)
                <li><a href="/{{$page->slug}}">{{$page->title}}</a></li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
        <div class="row align-center">
          <div class="col-12 ">
            <div class="payment">
              <ul class="payment_icon">
                <li class="visa"><a target="blank" href="http:\\www.visa.com"><img src="{{ asset('img/pay1.png') }}" alt="Stylexpo"></a></li>
                <li class="discover"><a target="blank" href="http:\\www.mastercard.com"><img src="{{ asset('img/pay2.png') }}" alt="Stylexpo"></a></li>
                <li class="vindicia"><a target="blank" href="http:\\www.paypal.com"><img src="{{ asset('img/pay5.png') }}" alt="Stylexpo"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="scroll-top">
  <div class="scrollup"></div>
</div>
<!-- FOOTER END -->