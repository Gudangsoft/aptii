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
                            <h5>
                                <a href="#" class=" text-dark">
                                    {{ \Illuminate\Support\Str::words($row->title, 15) }}</h5>
                                </a>
                                <span class="p-title invert">{{ $row->dateFormat }}</span>
                            {{-- {!! \Illuminate\Support\Str::words($row->description, ) !!} --}}
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-md-6 col-lg-6 col-sm-12">
                <h2>
                    Statistik
                </h2>
                <div class="small-border sm-left"></div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 wow fadeInRight mb30" data-wow-delay="0s">
                        <div class="de_count">
                            <h3><span class="timer" data-to="{{ $statistics['posts'] }}" data-speed="3000">0</span></h3>
                            <h5 class="id-color">Artikel</h5>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInRight mb30" data-wow-delay=".25s">
                        <div class="de_count">
                            <h3><span class="timer" data-to="{{ $statistics['naskah'] }}" data-speed="3000">0</span></h3>
                            <h5 class="id-color">Naskah</h5>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInRight mb30" data-wow-delay=".4s">
                        <div class="de_count">
                            <h3><span class="timer" data-to="{{ $statistics['users'] }}" data-speed="3000">0</span></h3>
                            <h5 class="id-color">Users</h5>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
