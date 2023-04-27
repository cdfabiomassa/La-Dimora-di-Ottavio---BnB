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
                <h2 class="mb-5">Contact Form</h2>
                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <label for="name">Name</label>
                        <input name="name" type="text" id="name" class="form-control" required >

                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <label for="phone">Phone</label>
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
                        <label for="email">Email</label>
                        <input name="email" type="email" id="email" class="form-control @error('email') is-invalid @enderror" required autocomplete="email">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12 form-group">
                        <label for="message">Write Message</label>
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
                  <h3 class="mb-5">Paragraph</h3>
                  <p class="mb-5"><img src="/imgblade/img_4.jpg" alt="" class="img-fluid"></p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae labore aspernatur cumque inventore voluptatibus odit doloribus! Ducimus, animi perferendis repellat. Ducimus harum alias quas, quibusdam provident ea sed, sapiente quo.</p>
                  <p>Ullam cumque eveniet, fugiat quas maiores, non modi eos deleniti minima, nesciunt assumenda sequi vitae culpa labore nulla! Cumque vero, magnam ab optio quidem debitis dignissimos nihil nesciunt vitae impedit!</p>
                </div>
          </div>
        </div>
      </section>
      <!-- END section -->





      <section class="section-cover" data-stellar-background-ratio="0.5" style="background-image: url(/imgblade/img_5.jpg);">
        <div class="container">
          <div class="row justify-content-center align-items-center intro">
            <div class="col-md-9 text-center element-animate">
              <h2>Relax and Enjoy your Holiday</h2>
              <p class="lead mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto quidem tempore expedita facere facilis, dolores!</p>
              <div class="btn-play-wrap"><a href="https://vimeo.com/channels/staffpicks/93951774" class="btn-play popup-vimeo "><span class="ion-ios-play"></span></a></div>
            </div>
          </div>
        </div>
      </section>
      <!-- END section -->

</x-layout>