<x-master-layouts>
    @include('sweetalert::alert')

    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Article Detail</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('articles.index') }}">Articles</a>
                                    </li>
                                    <li class="breadcrumb-item active">Detail
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-detached">
                <div class="content-body">
                    <div class="blog-detail-wrapper">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    {{-- <img src="{{ $data->image ? asset(config('app.POST_BIG')).'/'.$data->image : asset('assets').'/images/banner/banner-12.jpg'}}" class="img-flui card-img-top" alt="Blog Detail Pic" /> --}}

                                    <div class="card-body">
                                        <h4 class="card-title">{!! $data->title !!} </h4>

                                        <div class="media">
                                            <div class="avatar mr-50">
                                                <img src="{{ $data->getUser->profile_photo_path ? asset('storage/images/users').'/'.$data->getUser->profile_photo_path : asset('assets').'/images/portrait/small/avatar-s-7.jpg'}}" alt="Avatar" width="30" height="30" />
                                            </div>
                                            <div class="media-body">
                                                <small class="text-muted mr-25">by</small>
                                                <small><a href="javascript:void(0);" class="text-body">{{ $data->getUser->name }}</a></small>
                                                <span class="text-muted ml-50 mr-25">|</span>
                                                <small class="text-muted">{{ \Carbon\Carbon::parse($data->updated_at)->Format('d M Y - H:i') }} | </small>
                                                <a href="javascript:void(0);">
                                                    <div class="badge badge-light-primary">{{ strtoupper($data->getCategory->name) }}</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="my-1 py-25">
                                            tags :
                                            @php
                                                $explode = explode(',', $data->tags);
                                            @endphp
                                                @foreach ( $explode as $item)
                                                    <a href="/tags/{{ $item }}">
                                                        <div class="badge badge-pill badge-light-danger mr-50">
                                                            #{{ $item }}
                                                        </div>
                                                    </a>
                                                @endforeach

                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="{{ $data->image ? asset(config('app.POST_MID')).'/'.$data->image : asset('assets').'/images/portrait/small/avatar-s-6.jpg'}}" alt="thumbnail" title="thumbnail" height="100" width="100" class="cursor-pointer" />
                                            </div>
                                            <div class="media-body ml-2 text-justify">
                                                {!! $data->content !!}
                                            </div>
                                        </div>
                                        <hr class="my-2" />
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div class="d-flex align-items-center mr-1">
                                                    <a href="javascript:void(0);" class="mr-50">
                                                        <i data-feather="message-square" class="font-medium-5 text-body align-middle"></i>
                                                    </a>
                                                    <a href="javascript:void(0);">
                                                        <div class="text-body align-middle">19.1K</div>
                                                    </a>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void(0);" class="mr-50">
                                                        <i data-feather="bookmark" class="font-medium-5 text-body align-middle"></i>
                                                    </a>
                                                    <a href="javascript:void(0);">
                                                        <div class="text-body align-middle">139</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Blog -->

                            <!-- Blog Comment -->
                            <div class="col-12 mt-1" id="blogComment">
                                <h6 class="section-label mt-25">Comment</h6>
                                @forelse ($comments as $comment)
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="avatar mr-75">
                                                    <img src="{{ asset('assets') }}/images/portrait/small/avatar-s-9.jpg" width="38" height="38" alt="Avatar" />
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="font-weight-bolder mb-25">{{ $comment->created_by !== null ? $comment->getUser->name : 'Anonymous' }}</h6>
                                                    <p class="card-text">{{ $comment->created_at->diffForHumans() }}</p>
                                                    <p class="card-text">
                                                        {{ $comment->text }}
                                                    </p>
                                                    <a href="javascript:void(0);">
                                                        <div class="d-inline-flex align-items-center">
                                                            <i data-feather="corner-up-left" class="font-medium-3 mr-50"></i>
                                                            <a href="#" data-toggle="modal" data-target="#defaultSize"><span>Reply</span></a>
                                                        </div>
                                                        @livewire('article.replay-comment-article', ['articleId' => $data->id, 'commentId' => $comment->id] )

                                                    </a>
                                                    @foreach (\RobertSeghedi\News\Models\Comment::where('reply_id', $comment->id)->get() as $reply)
                                                        <div class="alert alert-success p-2 mt-2">
                                                            <div class="avatar mr-75">
                                                                <img src="{{ asset('assets') }}/images/portrait/small/avatar-s-9.jpg" width="38" height="38" alt="Avatar" />
                                                            </div>
                                                            <div class="media-body">
                                                                <h6 class="alert-heading">{{ $reply->created_by !== null ? $reply->getUser->name : 'Anonymous' }}</h6>
                                                                <div class="alert-body">
                                                                    <i class="card-text">{{ $reply->created_at->diffForHumans() }}</i>
                                                                    <p class="card-text">
                                                                        {{ $reply->text }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body">
                                                <h5>No Comment</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforelse
                            </div>
                            <!--/ Blog Comment -->
                        </div>
                    </div>
                    <!--/ Blog Detail -->

                </div>
            </div>
        </div>
    </div>


    @push('vendor-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendors/css/editors/quill/katex.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendors/css/editors/quill/monokai-sublime.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendors/css/editors/quill/quill.snow.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendors/css/pickers/pickadate/pickadate.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendors/css/pickers/flatpickr/flatpickr.min.css">
    @endpush
    @push('page-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/plugins/forms/form-quill-editor.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/plugins/forms/pickers/form-flat-pickr.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/plugins/forms/pickers/form-pickadate.css">
    @endpush
    @push('custom-scripts')
    <script src="{{ asset('assets') }}/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="{{ asset('assets') }}/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="{{ asset('assets') }}/vendors/js/pickers/pickadate/picker.time.js"></script>
    <script src="{{ asset('assets') }}/vendors/js/pickers/pickadate/legacy.js"></script>
    <script src="{{ asset('assets') }}/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
    <script src="{{ asset('assets') }}/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="{{ asset('assets') }}/vendors/js/editors/quill/katex.min.js"></script>
    <script src="{{ asset('assets') }}/vendors/js/editors/quill/highlight.min.js"></script>
    <script src="{{ asset('assets') }}/vendors/js/editors/quill/quill.min.js"></script>
    @endpush
    @push('page-js')
    <script src="{{ asset('assets') }}/js/scripts/pages/page-blog-edit.js"></script>
    <script src="{{ asset('assets') }}/ckeditorx/ckeditor.js"></script>
    <script src="{{ asset('assets') }}/js/scripts/forms/pickers/form-pickers.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>
    <script>
        function edValueKeyPress() {
            var edValue = document.getElementById("title");
            var s = edValue.value;

            var lblValue = document.getElementById("slug");
            lblValue.value = s.toLowerCase().replace(/[^\w-]+/g, '-');
        }

    </script>

    @endpush
    </x-master-layouts>

