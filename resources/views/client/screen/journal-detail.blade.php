<x-frontend-master>
    <section class="page-header">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-8">
              <div class="title-block">
                <h1>{{ $data->judul }}</h1>
                <ul class="header-bradcrumb justify-content-center">
                  <li><a href="/">Home</a></li>
                  <li class="active" aria-current="page">Jurnal</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
    </section>
    <div class="page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="post-single">
                        <div class="post-thumb">
                            <img src="assets/images/blog/blog-lg1.jpg" alt="" class="img-fluid">
                        </div>

                        <div class="single-post-content">
                            <div class="post-meta">
                                <span class="post-author">Oleh {{ $data->getUser->name }}</span>
                                <span class="post-date"><i class="fa fa-calendar-alt mr-2"></i>{{ $data->date }}</span>
                            </div>
                            <h3 class="post-title">{!! $data->judul !!}</h3>
                            <p>{!! $data->abstrak !!}</p>

                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="{{ asset('storage/files/naskah/'.$data->file_naskah) }}" class="btn btn-sm btn-primary"><i class="fa fa-download"></i> DOWNLOAD</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-frontend-master>
