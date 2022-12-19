<x-frontend-master>
    <section class="page-header">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-8">
              <div class="title-block">
                <h1>{{ $data->title }}</h1>
                <ul class="header-bradcrumb justify-content-center">
                  <li><a href="/">Home</a></li>
                  <li class="active" aria-current="page">{{ $data->title }}</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
    </section>
    <div class="page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="post-single">
                        {{-- <div class="post-thumb">
                            <img src="assets/images/blog/blog-lg1.jpg" alt="" class="img-fluid">
                        </div> --}}

                        <div class="single-post-content">
                            {!! $data->content !!}
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-xl-4">
                    @include('client.sections.sidebar')
                </div>
            </div>
        </div>
    </div>
</x-frontend-master>
