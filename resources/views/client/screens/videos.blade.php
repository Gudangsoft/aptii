<x-frontend-master>
    <div class="page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="row">
                        @forelse ($data as $item)
                            <div class="col-xl-4">
                                <div class="blog-item mb-30">
                                    <div class="post-thumb">
                                        <a href="{{ route('videos.detail', ['name' => $item->slug]) }}"><img src="https://img.youtube.com/vi/{{ $item->youtube_id }}/maxresdefault.jpg" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="post-meta">
                                            <span class="post-author">{{ $item->getAdd->name }}</span>
                                        </div>

                                        <h5 class="course-title mb-20"> <a href="{{ route('videos.detail', ['name' => $item->slug]) }}">{{ $item->title }}</a></h5>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12 d-flex justify-content-center">
                                <h3>Coming Soon.</h3>
                            </div>
                        @endforelse


                    </div>

                    <nav class="d-flex justify-content-center">
                        {{ $data->links() }}
                    </nav>
                  </div>
            </div>
        </div>
    </div>
</x-frontend-master>

