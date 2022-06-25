<div class="container-fluid no-left-padding no-right-padding slider-section2">
    <div class="container">

        <div class="col-md-9 col-sm-12 col-xs-12 slider-block">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    @forelse ($data as $key=>$item)
                        <div class="item {{ $key == 0 ? 'active' : '' }}">
                            <div class="type-post color-7">
                                <div class="entry-cover">
                                    <a href="#"><img src="{{ asset('frontend') }}/assets/images/slider2-slide.jpg" alt="Slide" /></a>
                                </div>
                                <div class="entry-content">
                                    <div class="post-category"><a href="/category/{{ $item->getCategory->slug }}">{{ $item->getCategory->name }}</a></div>
                                    <h3 class="entry-title"><a href="/post/{{ $item->slug }}">{{ $item->title }}</a></h3>
                                    <div class="entry-footer">
                                        <span class="post-date"><a href="#">{{ \Carbon\Carbon::parse($item->created_at)->format('D, d M Y') }}</a></span>
                                        <span class="post-like"><i class="fa fa-heart-o"></i><a href="#">356</a></span>
                                        <span class="post-view"><i class="fa fa-eye"></i><a href="#">{{ $item->counter }}</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="item active">
                            <div class="type-post color-7">
                                <div class="entry-cover">
                                    <a href="#"><img src="{{ asset('frontend') }}/assets/images/slider2-slide.jpg" alt="Slide" /></a>
                                </div>
                                <div class="entry-content">
                                    <div class="post-category"><a href="#" title="Economic">Economic</a></div>
                                    <h3 class="entry-title"><a href="#">No, budget cuts aren't the reason we don't have an Ebola vaccine</a></h3>
                                    <div class="entry-footer">
                                        <span class="post-date"><a href="#">08 July, 2016</a></span>
                                        <span class="post-like"><i class="fa fa-heart-o"></i><a href="#">356</a></span>
                                        <span class="post-view"><i class="fa fa-eye"></i><a href="#">589</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="type-post color-7">
                                <div class="entry-cover">
                                    <a href="#"><img src="{{ asset('frontend') }}/assets/images/slider2-slide.jpg" alt="Slide" /></a>
                                </div>
                                <div class="entry-content">
                                    <div class="post-category"><a href="#" title="Economic">Coinima</a></div>
                                    <h3 class="entry-title"><a href="#">No, budget cuts aren't the reason we don't have an Ebola vaccine</a></h3>
                                    <div class="entry-footer">
                                        <span class="post-date"><a href="#">08 July, 2016</a></span>
                                        <span class="post-like"><i class="fa fa-heart-o"></i><a href="#">356</a></span>
                                        <span class="post-view"><i class="fa fa-eye"></i><a href="#">589</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforelse
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="fa fa-angle-right"></span>
                </a>
            </div>
        </div>

        <div class="col-md-3 col-sm-12 col-xs-12 slide-post-block">
            @forelse ($headline as $item)
                <div class="col-md-12 col-xs-6 no-padding">
                    <div class="type-post color-6">
                        <div class="entry-cover">
                            <a href="/post/{{ $item->slug }}"><img src="{{ asset('frontend') }}/assets/images/slider2-post1.jpg" alt="Post" /></a>
                        </div>
                        <div class="entry-content">
                            <div class="entry-footer">
                                <span class="post-date"><a href="#">{{ $item->date }}</a></span>
                                {{-- <span class="post-like"><i class="fa fa-heart-o"></i><a href="#">127</a></span>
                                <span class="post-view"><i class="fa fa-eye"></i><a href="#">756</a></span> --}}
                            </div>
                            <h3 class="entry-title"><a href="/post/{{ $item->slug }}">{{ $item->title }}</a></h3>
                            <a href="/post/{{ $item->slug }}" title="Read Now">READ NOW <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-md-12 col-xs-6 no-padding">
                    <div class="type-post">
                        <div class="entry-cover">
                            <a href="#"><img src="{{ asset('frontend') }}/assets/images/slider2-post2.jpg" alt="Post" /></a>
                        </div>
                        <div class="entry-content">
                            <div class="entry-footer">
                                <span class="post-date"><a href="#">15 Augest, 2016</a></span>
                                <span class="post-like"><i class="fa fa-heart-o"></i><a href="#">127</a></span>
                                <span class="post-view"><i class="fa fa-eye"></i><a href="#">756</a></span>
                            </div>
                            <h3 class="entry-title"><a href="#">Steenkamp's death ' <br>horrific'</a></h3>
                            <a href="#" title="Read Now">READ NOW <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xs-6 no-padding">
                    <div class="type-post">
                        <div class="entry-cover">
                            <a href="#"><img src="{{ asset('frontend') }}/assets/images/slider2-post2.jpg" alt="Post" /></a>
                        </div>
                        <div class="entry-content">
                            <div class="entry-footer">
                                <span class="post-date"><a href="#">15 Augest, 2016</a></span>
                                <span class="post-like"><i class="fa fa-heart-o"></i><a href="#">127</a></span>
                                <span class="post-view"><i class="fa fa-eye"></i><a href="#">756</a></span>
                            </div>
                            <h3 class="entry-title"><a href="#">Steenkamp's death ' <br>horrific'</a></h3>
                            <a href="#" title="Read Now">READ NOW <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>

    </div>
</div>
