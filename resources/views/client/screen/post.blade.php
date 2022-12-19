<x-frontend-master>
    <div class="page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-8">
                    <div class="post-single">
                        <div class="post-thumb">
                            <img src="{{ asset(config('app.POST_BIG')).'/'.$data->image }}" alt="" class="img-fluid">
                        </div>

                        <div class="single-post-content">
                            <div class="post-meta">
                                <span class="post-author">Oleh {{ $data->getUser->name }}</span>
                                <span class="post-date"><i class="fa fa-calendar-alt mr-2"></i>{{ $data->date }}</span>
                            </div>
                            <h3 class="post-title">{!! $data->title !!}</h3>
                            <p>{!! $data->content !!}</p>

                        </div>


                        {{-- <div class="blog-footer-meta d-md-flex justify-content-between align-items-center">
                            <div class="post-tags mb-4 mb-md-0">
                                <a href="#">Design</a>
                                <a href="#">Development</a>
                                <a href="#">UX</a>
                            </div>
                        </div> --}}




                    </div>
                  </div>
                <div class="col-lg-4 col-xl-4">
                    @include('client.sections.sidebar')
                </div>
            </div>
        </div>
    </div>
</x-frontend-master>
