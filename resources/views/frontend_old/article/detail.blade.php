<x-frontend-master>
    <div class="main-container">

		<main class="site-main">

			<div class="container-fluid no-left-padding no-right-padding single-post">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-6 col-xs-6 content-area">
							<article class="type-post color-3">
								<div class="entry-cover">
									{{-- <img src="{{ $data->image ? asset('storage').'/articles/thumbnail/'.$data->image : asset('frontend').'/{{ asset('frontend') }}/assets/images/single-post1.jpg'}}" alt="Post" /> --}}
									<img src="{{ asset('frontend').'/assets/images/single-post1.jpg'}}" alt="Post" />
									<div class="entry-header">
										<div class="post-category"><a href="/category/{{ $data->getCategory->slug }}" title="{{ ucfirst($data->getCategory->name) }}">{{ ucfirst($data->getCategory->name) }}</a></div>
										<h3 class="entry-title">{{ $data->title }}</h3>
										<div class="entry-footer">
											<span class="post-date"><a href="#">{{ \Carbon\Carbon::parse($data->created_at)->format('D, d M Y') }}</a></span>
											<span class="post-like"><i class="fa fa-heart-o"></i><a href="#">356</a></span>
											<span class="post-view"><i class="fa fa-eye"></i><a href="#">{{ $data->counter }}</a></span>
										</div>
									</div>
								</div>
								<div class="entry-content">
									{!! $data->content !!}
								</div>

								<div class="about-author-box">
									<h3>About Author</h3>
									<div class="author">
										<i><img src="{{ asset('frontend') }}/assets/images/author.jpg" alt="Author" /></i>
										<h4>{{ $data->getUser->name }}</h4>
										{{-- <ul>
											<li><a href="#" class="fb" title="Facebook"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#" class="tw" title="Twitter"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#" class="go" title="Google"><i class="fa fa-google"></i></a></li>
											<li><a href="#" class="ln" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
										</ul> --}}
										<p>{!! $data->getUser->bio !!}</p>
									</div>
								</div>

							</article>

							<div id="comments" class="comments-area">
								<h2 class="comments-title">Comments <span>(3)</span></h2>
								<ol class="comment-list">
									<li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1 parent">
										<div class="comment-body">
											<footer class="comment-meta">
												<div class="comment-author vcard">
													<img alt="img" src="{{ asset('frontend') }}/assets/images/comment1.jpg" class="avatar avatar-72 photo"/>
													<b class="fn">Michel Tei</b>
												</div>
												<div class="comment-metadata"><a href="#">Oct 3, 2016</a></div>
											</footer>
											<div class="comment-content">
												<p>Reporter is one of the excellent magazine in the world.Newshub magazine reached many readers very soon by his unique stories in the magazine.</p>
											</div>
											<div class="reply">
												<a rel="nofollow" class="comment-reply-link" href="#">Reply</a>
											</div>
										</div>
										<ol class="children">
											<li class="comment byuser comment-author-admin bypostauthor odd alt depth-2 parent">
												<div class="comment-body">
													<footer class="comment-meta">
														<div class="comment-author vcard">
															<img alt="img" src="{{ asset('frontend') }}/assets/images/comment2.jpg" class="avatar avatar-72 photo"/>
															<b class="fn">Woes katrin</b>
														</div>
														<div class="comment-metadata"><a href="#">Oct 8, 2016</a></div>
													</footer>
													<div class="comment-content">
														<p>reporter is one of the excellent magazine in the world.Newshub magazine reach many readers very soon by his unique stories in the magazine.</p>
													</div>
													<div class="reply">
														<a rel="nofollow" class="comment-reply-link" href="#">Reply</a>
													</div>
												</div>
											</li>
										</ol>
									</li>
									<li class="comment byuser comment-author-admin bypostauthor even thread-odd thread-alt depth-1">
										<div class="comment-body">
											<footer class="comment-meta">
												<div class="comment-author vcard">
													<img alt="img" src="{{ asset('frontend') }}/assets/images/comment3.jpg" class="avatar avatar-72 photo"/>
													<b class="fn">David Worth</b>
												</div>
												<div class="comment-metadata"><a href="#">Oct 10, 2016</a></div>
											</footer>
											<div class="comment-content">
												<p>Reporter is one of the excellent magazine in the world.Newshub magazine reached many readers very soon by his unique stories in the magazine.</p>
											</div>
											<div class="reply">
												<a rel="nofollow" class="comment-reply-link" href="#">Reply</a>
											</div>
										</div>
									</li>
								</ol>

                                <div id="respond" class="comment-respond">
									<h2 id="reply-title" class="comment-reply-title">Leave a comment</h2>
									<form method="post" id="commentform" class="comment-form">
										<p class="comment-form-author">
											<input id="author" name="author" placeholder="Name *" required="required" type="text"/>
										</p>
										<p class="comment-form-email">
											<input id="email" name="email" placeholder="Your@email.com *" required="required" type="email"/>
										</p>
										<p class="comment-form-comment">
											<textarea id="comment" placeholder="Your Comment" name="comment" rows="5" required="required"></textarea>
										</p>
										<p class="form-submit">
											<input name="submit" class="submit" value="Post Comment" type="submit"/>
										</p>
									</form>
								</div>
							</div>

						</div>

						<!-- Widget Area -->
						<div class="col-md-4 col-sm-6 col-xs-6 widget-area">

                            @include('frontend.widget.recent-right-sidebar', ['data' => $recent, 'title' => 'RECENT POSTS'])

							<!-- Popular Video -->
							<aside class="widget widget_video">
								<h3 class="widget-title">POPULAR VIDEOS</h3>
								<div class="video-block">
									<div class="video-post">
										<a href="#"><img src="{{ asset('frontend') }}/assets/images/popular-video1.jpg" alt="Popular Video" /></a>
										<h5><a href="#"><i class="fa fa-play"></i>Qaim says prominent people arrested </a></h5>
									</div>
									<div class="video-post">
										<a href="#"><img src="{{ asset('frontend') }}/assets/images/popular-video2.jpg" alt="Popular Video" /></a>
										<h5><a href="#"><i class="fa fa-play"></i>Way now cleared for Australian </a></h5>
									</div>
									<div class="video-post">
										<a href="#"><img src="{{ asset('frontend') }}/assets/images/popular-video3.jpg" alt="Popular Video" /></a>
										<h5><a href="#"><i class="fa fa-play"></i>Way now cleared for Australian </a></h5>
									</div>
								</div>
								<div class="see-more"><a href="#" title="SEE MORE Video">SEE MORE Video</a></div>
							</aside><!-- Popular Video /- -->
						</div>
                        <!-- Widget Area /- -->
					</div>
				</div>
			</div>

		</main>

	</div>
</x-frontend-master>
