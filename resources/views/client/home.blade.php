<x-frontend-master>

    @include('client.layouts.banner')
    @include('client.sections.service')
    @include('client.sections.posts', ['data' => $posts])

</x-frontend-master>
