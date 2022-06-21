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
                        <h2 class="content-header-title float-left mb-0">Create New Article</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('articles.index') }}">Articles</a>
                                </li>
                                <li class="breadcrumb-item active">New
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrumb-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="app-todo.html"><i class="mr-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="mr-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="mr-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="mr-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                    </div>
                </div>
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
                                        <img src="{{ asset('assets') }}/images/portrait/small/avatar-s-9.jpg" width="38" height="38" alt="Avatar" />
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mb-25">{{ auth()->user()->name }}</h6>
                                        <p class="card-text">{{ \Carbon\Carbon::now()->format('D, d M Y') }}</p>
                                    </div>
                                </div>
                                <!-- Form -->
                                <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data" class="mt-2">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <label for="blog-edit-title">Title</label>
                                                <input type="text" name="title" id="title" class="form-control" onInput="edValueKeyPress()">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12 mb-1">
                                            <label for="blog-edit-category">Category</label>
                                            <select class="select2 form-control" name="category">
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ strtoupper($category->name) }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <label for="blog-edit-slug">Slug</label>
                                                <input type="text" name="slug" id="slug" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <label for="blog-edit-status">Status</label>
                                                <select class="form-control" id="blog-edit-status" name="status">
                                                    <option value="1">Published</option>
                                                    <option value="2">Pending</option>
                                                    <option value="3">Draft</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-2">
                                            <textarea name="content" class="ckeditor" id="" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="col-12 mb-2">
                                            <div class="border rounded p-2">
                                                <h4 class="mb-1">Featured Image</h4>
                                                <div class="media flex-column flex-md-row">
                                                    <img src="{{ asset('assets') }}/images/slider/03.jpg" id="blog-feature-image" class="rounded mr-2 mb-1 mb-md-0" width="170" height="110" alt="Blog Featured Image" />
                                                    <div class="media-body">
                                                        <small class="text-muted">Required image resolution 800x400, image size 10mb.</small>
                                                        <p class="my-50">
                                                            <a href="javascript:void(0);" id="blog-image-text">C:\fakepath\banner.jpg</a>
                                                        </p>
                                                        <div class="d-inline-block">
                                                            <div class="form-group mb-0">
                                                                <div class="custom-file">
                                                                    <input type="file" name="image" class="custom-file-input" id="blogCustomFile" accept="image/*" />
                                                                    <label class="custom-file-label" for="blogCustomFile">Choose file</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-50">
                                            <button type="submit" class="btn btn-primary mr-1">Save Changes</button>
                                            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
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
<link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendors/css/editors/quill/katex.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendors/css/editors/quill/monokai-sublime.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendors/css/editors/quill/quill.snow.css">
@endpush
@push('page-css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/core/menu/menu-types/vertical-menu.css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/plugins/forms/form-quill-editor.css">
@endpush
@push('custom-scripts')
<script src="{{ asset('assets') }}/vendors/js/forms/select/select2.full.min.js"></script>
<script src="{{ asset('assets') }}/vendors/js/editors/quill/katex.min.js"></script>
<script src="{{ asset('assets') }}/vendors/js/editors/quill/highlight.min.js"></script>
<script src="{{ asset('assets') }}/vendors/js/editors/quill/quill.min.js"></script>
@endpush
@push('page-js')
<script src="{{ asset('assets') }}/js/scripts/pages/page-blog-edit.js"></script>
<script src="{{ asset('assets') }}/ckeditorx/ckeditor.js"></script>
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

