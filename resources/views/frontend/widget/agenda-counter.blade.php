<section id="section-studio-type">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="text-center">
                    <h2>{{ $title }}</h2>
                    <div class="small-border bg-color-2"></div>
                </div>
            </div>

            <div class="de-box mb25">
                @foreach ($data as $row)
                    <div class="sm-icon mb30">
                        <i class="bg-color fa fa-calendar-check-o"></i>
                        <div class="si-inner">
                            <h5>{{ \Illuminate\Support\Str::words($row->title, 15) }}</h5>
                            <span class="p-title invert">{{ $row->dateFormat }}</span>
                            {!! \Illuminate\Support\Str::words($row->description, 30) !!}
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</section>

<section id="section-fun-facts" class="pt60 pb60">
    <div class="container">
        <div class="row">
            <div class="col">

            </div>

        </div>
    </div>
</section>
