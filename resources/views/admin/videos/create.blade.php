<x-master-layouts>
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-7 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h3 class="content-header-title float-left mb-0">Video</h3>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('videos.index') }}">List Video</a>
                                    </li>
                                    <li class="breadcrumb-item active">Create</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <section id="multiple-column-form">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <form class="form" method="POST" enctype="multipart/form-data" action="{{ route('videos.store') }}">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-8 col-12">
                                                <div class="form-group">
                                                    <h5 class="text-primary">JUDUL</h5>
                                                    <input id="title" name="title" type="text" class="form-control" placeholder="Judul Video" value="{{ old('title') }}" required/>
                                                    @if ($errors->has('title'))<span class="text-danger">{{$errors->first('title')}}</span>@endif
                                                </div>

                                                <div class="form-group">
                                                    <h5 class="text-primary">DESKRIPSI</h5>
                                                    <textarea name="content" id="content" class="form-control">{{ old('content') }}</textarea>
                                                    @if ($errors->has('content'))<span class="text-danger">{{$errors->first('content')}}</span>@endif
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-12">
                                                <div class="form-group border rounded p-1">
                                                    <h5 class="text-primary">YOUTUBE ID</h5>
                                                    <input id="youtube_id" name="youtube_id" type="text" class="form-control" name="fname-column" value="{{ old('youtube_id') }}" required/>
                                                    @if ($errors->has('youtube_id'))<span class="text-danger">{{$errors->first('youtube_id')}}</span>@endif
                                                    <div class="embed-responsive embed-responsive-16by9 mt-1">
                                                        <iframe id="frame_video" class="embed-responsive-item" src="https://www.youtube.com/embed/?rel=0" allowfullscreen></iframe>
                                                    </div>
                                                </div>

                                                <div class="form-group border rounded p-1">
                                                    <h5 class="text-primary">STATUS</h5>
                                                    <div class="d-flex flex-row">
                                                        <div class="custom-control custom-radio">
                                                            <input name="status" type="radio" id="customRadio4" class="custom-control-input" value="1" checked/>
                                                            <label class="custom-control-label" for="customRadio4">Terbit</label>
                                                        </div>
                                                        <div class="custom-control custom-radio ml-2">
                                                            <input name="status" type="radio" id="customRadio5" class="custom-control-input" value="2"/>
                                                            <label class="custom-control-label" for="customRadio5">Tidak</label>
                                                        </div>
                                                    </div>
                                                    @if ($errors->has('status'))<span class="text-danger">{{$errors->first('status')}}</span>@endif
                                                </div>
                                                <div class="form-group border rounded p-1">
                                                    <button type="submit" class="btn btn-primary mr-1">Simpan</button>
                                                    <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    @include('admin.components.texteditor')

    @push('page-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendors/css/pickers/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/plugins/forms/pickers/form-flat-pickr.css">
    @endpush

    @push('page-js')
    <script src="{{ asset('assets') }}/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
    <script src="{{ asset('assets') }}/js/scripts/forms/pickers/form-pickers.js"></script>
    <script>
        $(function () {
            $('#youtube_id').on('blur', function(){
                $val = $(this).val();
            $('#frame_video').attr('src', 'https://www.youtube.com/embed/'+$val);
            });
        });
    </script>
    @endpush
</x-master-layouts>
