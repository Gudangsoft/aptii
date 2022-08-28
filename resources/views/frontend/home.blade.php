<x-frontend-master>

    @include('frontend.widget.headline-slider', ['data' => $headline, 'limit' => 4])
    @include('frontend.widget.seminar', ['data' => $events, 'title' => 'Seminar', 'limit' => 3])
    @include('frontend.widget.artikel')

</x-frontend-master>
