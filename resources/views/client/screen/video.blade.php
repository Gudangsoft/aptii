<x-frontend-master>
    <div class="page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-8">
                    <div class="post-single">
                        <div class="post-thumb">
                            <iframe width="100%" height="415" src="https://www.youtube.com/embed/{{ $data->youtube_id }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            {{-- <img src="https://img.youtube.com/vi/{{ $data->youtube_id }}/maxresdefault.jpg" alt="" class="img-fluid"> --}}
                        </div>

                        <div class="single-post-content">

                            <h3 class="post-title">{!! $data->title !!}</h3>
                            {!! $data->content !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4">
                    @include('client.sections.sidebar-journal')
                </div>
            </div>
        </div>
    </div>
</x-frontend-master>
