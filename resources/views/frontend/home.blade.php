<x-frontend-master>

    @include('frontend.widget.headline-slider', ['data' => $headline, 'limit' => 4])
    @include('frontend.widget.seminar', ['data' => $events, 'title' => 'Seminar', 'limit' => 6])
    @include('frontend.widget.artikel', ['data' => $prosidingInfo, 'title' => 'Info Prosiding', 'limit' => 3])
    @include('frontend.widget.agenda-counter', ['data' => $agenda, 'title' => 'Agenda', 'limit' => 3])

</x-frontend-master>
