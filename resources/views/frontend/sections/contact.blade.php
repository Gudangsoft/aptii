<x-frontend-master>
    <section id="subheader" class="text-light" data-bgimage="url({{ asset('frontend')}}/images/background/subheader.jpg) top">
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 text-center">
                        <h1>Kontak</h1>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
    <section aria-label="section">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 mb-sm-30">
                    <h3>Lokasi</h3>
                    <div class="de-map-wrapper">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7356410651896!2d110.18192551413703!3d-6.922172794998487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e705cf3eaaaaaab%3A0xe0f09d03c189b72e!2sUniversitas%20STEKOM%20Komputer%20Desain%20Grafis%20Bisnis%20Akuntansi%20P2K%20Kendal%20Kuliah%20Online!5e0!3m2!1sid!2sid!4v1662576343668!5m2!1sid!2sid"  allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>

                <div class="col-lg-4">
                    <h3>Narahubung</h3>
                    @include('frontend.widget.contact', ['title' => 'Kontak', 'limit' => 3])

                </div>

            </div>
        </div>

    </section>
</x-frontend-master>
