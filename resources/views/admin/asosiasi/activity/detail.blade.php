@section('title')
    Detail Kegiatan -
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
                            <h2 class="content-header-title float-left mb-0">Detail Kegiatan</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/dashboard">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('activity.index') }}">Kerjasama</a>
                                    </li>
                                    <li class="breadcrumb-item active">Detail Kegiatan
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
                                    <div class="row mt-4">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <h5>Nama Kegiatan</h3>
                                                <span class="badge badge-light-dark">{{ $data->name }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <h5>Nama Instansi</h3>
                                                <span class="badge badge-light-dark">{{ $data->institution }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <h5>Date & Time</h5>
                                                <span class="badge badge-light-dark">{{ \Carbon\Carbon::parse($data->created_at)->isoFormat('dddd, D MMMM Y') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <h5>Anggaran</h3>
                                            <table class="mb-2">
                                                <tr>
                                                    <td>Pengajuan</td>
                                                    <td>:</td>
                                                    <td><span class="badge badge-light-dark">Rp {{ number_format($data->budget) }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Tersedia</td>
                                                    <td>:</td>
                                                    <td><span class="badge badge-primary">Rp {{ number_format($data->max_budget) }}</span></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <h5>No Rekening</h3>
                                                <span class="badge badge-light-dark">{{ $data->no_rekening }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <h5>Status</h3>
                                                @if ($data->status == 1)
                                                    <span class="badge badge-light-warning">DITERIMA</span>
                                                @else
                                                    <span class="badge badge-light-secondary">PENDING</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="form-group mb-2">
                                                <h5>Catatan</h3>
                                                <tt>{!! $data->description !!}</tt>
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
