<aside class="widget widget_latestposts">
    <h3 class="widget-title">{{ $title }}</h3>
    <div class="latest-content-box">
        @forelse ($data as $item)
            <div class="latest-content color-5">
                <a href="/post/{{ $item->slug }}" title="Recent Posts"><i><img src="{{ $item->image ? asset('storage').'/articles/thumbnail/'.$item->image : asset('frontend').'/assets/images/wd-rcnt-1.jpg'}}" class="wp-post-image" alt="blog-1"></i></a>
                <span><a href="#">{{ $item->getCategory->name }}</a> <a href="#">{{ \Carbon\Carbon::parse($item->created_at)->format('D, d M Y') }}</a></span>
                <h5><a title="{{ $item->title }}" href="/post/{{ $item->slug }}">{{ $item->title }}</a></h5>
            </div>
        @empty

        @endforelse

    </div>
    <div class="see-more"><a href="/posts" title="SEE MORE POST">SEE MORE POST</a></div>
</aside>
