<x-frontend-master>
    <!-- Carousel wrapper -->
    <section id="de-carousel" class="no-top no-bottom carousel slide carousel-fade shadow-2-strong" data-mdb-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-mdb-target="#de-carousel" data-mdb-slide-to="0" class="active"></li>
          <li data-mdb-target="#de-carousel" data-mdb-slide-to="1"></li>
          <li data-mdb-target="#de-carousel" data-mdb-slide-to="2"></li>
        </ol>

        <!-- Inner -->
        <div class="carousel-inner">
          <!-- Single item -->
          <div class="carousel-item active" data-bgimage="url({{ asset('frontend') }}/images/slider/1.jpg)">
            <div class="mask">
              <div class="d-flex justify-content-center align-items-center h-100">
                <div class="container text-white text-center">
                  <div class="row">
                      <div class="col-md-6 offset-md-3">
                          <h1 class="mb-3 wow fadeInUp">Together we can <br class="sm-hide">create better work</h1>
                          <p class="lead wow fadeInUp" data-wow-delay=".3s">We provide the best workspace for your company. Over 150 locations around the world. Find your best place to work in CoSpace.</p>
                          <div class="spacer-10"></div>
                          <a href="explore.html" class="btn-main wow fadeInUp" data-wow-delay=".6s">Explore</a>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Single item -->
          <div class="carousel-item" data-bgimage="url({{ asset('frontend') }}/images/slider/2.jpg)">
            <div class="mask">
              <div class="d-flex justify-content-center align-items-center h-100 wow f">
                <div class="container text-white text-center">
                  <div class="row">
                      <div class="col-md-6 offset-md-3">
                          <h1 class="mb-3 wow fadeInUp">Modern &amp; comfortable space to work</h1>
                          <p class="lead wow fadeInUp" data-wow-delay=".3s">We provide the best workspace for your company. Over 150 locations around the world. Find your best place to work in CoSpace.</p>
                          <div class="spacer-10"></div>
                          <a href="explore.html" class="btn-main wow fadeInUp" data-wow-delay=".6s">Explore</a>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Single item -->
          <div class="carousel-item" data-bgimage="url({{ asset('frontend') }}/images/slider/3.jpg)">
            <div class="mask">
              <div class="d-flex justify-content-center align-items-center h-100">
                <div class="container text-white text-center">
                  <div class="row">
                      <div class="col-md-6 offset-md-3">
                          <h1 class="mb-3 wow fadeInUp">The workspace for <br class="sm-hide"> every need</h1>
                          <p class="lead wow fadeInUp" data-wow-delay=".3s">We provide the best workspace for your company. Over 150 locations around the world. Find your best place to work in CoSpace.</p>
                          <div class="spacer-10"></div>
                          <a href="explore.html" class="btn-main wow fadeInUp" data-wow-delay=".6s">Explore</a>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         </div>
        <!-- Inner -->

        <!-- Controls -->
        <a class="carousel-control-prev" href="#de-carousel" role="button" data-mdb-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#de-carousel" role="button" data-mdb-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </section>

    {{-- <section class="pt30 pb30 bg-color-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div id="item_category" class="dropdown style-2">
                        <h4>Locations</h4>
                        <a href="#" class="btn-selector">Australia</a>
                        <ul class="d-col-3">
                            <li><span>Australia</span></li>
                            <li><span>Austria</span></li>
                            <li><span>Belgium</span></li>
                            <li><span>Brazil</span></li>
                            <li><span>Canada</span></li>
                            <li><span>Chile</span></li>
                            <li><span>China</span></li>
                            <li><span>Colombia</span></li>
                            <li><span>Croatia</span></li>
                            <li><span>Czech Republic</span></li>
                            <li><span>Denmark</span></li>
                            <li><span>Estonia</span></li>
                            <li><span>Finland</span></li>
                            <li><span>France</span></li>
                            <li><span>Germany</span></li>
                            <li><span>Greece</span></li>
                            <li><span>Hungary</span></li>
                            <li><span>India</span></li>
                            <li><span>Indonesia</span></li>
                            <li><span>Ireland</span></li>
                            <li><span>Japan</span></li>
                            <li><span>Malaysia</span></li>
                            <li><span>Mexico</span></li>
                            <li><span>New Zealand</span></li>
                            <li><span>Peru</span></li>
                            <li><span>Philippines</span></li>
                            <li><span>South Africa</span></li>
                            <li><span>Ukraine</span></li>
                            <li><span>United Kingdom</span></li>
                            <li><span>Uruguay</span></li>
                            <li><span>USA</span></li>
                            <li><span>Thailand</span></li>
                            <li><span>Venezuela</span></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3">
                    <div id="buy_category" class="dropdown style-2">
                        <h4>Plans</h4>
                        <a href="#" class="btn-selector">All Plans</a>
                        <ul>
                            <li class="active"><span>All Plans</span></li>
                            <li><span>Daily Pass</span></li>
                            <li><span>Flexi Desk</span></li>
                            <li><span>Team Desk</span></li>
                            <li><span>Dedicated Desk</span></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3">
                    <div id="items_type" class="dropdown style-2">
                        <h4>Number of People</h4>
                        <a href="#" class="btn-selector">1 Person</a>
                        <ul>
                            <li class="active"><span>1 Person</span></li>
                            <li><span>2 - 5 Persons</span></li>
                            <li><span>6 - 10 Persons</span></li>
                            <li><span>11 - 20 Persons</span></li>
                            <li><span>More than 20</span></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3">
                    <a href="search-result.html" class="btn-search-big">Submit</a>
                </div>
            </div>
        </div>
    </section> --}}

    <section id="section-studio-type">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2>Seminar</h2>
                        <div class="small-border bg-color-2"></div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="de-image-text">
                        <a href="#" class="d-text">
                            <h3><span class="id-color">01</span> Podcast</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.</p>
                        </a>
                        <img src="{{ asset('frontend') }}/images/misc/space-type-podcast.jpg" class="img-fluid" alt="">
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="de-image-text">
                        <a href="#" class="d-text">
                            <h3><span class="id-color">02</span> Live Streaming</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.</p>
                        </a>
                        <img src="{{ asset('frontend') }}/images/misc/space-type-streaming.jpg" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="de-image-text">
                        <a href="#" class="d-text">
                            <h3><span class="id-color">03</span> Photo &amp; Video Shoot</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.</p>
                        </a>
                        <img src="{{ asset('frontend') }}/images/misc/space-type-photo.jpg" class="img-fluid" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="section-why-choose-us" class="no-top no-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2>Artikel Informasi</h2>
                        <div class="small-border bg-color"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('frontend') }}/images/misc/images-set-2.png" class="lazy img-fluid" alt="">
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-lg-6 mb20">
                            <h4>Modern &amp; Comfortable</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.</p>
                        </div>
                        <div class="col-lg-6 mb20">
                            <h4>24/7 Secure Access</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.</p>
                        </div>
                        <div class="col-lg-6 mb20">
                            <h4>Free Drinks &amp; Snacks</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.</p>
                        </div>
                        <div class="col-lg-6 mb20">
                            <h4>Printing &amp; Scanning</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend-master>
