@extends('master')

@section('open body')
<body >
<div class="se-pre-con"></div>
<div class="main contact-main">
@endsection


  @section('bread crumb')
  @include('includes/breadcrumb')
  @endsection

  @section('content')
  <!-- CONTAIN START ptb-95-->
  <section class="pt-70">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="map">
            <div class="map-part">
              <div id="map" class="map-inner-part"></div>
            </div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28049.12497106515!2d13.365312745793338!3d42.357422395223686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132fcd66882dc14f%3A0xbfcd671e4e655ba9!2sUNIVAQ!5e0!3m2!1sit!2sit!4v1578927373829!5m2!1sit!2sit"  width="1200" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="px-70 my-5 client-main align-center">
    <div class="container">
      <div class="contact-info">
        <div class="row m-0">
          <div class="col-md-4 p-0">
            <div class="contact-box">
              <div class="contact-icon contact-phone-icon"></div>
              <span><b>Tel</b></span>
              <p>0123 456 789 / 0123 456 788</p>
            </div>
          </div>
          <div class="col-md-4 p-0">
            <div class="contact-box">
              <div class="contact-icon contact-mail-icon"></div>
              <span><b>Mail</b></span>
              <p>infoservices@stylexpo.com </p>
            </div>
          </div>
          <div class="col-md-4 p-0">
            <div class="contact-box">
              <div class="contact-icon contact-open-icon"></div>
              <span><b>Open</b></span>
              <p>Mon – Sat: 9:00 – 18:00</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  
  <!-- CONTAINER END -->
  @endsection

