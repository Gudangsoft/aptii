<section class="section-padding pt-0">
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
                        <h6 class="mb-1 lh-base text-{{ $loop->first ? 'white' : 'dark' }}"><i class="far fa-calendar-edit"></i> - {{ \Illuminate\Support\Str::words($item->title, 15) }} <span class="badge bg-{{ $loop->first ? 'dark' : 'primary' }} text-white fw-bold">{!! $item->dateFormat !!}</span></h6>
                    </div>
                    {{-- <span>{!! $item->description !!}</span> --}}
                </a>
                @endif
                @if ($loop->index == 5)
                    <a href="/agenda" class="list-group-item list-group-item-action text-primary text-end">Lainnya</a>
                @endif
            @empty
                <a href="#" class="list-group-item list-group-item-action text-primary text-center">Coming Soon.</a>
            @endforelse
        </div>

    </div>
</section>
