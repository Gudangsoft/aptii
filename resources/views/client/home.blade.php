<x-frontend-master>

    @include('client.layouts.banner')
    {{-- @include('client.sections.service') --}}
    @include('client.sections.posts', ['data' => $posts])
    @include('client.sections.agenda', ['title' => 'Agenda', 'data' => $agenda])

</x-frontend-master>
