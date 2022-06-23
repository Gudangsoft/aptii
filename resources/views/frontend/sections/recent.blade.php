<div class="container-fluid no-left-padding no-right-padding recent-post full-recent-post">
    <div class="section-header">
        <h3>RECENT POSTS</h3>
    </div>

    <div class="row">
        @forelse ($data as $item)
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="type-post color-6">
                    <div class="entry-cover"><a href="#"><img src="{{ asset('frontend') }}/assets/images/recent-post-1-376x299.jpg" alt="Post" /></a></div>
                    <div class="entry-content">
                        <div class="post-category"><a href="/category/{{ $item->getCategory->slug }}" title="{{ $item->getCategory->name }}">{{ $item->getCategory->name }}</a></div>
                        <h3 class="entry-title"><a href="/post/{{ $item->slug }}">{{ $item->title }}</a></h3>
                        <p>Reporter is one of the excellent magazine in the world.Newshub magazine reached many readers very soon.</p>
                        <div class="entry-footer">
                            <span class="post-date"><a href="#">{{ \Carbon\Carbon::parse($item->created_at)->format('D, d M Y') }}</a></span>
                            <span class="post-like"><i class="fa fa-heart-o"></i><a href="#">651</a></span>
                            <span class="post-view"><i class="fa fa-eye"></i><a href="#">{{ $item->counter }}</a></span>
                        </div>
                        <a href="/post/{{ $item->slug }}" title="Read More">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div><
            </div>
        @empty
            <div class="col-12 p-2">
                <h4>Empty...</h4>
            </div>
        @endforelse
    </div>
</div>
