{{--  Mengambil extends navbar ke layouts/app.blade.php  --}}
@extends('layouts.app')

@section('title','NOMADS')

@section('content')

<!-- header -->
<header class="text-center">
    <h1>
        Explore the Beautiful World
        <br /> As Easy One Click
    </h1>
    <p class="mt-3">
        You will see Beautiful
        <br /> moment you never see before
    </p>
    <a href="#" class="btn btn-get-started px-4 mt-4">
    Get Started
  </a>
</header>

<!-- MAIN -->
<main>
    <div class="container">
        <section class="section-stats row justify-content-center" id="stats">
            <div class="col-3 col-md-2 stats-detail">
                <h2>20K</h2>
                <p>Members</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>12</h2>
                <p>Countries</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>3K</h2>
                <p>Hotels</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>72</h2>
                <p>Partners</p>
            </div>
        </section>
    </div>

    <section class="section-popular" id="popular">
        <div class="container">
            <div class="row">
                <div class="col text-center section-popular-heading">
                    <h2>Wisata Popular</h2>
                    <p>
                        Something that you never try
                        <br /> before in this world
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-popular-content" id="popularContent">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/Group 20.jpg');">
                        <div class="travel-country">INDONESIA</div>
                        <div class="travel-location">DERATAN, BALI</div>
                        <div class="travel-button mt-auto">
                            <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">
                View Details
              </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/Group 21.jpg');">
                        <div class="travel-country">INDONESIA</div>
                        <div class="travel-location">BROMO</div>
                        <div class="travel-button mt-auto">
                            <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">
                View Details
              </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/Group 22.jpg');">
                        <div class="travel-country">INDONESIA</div>
                        <div class="travel-location">NUSA PENIDA</div>
                        <div class="travel-button mt-auto">
                            <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">
                View Details
              </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/Group 23.jpg');">
                        <div class="travel-country">INDONESIA</div>
                        <div class="travel-location">BOROBUDUR</div>
                        <div class="travel-button mt-auto">
                            <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">
                View Details
              </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-networks" id="networks">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Our Networks</h2>
                    <p>
                        Companies are trusted us
                        <br /> more than just a trip
                    </p>
                </div>
                <div class="col-md-8 text-center">
                    <img src="frontend/images/logo_partner.png" alt="Logo partner" class="img-partner" />
                </div>
            </div>
        </div>
    </section>

    <section class="section-testimonial-heading" id="testimonialHeading">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2>They Are Loving Us</h2>
                    <p>
                        Moments were giving them
                        <br /> the best experience
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-testimonial-content" id="testimonialContent">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="frontend/images/Mask Group 1.png" alt="user" class="mb-4 rounded-circle" />
                            <h3 class="mb-4">Susi susanti</h3>
                            <p class="testimonial">
                                "it was glorious and i could not stop to say wohoo for every single moment dankeeee"
                            </p>
                        </div>
                        <hr />
                        <p class="trip-to mt-2">
                            Trip To Ubud
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="frontend/images/Mask Group 2.png" alt="user" class="mb-4 rounded-circle" />
                            <h3 class="mb-4">Siti badriah</h3>
                            <p class="testimonial">
                                "it was glorious and i could not stop to say wohoo for every single moment dankeeee"
                            </p>
                        </div>
                        <hr />
                        <p class="trip-to mt-2">
                            Trip To Nusa Penida
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="frontend/images/Mask Group 3.png" alt="user" class="mb-4 rounded-circle" />
                            <h3 class="mb-4">Cimoy montok</h3>
                            <p class="testimonial">
                                "it was glorious and i could not stop to say wohoo for every single moment dankeeee"
                            </p>
                        </div>
                        <hr />
                        <p class="trip-to mt-2">
                            Trip To Karimun Jawa
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
            I Need Help
          </a>
                    <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">
            Get Started
          </a>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
