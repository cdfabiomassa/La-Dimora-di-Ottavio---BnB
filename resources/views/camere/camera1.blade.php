<x-layout>

    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background: linear-gradient(90deg, rgba(0,0,0,0.5) 100%, rgba(0,0,0,0) 100%), url(/imgblade/big_image_1.jpg); background-size: cover;  background-repeat:no-repeat">
        <div class="container">
          <div class="row align-items-center site-hero-inner justify-content-center">
            <div class="col-md-12 text-center">

              <div class="mb-5 element-animate">
                <h1>Camera 1</h1>
                <p>Details</p>
              </div>

            </div>
          </div>
        </div>
      </section>
      <!-- END section -->


      <div class="container-fluid my-5 py-5">
        <div class="row" >
          <div class="col-12 col-md-6">
            <div class="tz-gallery container-fluid my-lg-3">
              <div class="row">
                  <div class="col-sm-12 col-md-4">
                      <a class="lightbox" href="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/bridge.jpg">
                          <img class="imgcarousell" src="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/bridge.jpg" alt="Bridge">
                      </a>
                  </div>
                  <div class="col-sm-6 col-md-4">
                      <a class="lightbox" href="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/park.jpg">
                          <img class="imgcarousell" src="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/park.jpg" alt="Park">
                      </a>
                  </div>
                  <div class="col-sm-6 col-md-4">
                      <a class="lightbox" href="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/tunnel.jpg">
                          <img class="imgcarousell" src="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/tunnel.jpg" alt="Tunnel">
                      </a>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 col-md-8">
                      <a class="lightbox" href="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/traffic.jpg">
                          <img class="imgcarousell" src="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/traffic.jpg" alt="Traffic">
                      </a>
                  </div>
                  <div class="col-sm-12 col-md-4 ultimeimmagini">
                    <div class="col-sm-6 col-md-12 m-0 p-0 penultimaimmagine">
                      <a class="lightbox" href="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/rails.jpg">
                          <img class="imgcarousell" src="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/rails.jpg" alt="Coast">
                      </a>
                    </div>
                    <div class="col-sm-6 col-md-12 mx-0 p-0 lastimage" style="margin-top:3px">
                      <a class="lightbox" href="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/coast.jpg">
                            <img class="imgcarousell" src="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/coast.jpg" alt="Rails">
                        </a>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
            <div id="panorama-360-view"  onmouseover="mouseOver()" onmouseout="mouseOut()" class="d-flex justify-content-center align-items-center">
              <img id="view"   src="/imgblade/360.png" alt="" style="position: absolute; z-index:9999999999999999; height:70px">
            </div>
          </div>
        </div>
      </div>


    <div class="d-flex justify-content-center mb-5 pb-5">
      <p><a href="{{ route('camera1') }}" class="btn btn-primary btn-sm text-center">{{__('ui.booknow')}}</a></p>
    </div>





</x-layout>