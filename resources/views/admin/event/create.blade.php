@section('title')
    Tambah Event -
@endsection
<x-master-layouts>
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Tambah Event</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="{{ route('event.index') }}">Event</a>
                                    </li>
                                    <li class="breadcrumb-item active">Tambah Event
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="row" id="basic-table">
                    <div class="col-12">
                        <div class="card p-1">
                            <div class="content-body">
                                <div class="row" id="basic-table">
                                    <div class="col-12">
                                        <div class="card">
                                            <form action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label><h5>Judul</h5></label>
                                                        <input type="text" name="judul" class="form-control" placeholder="Judul Naskah" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label><h5>Keterangan</h5></label>
                                                        <textarea name="keterangan" class="ckeditor" id="" cols="30" rows="10">{{ old('keterangan') }}</textarea>
                                                    </div>
                                                    <div class="form-group mb-2">
                                                        <label for="fp-date-time">Mulai</label>
                                                        <input type="text" name="mulai" id="fp-date-time" class="form-control flatpickr-date-time" placeholder="YYYY-MM-DD HH:MM" />
                                                    </div>
                                                    <div class="form-group mb-2">
                                                        <label for="fp-date-time">Selesai</label>
                                                        <input type="text" name="selesai" id="fp-date-time" class="form-control flatpickr-date-time" placeholder="YYYY-MM-DD HH:MM" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label><h5>Link</h5></label>
                                                        <input type="text" name="link" class="form-control" placeholder="Judul Naskah" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label><h5>Image</h5></label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" name="photo" id="customFile" />
                                                            <label class="custom-file-label" for="customFile">Pilih File</label>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary mt-2"><i data-feather="save"></i> SIMPAN</button>
                                                </div>
                                            </form>
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
                            <script src="{{ asset('assets') }}/vendors/js/editors/quill/katex.min.js"></script>
                            <script src="{{ asset('assets') }}/vendors/js/editors/quill/highlight.min.js"></script>
                            <script src="{{ asset('assets') }}/vendors/js/editors/quill/quill.min.js"></script>
                            @endpush
                            @push('page-js')
                            <script src="{{asset('backend/plugins/bootstrap-fileinput/js/fileinput.js')}}"></script>
                            <script src="{{asset('backend/plugins/bootstrap-fileinput/themes/fa/theme.js')}}"></script>
                            <script src="{{ asset('assets') }}/vendors/cropperjs/cropper.js"></script>
                            <script src="{{ asset('assets') }}/js/scripts/pages/page-blog-edit.js"></script>
                            <script src="{{ asset('assets') }}/ckeditorx/ckeditor.js"></script>
                            <script src="{{ asset('assets') }}/js/scripts/forms/pickers/form-pickers.js"></script>
                            <script src="{{ asset('assets') }}/js/scripts/forms/form-select2.js"></script>
                            <script type="text/javascript">
                                $(document).ready(function () {
                                    $('.ckeditor').ckeditor();
                                });
                            </script>
                            <script>
                                window.addEventListener('addNaskah', event => {
                                    $("#create-modal").modal('show');
                                })

                                window.addEventListener('closeModal', event => {
                                    $("#create-modal").modal('hide');
                                })

                                window.addEventListener('iconLoad', event => {
                                    if (feather) {
                                        feather.replace({
                                            width: 14,
                                            height: 14
                                        });
                                    }
                                })
                            </script>
                            @endpush
                        </div>
                    </div>
                </div>
                @include('admin.modals.alert')
            </div>
        </div>
    </div>
</x-master-layouts>
