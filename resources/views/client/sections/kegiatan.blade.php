<section class="section-padding pt-0 mt-3">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="heading mb-2 mt-4 text-start">
                    <h4 class="text-uppercase">{{ $title }}</h4>
                </div>
            </div>
        </div>
        <div class="list-group">
            @forelse ($data as $item)
                @if ($loop->index < 6)
                    <a href="{{ $item->url }}" class="list-group-item list-group-item-action {{ $loop->first ? 'active' : '' }}" aria-current="true">
                        <div class="d-flex w-100 justify-content-between p-1">
                            <h6 class="mb-1 text-{{ $loop->first ? 'white' : 'dark' }}"><i class="far fa-check-circle"></i> - {{ \Illuminate\Support\Str::words($item->name, 15) }} | <span class="fw-light">{{ $item->institution }}</span></h6>
                        </div>
                    </a>
                @endif
                @if ($loop->index == 5)
                    <a href="/kegiatan" class="list-group-item list-group-item-action text-primary text-end">Lainnya</a>
                @endif
            @empty
                <a href="#" class="list-group-item list-group-item-action text-primary text-center">Coming Soon.</a>
            @endforelse
        </div>

    </div>
</section>
