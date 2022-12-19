<section class="section-padding pt-0 mt-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="heading mb-2 mt-4 text-center">
                    <h4 class="text-uppercase">Artikel Asosiasi</h4>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            @forelse ($data as $item)
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="course-grid course-style-3">
                        <div class="course-header">
                            <div class="course-thumb">
                                <img src="{{ asset(config('app.POST_MID')).'/'.$item->image }}" alt="" class="img-fluid">
                            </div>
                        </div>

                        <div class="course-content">
                            <div class="course-meta d-flex justify-content-between mb-20">
                                <span class="category">{{ $item->getCategory->name }}</span>
                            </div>
                            <h3 class="course-title mb-20"> <a href="{{ route('post.detail', $item->slug) }}">{{ $item->title }}</a> </h3>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 d-flex justify-content-center">
                    <h3>Coming Soon..</h3>
                </div>
            @endforelse
            <div class="col-12 d-flex justify-content-center">
                <a href="/posts" class="btn btn-sm btn-primary">Selengkapnya</a>
            </div>
        </div>

    </div>
</section>
