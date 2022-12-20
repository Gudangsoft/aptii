
<div class="row mt-4">
    <div class="col-xl-8">
        <div class="heading mb-2 mt-4 text-start">
            <h4 class="text-uppercase">{{ $title }}</h4>
        </div>
    </div>
</div>
<div class="list-group">
    @forelse ($data as $item)
        <a href="{{ route('kegiatan.detail', ['name' => $item->slug]) }}" class="list-group-item list-group-item-action {{ $loop->first ? 'active' : '' }}" aria-current="true">
            <div class="d-flex w-100 justify-content-between p-1">
                <h6 class="mb-1 text-{{ $loop->first ? 'white' : 'dark' }}"><i class="far fa-check-circle"></i> - {{ \Illuminate\Support\Str::words($item->name, 15) }} | <span class="fw-light">{{ $item->institution }}</span></h6>
            </div>
        </a>
    @empty
        <a href="#" class="list-group-item list-group-item-action text-primary text-center">Tidak tersedia.</a>
    @endforelse
</div>
