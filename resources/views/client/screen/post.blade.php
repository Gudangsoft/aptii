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
                    <div class="blog-sidebar mt-5 mt-lg-0">
                        <div class="widget widget_latest_post">
                            <h4 class="widget-title">Popular</h4>
                            <div class="recent-posts">
                                @forelse ($popular as $item)
                                    <div class="single-latest-post">
                                        <div class="widget-thumb">
                                            <a href="blog-single.html"><img src="{{ asset(config('app.POST_MID')).'/'.$data->image }}" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="widget-content">
                                            <h6> <a href="{{ route('post.detail', $item->slug) }}">{{ $item->title }}</a></h6>
                                            <span><i class="fa fa-calendar-times"></i>{{ $item->date }}</span>
                                        </div>
                                    </div>
                                @empty
                                    <h3>Coming Soon.</h3>
                                @endforelse
                            </div>
                        </div>


                        {{-- <div class="widget widget_categories">
                            <h4 class="widget-title">Categories</h4>
                            <ul>
                            <li class="cat-item"><a href="#">Web Design</a>(4)</li>
                            <li class="cat-item"><a href="#">Wordpress</a>(14)</li>
                            <li class="cat-item"><a href="#">Marketing</a>(24)</li>
                            <li class="cat-item"><a href="#">Design & dev</a>(6)</li>
                            </ul>
                        </div> --}}


                    </div>
                </div>
            </div>
        </div>
    </div>
</x-frontend-master>
