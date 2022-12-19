@section('title')
    Tambah Kegiatan -
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
                            <h2 class="content-header-title float-left mb-0">Tambah Kegiatan</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('activity.index') }}">Kerjasama</a>
                                    </li>
                                    <li class="breadcrumb-item active">Tambah Kegiatan
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
                                    <div class="media">
                                        <div class="avatar mr-75">
                                            <img src="{{ asset('storage/images/users').'/'.auth()->user()->profile_photo_path }}" width="38" height="38" alt="Avatar" />
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mb-25">{{ ucfirst(auth()->user()->name) }}</h6>
                                            <p class="card-text">{{ \Carbon\Carbon::now()->format('D, d M Y') }}</p>
                                        </div>
                                    </div>

                                    <form action="{{ route('activity.store') }}" method="POST" enctype="multipart/form-data" class="mt-2">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12 col-12">
                                                <div class="form-group mb-2">
                                                    <h5>Nama Kegiatan</h3>
                                                    <input type="hidden" name="created_by" value="{{ auth()->user()->id }}" class="form-control">
                                                    <input type="hidden" name="status" value="0" class="form-control">
                                                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group mb-2">
                                                    <h5>Nama Instansi</h3>
                                                    <input type="text" name="institution" id="institution" value="{{ old('institution') }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group mb-2">
                                                    <label for="fp-date-time">Date & Time</label>
                                                    <input type="text" name="date" id="fp-date-time" class="form-control flatpickr-date-time" placeholder="YYYY-MM-DD HH:MM" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group mb-2">
                                                    <h5>Anggaran</h3>
                                                    <input type="number" name="budget" id="budget" value="{{ old('budget') }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group mb-2">
                                                    <h5>No Rekening</h3>
                                                    <input type="number" name="no_rekening" id="no_rekening" value="{{ old('no_rekening') }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-12">
                                                <div class="form-group mb-2">
                                                    <h5>Catatan</h3>
                                                    <textarea name="description" id="description" class="form-control" rows="5">{{ old('description') }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-5 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary mr-1">Save Changes</button>
                                                <a href="{{ route('activity.index') }}" class="btn btn-outline-secondary">Cancel</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
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
