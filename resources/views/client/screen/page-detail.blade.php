<x-frontend-master>
    <section class="page-header">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-8">
              <div class="title-block">
                <h1>{{ $data->title }}</h1>
                <ul class="header-bradcrumb justify-content-center">
                  <li><a href="/">Home</a></li>
                  <li class="active" aria-current="page">{{ $data->title }}</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
    </section>
    <div class="page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="post-single">
                        {{-- <div class="post-thumb">
                            <img src="assets/images/blog/blog-lg1.jpg" alt="" class="img-fluid">
                        </div> --}}

                        <div class="single-post-content">
                            {!! $data->content !!}
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-xl-4">
                    <div class="blog-sidebar mt-5 mt-lg-0">
                        <div class="widget widget_latest_post">
                            <h4 class="widget-title">Artikel Populer</h4>
                            <div class="recent-posts">
                                @forelse ($popular as $item)
                                    <div class="single-latest-post">
                                        <div class="widget-thumb">
                                            <a href="{{ route('post.detail', $item->slug) }}"><img src="{{ asset(config('app.POST_MID')).'/'.$item->image }}" alt="" class="img-fluid"></a>
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
