<x-frontend-master>
    <div class="page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="post-single">
                        <div class="courses-instructor">
                            <div class="single-instructor-box">
                                <div class="row align-items-center">
                                    <div class="col-lg-4 col-md-4 mb-3">
                                        <div class="instructor-image">
                                            <img src="{{ $data->profile_photo_path ? asset('storage/images/users').'/'.$data->profile_photo_path : asset('assets/images/portrait/small/avatar-s-11.jpg') }}" alt="" class="img-fluid">
                                        </div>
                                    </div>

                                    <div class="col-lg-8 col-md-8">
                                        <div class="instructor-content">
                                            <h4><a href="#">{{ $data->name }}</a></h4>
                                            <span class="sub-title fw-bold">Afiliasi {{ $data->company ?? 'Tidak tersedia'  }}</span>

                                            <div class="mt-3">{!! $data->bio !!}</div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4">
                    @include('client.sections.sidebar-journal')
                </div>
            </div>
        </div>
    </div>
</x-frontend-master>
