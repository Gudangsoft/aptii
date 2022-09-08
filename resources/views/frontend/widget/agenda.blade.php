    <section id="section-fun-facts" class="pt60 pb60">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12">
                <h2>
                    {{ $title }}
                </h2>
                <div class="small-border sm-left"></div>
                @foreach ($data as $row)
                    <div class="sm-icon mb30">
                        <i class="bg-color fa fa-calendar-check-o"></i>
                        <div class="si-inner">
                            <a href="{{ $row->url }}" class=" text-dark">
                                <h5>{{ \Illuminate\Support\Str::words($row->title, 15) }}</h5>
                            </a>
                            <span class="p-title invert">{{ $row->dateFormat }}</span>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-md-6 col-lg-6 col-sm-12">
                <h2>
                    Kontak
                </h2>
                <div class="small-border sm-left"></div>

                @include('frontend.widget.contact', ['title' => 'Kontak', 'limit' => 3])
            </div>
        </div>
    </div>
</section>
