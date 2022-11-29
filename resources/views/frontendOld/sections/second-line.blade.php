<section id="section-fun-facts" class="pt60 pb60">
    <div class="container">
        <div class="row">

            @include('frontend.widget.info-prosiding', ['data' => $prosidingInfo, 'title' => 'INFO PROSIDING', 'limit' => 3])
            @include('frontend.widget.agenda', ['data' => $agenda, 'title' => 'AGENDA', 'limit' => 3])
            @include('frontend.widget.contact', ['cutomerCare' => $customerCare, 'title' => 'KONTAK', 'limit' => 3])

        </div>
    </div>
</section>
