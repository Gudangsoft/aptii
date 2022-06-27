<x-frontend-master>
    <div class="main-content">

        <div class="page-content">

            <section class="page-title-box">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="text-center text-white">
                                <h3 class="mb-4">Blog Details</h3>
                                <div class="page-next">
                                    <nav class="d-inline-block" aria-label="breadcrumb text-center">
                                        <ol class="breadcrumb justify-content-center">
                                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                            <li class="breadcrumb-item"><a href="javascript:void(0)">Blog</a></li>
                                            <li class="breadcrumb-item active" aria-current="page"> Detail </li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="position-relative" style="z-index: 1">
                <div class="shape">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 250">
                        <path fill="#FFFFFF" fill-opacity="1"
                            d="M0,192L120,202.7C240,213,480,235,720,234.7C960,235,1200,213,1320,202.7L1440,192L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
                    </svg>
                </div>
            </div>


            <section class="section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="text-center mb-5">
                                <p class="text-danger fw-semibold mb-0">{{ $data->getCategory->name }}</p>
                                <h3>{{ $data->title }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="blog-post">
                                <div class="swiper blogdetailSlider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="{{ $data->image ? asset(config('app.POST_BIG')).'/'.$data->image : asset('frontend').'/assets/images/blog/img-04.jpg' }}" alt="" class="img-fluid rounded-3">
                                        </div>
                                    </div>
                                </div>

                                <ul class="list-inline mb-0 mt-3 text-muted">
                                    <li class="list-inline-item">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{ $data->getUser->profile_photo_path ? asset('storage/images/users').'/'.$data->getUser->profile_photo_path : asset('assets/images/portrait/small/avatar-s-11.jpg') }}" alt="" class="avatar-sm rounded-circle">
                                            </div>
                                            <div class="ms-3">
                                                <a href="/author/{{ $data->getUser->name }}" class="primary-link"><h6 class="mb-0">{{ $data->getUser->name }}</h6></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <i class="uil uil-calendar-alt"></i>
                                            </div>
                                            <div class="ms-2">
                                                <p class="mb-0"> {{ $data->date }}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <i class="uil uil-eye"></i>
                                            </div>
                                            <div class="ms-2 flex-grow-1">
                                                <p class="mb-0"> {{ $data->counter }}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <i class="uil uil-comments-alt"></i>
                                            </div>
                                            <div class="ms-2 flex-grow-1">
                                                <p class="mb-0"> {{ $data->comment_count }}</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="mt-4">
                                    <p>
                                        {!! $data->content !!}
                                    </p>
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="flex-shrink-0">
                                            <b>Tags:</b>
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            @php
                                                $tags = explode(',', $data->tags);
                                                // dd($tags);
                                            @endphp
                                            @foreach ($tags as $tag)
                                                <a href="/tag/{{ $tag }}" class="badge bg-soft-success mt-1 fs-14">{{ $tag }}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                    <ul class="blog-social-menu list-inline mb-0 text-end">
                                        <li class="list-inline-item">
                                            <b>Share post:</b>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0)" class="social-link bg-soft-primary">
                                                <i class="uil uil-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0)" class="social-link bg-soft-success">
                                                <i class="uil uil-whatsapp"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0)" class="social-link bg-soft-blue">
                                                <i class="uil uil-linkedin-alt"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0)" class="social-link bg-soft-danger">
                                                <i class="uil uil-envelope"></i>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                                <!-- comment start -->
                                <h5 class="border-bottom pb-3 mt-5">Comments</h5>
                                <div class="mt-5">
                                    <div class="d-sm-flex align-items-top">
                                        <div class="flex-shrink-0">
                                            <img class="rounded-circle avatar-md img-thumbnail" src="{{ asset('frontend') }}/assets/images/user/img-01.jpg" alt="img" />
                                        </div>
                                        <div class="flex-grow-1 ms-sm-3">
                                            <small class="float-end fs-12 text-muted"><i class="uil uil-clock"></i> 30 min Ago</small>
                                            <a href="javascript:(0)" class="primary-link"><h6 class="fs-16 mt-sm-0 mt-3 mb-0">Rebecca Swartz</h6></a>
                                            <p class="text-muted fs-14 mb-0">Aug 10, 2021</p>
                                            <div class="my-3 badge bg-light">
                                                <a href="javascript: void(0);" class="text-primary"><i
                                                        class="mdi mdi-reply"></i> Reply</a>
                                            </div>
                                            <p class="text-muted fst-italic mb-0">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <div class="d-sm-flex align-items-top">
                                        <div class="flex-shrink-0">
                                            <img class="rounded-circle avatar-md img-thumbnail" src="{{ asset('frontend') }}/assets/images/user/img-02.jpg" alt="img" />
                                        </div>
                                        <div class="flex-grow-1 ms-sm-3">
                                            <small class="float-end fs-12 text-muted"><i class="uil uil-clock"></i> 2 hrs Ago</small>
                                            <a href="javascript:(0)" class="primary-link"><h6 class="fs-16 mt-sm-0 mt-3 mb-0">Adam Gibson</h6></a>
                                            <p class="text-muted fs-14 mb-0">Aug 10, 2021</p>
                                            <div class="my-3 badge bg-light">
                                                <a href="javascript: void(0);" class="text-primary"><i
                                                        class="mdi mdi-reply"></i> Reply</a>
                                            </div>
                                            <p class="text-muted fst-italic mb-0">" The most important aspect of beauty was, therefore, an inherent part of an object, rather than something applied superficially, and was based on universal, recognisable truths. "</p>

                                            <div class="d-sm-flex align-items-top mt-5">
                                                <div class="flex-shrink-0">
                                                    <img class="rounded-circle avatar-md img-thumbnail" src="{{ asset('frontend') }}/assets/images/user/img-04.jpg" alt="img" />
                                                </div>
                                                <div class="flex-grow-1 ms-sm-3">
                                                    <small class="float-end fs-12 text-muted"><i class="uil uil-clock"></i> 2 hrs Ago</small>
                                                    <a href="javascript:(0)" class="primary-link"><h6 class="fs-16 mt-sm-0 mt-3 mb-0">Kiera Finch</h6></a>
                                                    <p class="text-muted fs-14 mb-0">Aug 10, 2021</p>
                                                    <div class="my-3 badge bg-light">
                                                        <a href="javascript: void(0);" class="text-primary"><i
                                                                class="mdi mdi-reply"></i> Reply</a>
                                                    </div>
                                                    <p class="text-muted fst-italic mb-0">" This response is important for our ability to learn from mistakes, but it alsogives rise to self-criticism, because it is part of the threat-protection system.  "</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end comment -->

                                <form action="#" class="contact-form mt-5">
                                    <h5  class="border-bottom pb-3">Leave a Message</h5  >
                                    <div class="row mt-4">
                                        <div class="col-lg-6">
                                            <div class="position-relative mb-3">
                                                <label for="name" class="form-label">Name</label>
                                                <input name="name" id="name" type="text" class="form-control" placeholder="Enter your name*" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="position-relative mb-3">
                                                <label for="email" class="form-label">Email address</label>
                                                <input name="email" id="email" type="email" class="form-control" placeholder="Enter your email*" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="position-relative mb-3">
                                                <label for="subject" class="form-label">Subject</label>
                                                <input name="subject" id="subject" type="text" class="form-control" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="position-relative mb-3">
                                                <label for="comments" class="form-label">Meassage</label>
                                                <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Enter your message"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 text-end">
                                            <button name="submit" type="submit" id="submit" class="btn btn-primary btn-hover">Send
                                                Meassage <i class="uil uil-message ms-1"></i></button>
                                        </div>
                                    </div>
                                </form><!--end form-->
                                <div class="mt-5">
                                    <h5 class="border-bottom pb-3"> Related Blog Posts</h5>
                                    <div class="swiper blogSlider pb-5 mt-4">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="card blog-modern-box overflow-hidden border-0">
                                                    <img src="{{ asset('frontend') }}/assets/images/blog/img-04.jpg" alt="" class="img-fluid">
                                                    <div class="bg-overlay"></div>
                                                    <div class="card-img-overlay">
                                                    <a href="blog-details.html" class="text-white"><h5 class="card-title">Manage white space in responsive layouts ?</h5></a>
                                                    <p class="card-text text-white-50"> <a href="blog-author.html" class="text-white-50">Rebecca Swartz</a> - 5 mins ago</p>
                                                    </div>
                                                </div>
                                            </div><!--end blogSlider-->
                                            <div class="swiper-slide">
                                                <div class="card blog-modern-box overflow-hidden border-0">
                                                    <img src="{{ asset('frontend') }}/assets/images/blog/img-05.jpg" alt="" class="img-fluid">
                                                    <div class="bg-overlay"></div>
                                                    <div class="card-img-overlay">
                                                    <a href="blog-details.html" class="text-white"><h5 class="card-title">A day in the of a professional fashion designer</h5></a>
                                                    <p class="card-text text-white-50"> <a href="blog-author.html" class="text-white-50">Rebecca Swartz</a> - 5 mins ago</p>
                                                    </div>
                                                </div>
                                            </div><!--end blogSlider-->
                                            <div class="swiper-slide">
                                                <div class="card blog-modern-box overflow-hidden border-0">
                                                    <img src="{{ asset('frontend') }}/assets/images/blog/img-06.jpg" alt="" class="img-fluid">
                                                    <div class="bg-overlay"></div>
                                                    <div class="card-img-overlay">
                                                    <a href="blog-details.html" class="text-white"><h5 class="card-title">Design your apps in your own way</h5></a>
                                                    <p class="card-text text-white-50"> <a href="blog-author.html" class="text-white-50">Rebecca Swartz</a> - 5 mins ago</p>
                                                    </div>
                                                </div>
                                            </div><!--swiper-slide-->
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div><!--end blogSlider-->
                                </div><!--end related post-->
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5">
                            <div class="sidebar ms-lg-4 ps-lg-4 mt-5 mt-lg-0">
                                <aside class="widget widget_search">
                                    <form class="position-relative">
                                        <input class="form-control" type="text" placeholder="Search...">
                                        <button class="bg-transparent border-0 position-absolute top-50 end-0 translate-middle-y fs-22 me-2" type="submit"><span class="mdi mdi-magnify text-muted"></span></button>
                                    </form>
                                </aside>

                                <div class="mt-4 pt-2">
                                    <div class="sd-title">
                                        <h6 class="fs-16 mb-3">Polular Post</h6>
                                    </div>
                                    <ul class="widget-popular-post list-unstyled my-4">
                                        @foreach ($popular as $item)
                                            <li class="d-flex mb-3 align-items-center pb-3 border-bottom">
                                                <img src="{{ $item->image ? asset(config('app.POST_MID')).'/'.$item->image : asset('frontend').'/assets/images/blog/img-04.jpg' }}" alt="" class="widget-popular-post-img rounded" />
                                                <div class="flex-grow-1 text-truncate ms-3">
                                                    <a href="/post/{{ $item->slug }}" class="text-dark">{{ $item->title }}</a>
                                                    <span class="d-block text-muted fs-14">{{ $item->date }}</span>
                                                </div>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div><!--end Polular Post-->

                                <div class="mt-4 pt-2">
                                    <div class="sd-title">
                                        <h6 class="fs-16 mb-3">Text Widget</h6>
                                    </div>
                                    <p class="mb-0 text-muted mt-3">
                                        Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft
                                        beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v
                                        laborum. Aliquip veniam
                                        delectus, Marfa eiusmod Pinterest in do umami readymade swag.
                                    </p>
                                </div>


                                <div class="mt-4 pt-2">
                                    <div class="sd-title">
                                        <h6 class="fs-16 mb-3">Latest Tags</h6>
                                    </div>
                                    <div class="tagcloud mt-3">
                                        <a class="badge tag-cloud fs-12 mt-2"
                                            href="javascript:void(0)">Fashion</a>
                                        <a class="badge tag-cloud fs-12 mt-2"
                                            href="javascript:void(0)">Jobs</a>
                                        <a class="badge tag-cloud fs-12 mt-2"
                                            href="javascript:void(0)">Business</a>
                                        <a class="badge tag-cloud fs-12 mt-2"
                                            href="javascript:void(0)">Corporate</a>
                                        <a class="badge tag-cloud fs-12 mt-2"
                                            href="javascript:void(0)">E-commerce</a>
                                        <a class="badge tag-cloud fs-12 mt-2"
                                            href="javascript:void(0)">Agency</a>
                                        <a class="badge tag-cloud fs-12 mt-2"
                                            href="javascript:void(0)">Responsive</a>
                                    </div>
                                </div><!--end Latest Tags-->


                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>

        @include('frontend.layouts.footer')
    </div>
</x-frontend-master>
