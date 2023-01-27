<section class="section-padding pt-0 mt-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="heading mb-2 mt-4 text-center">
                    <h4 class="text-uppercase">Video</h4>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            @forelse ($data as $item)
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="course-grid course-style-3">
                        <div class="course-header">
                            <div class="course-thumb">
                                <img src="https://img.youtube.com/vi/{{ $item->youtube_id }}/mqdefault.jpg" alt="" class="img-fluid">
                            </div>
                        </div>

                        <div class="course-content">
                            <h3 class="course-title mb-20"> <a href="{{ route('videos.detail', ['name' => $item->slug]) }}">{{ $item->title }}</a> </h3>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 d-flex justify-content-center">
                    <h3>Coming Soon..</h3>
                </div>
            @endforelse
            <div class="col-12 d-flex justify-content-center">
                <a href="/videos" class="btn btn-sm btn-primary">Selengkapnya</a>
            </div>
        </div>

    </div>
</section>
