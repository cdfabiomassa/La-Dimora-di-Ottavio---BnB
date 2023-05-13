<x-layout>

    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background: linear-gradient(90deg, rgba(0,0,0,0.5) 100%, rgba(0,0,0,0) 100%), url(/imgblade/big_image_1.jpg); background-size: cover;  background-repeat:no-repeat">
        <div class="container">
          <div class="row align-items-center site-hero-inner justify-content-center">
            <div class="col-md-12 text-center">

              <div class="mb-5 element-animate">
                <h1>Contact us</h1>
                <p>My house is your home</p>
              </div>

            </div>
          </div>
        </div>
      </section>
      <!-- END section -->

      <section class="site-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
                <h2 class="mb-5">{{__('ui.contactform')}}</h2>
                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <label for="name" class="fw-light">{{__('ui.name')}}</label>
                        <input name="name" type="text" id="name" class="form-control" required >

                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <label for="phone" class="fw-light">{{__('ui.phone')}}</label>
                        <input name="phone"  type="tel" id="phone" class="form-control @error('phone') is-invalid @enderror" required autocomplete="phone">
                      </div>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="d-flex flex-column justify-content-center m-0 py-2">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="row">
                      <div class="col-md-12 form-group">
                        <label for="email" class="fw-light">Email</label>
                        <input name="email" type="email" id="email" class="form-control @error('email') is-invalid @enderror" required autocomplete="email">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12 form-group">
                        <label for="message" class="fw-light">{{__('ui.writemessage')}}</label>
                        <textarea name="message" id="message" class="form-control " cols="30" rows="8" required></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary">
                      </div>
                    </div>
                  </form>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                  <h3 class="mb-5">{{__('ui.paragraph')}}</h3>
                  <p class="mb-5"><img src="/imgblade/img_4.jpg" alt="" class="img-fluid"></p>
                  <p>{{__('ui.feedback')}}</p>
                </div>
          </div>
        </div>
      </section>
      <!-- END section -->

</x-layout>