<x-frontend-master>

    @include('client.layouts.banner')
    {{-- @include('client.sections.service') --}}
    @include('client.sections.posts', ['data' => $posts])
    {{-- <section class="section-padding pt-0 mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    @include('client.sections.agenda', ['title' => 'Agenda', 'data' => $agenda])
                </div>
                <div class="col-lg-6 col-md-6">
                    @include('client.sections.kegiatan', ['title' => 'Kegiatan', 'data' => $activities])
                </div>
            </div>
        </div>
    </section> --}}

</x-frontend-master>
