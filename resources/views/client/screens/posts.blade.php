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
            </div>
        </div>
    </div>
</x-frontend-master>

