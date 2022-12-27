@section('title')
    {{ $data->title }} -
@endsection
<x-master-layouts>
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Detail Jurnal</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('journal_collab.index') }}">Kerjasama Jurnal</a>
                                    </li>
                                    <li class="breadcrumb-item active">Detail Jurnal
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">

                </div>
            </div>
            <div class="content-body">
                <!-- Blog Edit -->
                <div class="blog-edit-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    {{-- <div class="media">
                                        <div class="avatar mr-75">
                                            <img src="{{ asset('storage/images/users').'/'.auth()->user()->profile_photo_path }}" width="38" height="38" alt="Avatar" />
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mb-25">{{ ucfirst(auth()->user()->name) }}</h6>
                                            <p class="card-text">{{ \Carbon\Carbon::now()->format('D, d M Y') }}</p>
                                        </div>
                                    </div> --}}

                                        <div class="row">
                                            <div class="col-lg-8 col-sm-12 col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12 col-12">
                                                        <div class="form-group mb-2">
                                                            <h5>Judul</h3>
                                                            <span class="badge badge-light-dark">{{ $data->title }}</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 col-12">
                                                        <div class="form-group mb-2">
                                                            <h5>Afiliasi</h3>
                                                            <span class="badge badge-light-dark">{{ $data->afiliasi }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-12">
                                                        <div class="form-group mb-2">
                                                            <h5>Link Jurnal</h3>
                                                            <a href="{{ $data->link_journal }}" class="badge badge-light-dark">{{ $data->link_journal }}</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-12">
                                                        <div class="form-group mb-2">
                                                            <h5>Editor</h3>
                                                            <span class="badge badge-light-dark">{{ $data->editor }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-12">
                                                        <div class="form-group mb-2">
                                                            <h5>Index Jurnal</h3>
                                                            <span class="badge badge-light-dark">{{ $data->index_journal ?? 'Tidak tersedia' }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-12">
                                                        <div class="form-group mb-2">
                                                            <h5>Ditambahkan Oleh</h3>
                                                            <span class="badge badge-light-dark">{{ $data->user->name }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label><h5>Bukti Bayar</h5></label>
                                                            <div class="custom-file">
                                                                <a href="{{ asset($data->payment_image) }}" class="btn btn-sm btn-dark">Lihat</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-12">
                                                        <div class="form-group mb-2">
                                                            <h5>Total Bayar</h3>
                                                            <span class="badge badge-light-dark">Rp {{ number_format($data->price) }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-12 col-md-12">
                                                <div class="form-group mb-2">
                                                    <h5 class="text-primary">Cover Jurnal</h5>
                                                    <div class="media flex-column text-center">
                                                        <div class="media-body mt-1 w-100">
                                                            <div class="d-inline-block">
                                                                <div class="form-group mb-0">
                                                                    <div class="custom-file mb-1">
                                                                        <img class="rounded" src="{{ $data->imageUrl ?? 'https://media.sproutsocial.com/uploads/2017/02/10x-featured-social-media-image-size.png'}}" style="width:100%;" alt="default">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="16_9_width" id="16_9_width"/>
                                                    <input type="hidden" name="16_9_height" id="16_9_height"/>
                                                    <input type="hidden" name="16_9_x" id="16_9_x"/>
                                                    <input type="hidden" name="16_9_y" id="16_9_y"/>

                                                    <input type="hidden" name="4_3_width" id="4_3_width"/>
                                                    <input type="hidden" name="4_3_height" id="4_3_height"/>
                                                    <input type="hidden" name="4_3_x" id="4_3_x"/>
                                                    <input type="hidden" name="4_3_y" id="4_3_y"/>

                                                    <input type="hidden" name="1_1_width" id="1_1_width"/>
                                                    <input type="hidden" name="1_1_height" id="1_1_height"/>
                                                    <input type="hidden" name="1_1_x" id="1_1_x"/>
                                                    <input type="hidden" name="1_1_y" id="1_1_y"/>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('admin.components.imagecropuser')
    @include('admin.components.slug')
    @include('admin.components.texteditor')

    @push('vendor-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendors/css/pickers/pickadate/pickadate.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendors/css/pickers/flatpickr/flatpickr.min.css">
    @endpush
    @push('page-css')
    <link rel="stylesheet" href="{{asset('backend/plugins/bootstrap-fileinput/css/fileinput.css')}}">
    <link rel="stylesheet" href="{{ asset('assets') }}/vendors/cropperjs/cropper.css">
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
    @endpush
    @push('page-js')
    <script src="{{asset('backend/plugins/bootstrap-fileinput/js/fileinput.js')}}"></script>
    <script src="{{asset('backend/plugins/bootstrap-fileinput/themes/fa/theme.js')}}"></script>
    <script src="{{ asset('assets') }}/vendors/cropperjs/cropper.js"></script>
    <script src="{{ asset('assets') }}/ckeditorx/ckeditor.js"></script>
    <script src="{{ asset('assets') }}/js/scripts/forms/pickers/form-pickers.js"></script>
    <script src="{{ asset('assets') }}/js/scripts/forms/form-select2.js"></script>
    @endpush
</x-master-layouts>
