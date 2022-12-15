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
                                        <a href="{{ route('post.detail', $item->slug) }}"><img src="{{ asset(config('app.POST_MID')).'/'.$item->image }}" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="post-meta">
                                            <span class="post-author">{{ $item->getUser->name }}</span>
                                            <span class="post-date"><i class="fa fa-calendar-alt mr-2"></i>{{ $item->date }}</span>
                                        </div>

                                        <h3 class="post-title"> <a href="{{ route('post.detail', $item->slug) }}">{{ $item->title }}</a></h3>
                                        {!! $item->des !!}
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
                  {{-- <div class="col-lg-4 col-xl-4">
                    <div class="blog-sidebar mt-5 mt-lg-0">
                        <div class="widget widget-search">
                            <form role="search" class="search-form">
                                <input type="text" class="form-control" placeholder="Search">
                                <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>

                        <div class="widget widget_latest_post">
                            <h4 class="widget-title">Latest Posts</h4>
                            <div class="recent-posts">
                                <div class="single-latest-post">
                                    <div class="widget-thumb">
                                        <a href="blog-single.html"><img src="assets/images/blog/sm3.png" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="widget-content">
                                        <h5> <a href="blog-single.html">Custom Platform for an Audit Insurance</a></h5>
                                        <span><i class="fa fa-calendar-times"></i>10 april 2021</span>
                                    </div>
                                </div>

                                <div class="single-latest-post">
                                    <div class="widget-thumb">
                                        <a href="blog-single.html"><img src="assets/images/blog/sm2.png" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="widget-content">
                                        <h5> <a href="blog-single.html">World’s most famous app developers</a></h5>
                                        <span><i class="fa fa-calendar-times"></i>10 april 2021</span>
                                    </div>
                                </div>
                                <div class="single-latest-post">
                                    <div class="widget-thumb">
                                        <a href="blog-single.html"><img src="assets/images/blog/sm3.png" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="widget-content">
                                        <h5> <a href="blog-single.html">Be a top rated marketer</a></h5>
                                        <span><i class="fa fa-calendar-times"></i>10 april 2021</span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="widget widget_categories">
                            <h4 class="widget-title">Categories</h4>
                            <ul>
                            <li class="cat-item"><a href="#">Web Design</a>(4)</li>
                            <li class="cat-item"><a href="#">Wordpress</a>(14)</li>
                            <li class="cat-item"><a href="#">Marketing</a>(24)</li>
                            <li class="cat-item"><a href="#">Design & dev</a>(6)</li>
                            </ul>
                        </div>

                        <div class="widget widget_tag_cloud">
                            <h4 class="widget-title">Tags</h4>
                            <a href="#">Design</a>
                            <a href="#">Development</a>
                            <a href="#">UX</a>
                            <a href="#">Marketing</a>
                            <a href="#">Tips</a>
                            <a href="#">Tricks</a>
                            <a href="#">Ui</a>
                            <a href="#">Free</a>
                            <a href="#">Wordpress</a>
                            <a href="#">bootstrap</a>
                            <a href="#">Tutorial</a>
                            <a href="#">Html</a>
                        </div>

                    </div>
                  </div> --}}
            </div>
        </div>
    </div>
</x-frontend-master>

