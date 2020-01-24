<div class="sub-banner-block ">
      <div class="">
        <div class=" center-sm">
          <div class="row m-0">
            @foreach ($subbanners as $subbanner)
            <div class="col-md-4 mt-xs-30 p-0">
              <div class="sub-banner sub-banner1" >
                <img alt="Stylexpo" src="{{ $subbanner->image }}">
                <div class="sub-banner-detail">
                  <div style="text-transform: uppercase;" class="sub-banner-title sub-banner-title-color">{{$subbanner->title}}</div>
                  <div class="sub-banner-subtitle">{{$subbanner->excerpt}}</div>
                  <a class="btn btn-color" href="/shop/{{$subbanner->category->slug ?? ''}}">Shop Now!</a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
