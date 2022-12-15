<x-frontend-master>
    <section class="page-header">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-8">
              <div class="title-block">
                <h1>Jurnal</h1>
                <ul class="header-bradcrumb justify-content-center">
                  <li><a href="/">Home</a></li>
                  <li class="active" aria-current="page">Jurnal</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
    </section>
    <section class="section-padding page" >
        <div class="container">
            <div class="row justify-content-center">
                @forelse ($data as $item)
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="course-grid course-style-3">
                            <div class="course-header">
                                <div class="course-thumb">
                                    <img src="{{ asset('frontend') }}/images/course/journal.png" alt="" class="img-fluid">
                                </div>
                            </div>

                            <div class="course-content">
                                <div class="course-meta d-flex justify-content-between mb-20">
                                    <span class="category">{{ $item->getBidangIlmu->judul }}</span>
                                </div>
                                <h3 class="course-title mb-20"> <a href="{{ route('journal.detail', ['id' => $item->id]) }}">{{ $item->judul }}</a> </h3>

                                <div class="course-meta-info">
                                    <div class="d-flex align-items-center">
                                        <div class="author me-3">
                                            <img src="{{ asset('storage/images/users').'/'.$item->getUser->profile_photo_path }}" alt="" class="img-fluid">
                                            Oleh <a href="{{ route('author', ['username' => $item->getUser->username]) }}">{{ $item->getUser->name }}</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <h3>Coming Soon...</h3>
                    </div>
                @endforelse



            </div>
        </div>
        <!--course-->
    </section>
</x-frontend-master>
