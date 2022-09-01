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
                    <h3>Apakah anda memiliki pertanyaan ?</h3>

                    <form name="contactForm" id="contact_form" class="form-border" method="post" action="#">
                        <div class="field-set">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Nama" />
                        </div>

                        <div class="field-set">
                            <input type="text" name="email" id="email" class="form-control" placeholder="Email" />
                        </div>

                        <div class="field-set">
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Nomor Telpon" />
                        </div>

                        <div class="field-set">
                            <textarea name="message" id="message" class="form-control" placeholder="Pertanyaan anda"></textarea>
                        </div>

                        <div class="spacer-half"></div>

                        <div id="submit">
                            <input type="submit" id="send_message" value="KIRIM" class="btn btn-main" />
                        </div>
                        {{-- <div id="mail_success" class="success">Your message has been sent successfully.</div>
                        <div id="mail_fail" class="error">Sorry, error occured this time sending your message.</div> --}}
                    </form>
                </div>

                <div class="col-lg-4">

                    @include('frontend.widget.contact', ['title' => 'Kontak', 'limit' => 3])

                </div>

                </div>
            </div>

    </section>
</x-frontend-master>
