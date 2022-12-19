<div class="blog-sidebar mt-5 mt-lg-0">
    <div class="widget widget_latest_post">
        <h4 class="widget-title">Artikel Populer</h4>
        <div class="recent-posts">
            @forelse ($popular as $item)
                <div class="single-latest-post">
                    <div class="widget-thumb">
                        <a href="blog-single.html"><img src="{{ asset(config('app.POST_MID')).'/'.$item->image }}" alt="" class="img-fluid"></a>
                    </div>
                    <div class="widget-content">
                        <h6> <a href="{{ route('post.detail', $item->slug) }}">{{ $item->title }}</a></h6>
                        <span><i class="fas fa-calendar-alt"></i> {{ $item->date }}</span>
                    </div>
                </div>
            @empty
                <h3>Coming Soon.</h3>
            @endforelse
        </div>
    </div>
    <div>
        @include('client.sections.kegiatan', ['title' => 'Kegiatan', 'data' => $activities])
        @include('client.sections.agenda', ['title' => 'Agenda', 'data' => $agenda])
    </div>

</div>
