<section class="section-padding pt-0 mt-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="heading mb-2 mt-4 text-center">
                    <h2 class="text-uppercase">{{ $title }}</h2>
                </div>
            </div>
        </div>
        <div class="list-group">
            @forelse ($data as $item)
                <button type="button" class="list-group-item list-group-item-action {{ $loop->first ? 'active' : '' }}"><a href="{{ $item->url }}" class="text-dark">{{ \Illuminate\Support\Str::words($item->title, 15) }}</a></button>
            @empty
                <button type="button" class="list-group-item list-group-item-action">Coming Soon...</button>
            @endforelse
        </div>

    </div>
</section>
