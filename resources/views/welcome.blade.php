<x-layout>

    <section class="site-hero overlay"  style="background: linear-gradient(90deg, rgba(0,0,0,0.5) 100%, rgba(0,0,0,0) 100%), url(/imgblade/big_image_1.jpg); background-size: cover; background-position-x:center; background-position-y:20%">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-12 text-center">

            <div class="mb-5 element-animate">
              <h1>{{__('ui.welcometolaDimoradiOttavio')}}</h1>
              <p>{{__('ui.myhouseisyourhome')}}</p>
              <p><a href="" class="btn btn-primary">{{__('ui.booknow')}}</a></p>
            </div>

              <div class="scroll-mouse">
                <a href="#about">
                  <div class="scroll-icon"></div>
                </a>
              </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-4">
            <div class="heading-wrap text-center element-animate">
              <h2 class="heading" style="font-size: 47px">{{__('ui.stayandenjoy')}}</h2>
              <p class="mb-5">{{__('ui.descriptionhome')}}</p>
              <p><a href="{{ route('about') }}" class="btn btn-primary btn-sm">{{__('ui.moreaboutus')}}</a></p>
            </div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-7">
            <img src="/imgblade/f_img_1.png" alt="Image placeholder" class="img-md-fluid">
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 heading-wrap text-center">
            <h4 class="sub-heading">{{__('ui.anyrooms')}}</h4>
              <h2 class="heading">{{__('ui.featurerooms')}}</h2>
          </div>
        </div>
        <div class="row ">
          <div class="col-md-7">
            <div class="media d-block room mb-0">
              <figure>
                <img src="/imgblade/img_1.jpg" alt="Generic placeholder image" class="img-fluid">
                <div class="overlap-text">
                  <span>
                    Featured Room
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                  </span>
                </div>
              </figure>
              <div class="media-body">
                <h3 class="mt-0"><a href="#">Presidential Room</a></h3>
                <ul class="room-specs">
                  <li><span class="ion-ios-people-outline"></span> 2 Guests</li>
                  <li><span class="ion-ios-crop"></span> 22 ft <sup>2</sup></li>
                </ul>
                <p>Nulla vel metus scelerisque ante sollicitudin. Fusce condimentum nunc ac nisi vulputate fringilla. </p>
                <p><a href="#" class="btn btn-primary btn-sm">Book Now From $20</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-5 room-thumbnail-absolute">
            <a href="#" class="media d-block room bg first-room" style="background-image: url(/imgblade/img_2.jpg); ">
              <!-- <figure> -->
                <div class="overlap-text">
                  <span>
                    Hotel Room
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                  </span>
                  <span class="pricing-from">
                    from $22
                  </span>
                </div>
              <!-- </figure> -->
            </a>

            <a href="#" class="media d-block room bg second-room" style="background-image: url(/imgblade/img_4.jpg); ">
              <!-- <figure> -->
                <div class="overlap-text">
                  <span>
                    Hotel Room
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                  </span>
                  <span class="pricing-from">
                    from $22
                  </span>
                </div>
              <!-- </figure> -->
            </a>

          </div>
        </div>
      </div>
    </section>

</x-layout>
