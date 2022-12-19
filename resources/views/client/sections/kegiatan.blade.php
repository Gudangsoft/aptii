<section class="section-padding pt-0 mt-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="heading mb-2 mt-4 text-center">
                    <h4 class="text-uppercase">{{ $title }}</h4>
                </div>
            </div>
        </div>
        <div class="list-group">
            @forelse ($data as $item)
                @if ($loop->index < 6)
                    <button type="button" class="list-group-item list-group-item-action {{ $loop->first ? 'active' : '' }}"><a href="{{ $item->url }}" class="text-{{ $loop->first ? 'white' : 'dark' }}"><i class="fas fa-check-circle"></i> - {{ \Illuminate\Support\Str::words($item->name, 15) }} | <span class="fw-light">{{ $item->institution }}</span></a></button>
                @endif
                @if ($loop->index == 5)
                    <button type="button" class="list-group-item list-group-item-action text-end"><a href="/kegiatan" class="text-primary">Lainnya</a></button>
                @endif
            @empty
                <button type="button" class="list-group-item list-group-item-action">Coming Soon...</button>
            @endforelse
        </div>

    </div>
</section>
