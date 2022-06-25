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
                            <h2 class="content-header-title float-left mb-0">Configuration CMS</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Configuration</a>
                                    </li>
                                    <li class="breadcrumb-item active">Setting
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
                <section class="modern-vertical-wizard">
                    <div class="bs-stepper vertical wizard-modern modern-vertical-wizard-example">
                        <div class="bs-stepper-header">
                            <div class="step" data-target="#account-details-vertical-modern">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">
                                        <i data-feather="file-text" class="font-medium-3"></i>
                                    </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Aplication Details</span>
                                        <span class="bs-stepper-subtitle">Setup Web App Details</span>
                                    </span>
                                </button>
                            </div>
                            <div class="step" data-target="#personal-info-vertical-modern">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">
                                        <i data-feather="user" class="font-medium-3"></i>
                                    </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Owner Name</span>
                                        <span class="bs-stepper-subtitle">Select Owner Name</span>
                                    </span>
                                </button>
                            </div>
                            <div class="step" data-target="#address-step-vertical-modern">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">
                                        <i data-feather="map-pin" class="font-medium-3"></i>
                                    </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Address</span>
                                        <span class="bs-stepper-subtitle">Add Address</span>
                                    </span>
                                </button>
                            </div>
                            <div class="step" data-target="#social-links-vertical-modern">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">
                                        <i data-feather="link" class="font-medium-3"></i>
                                    </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Social Links</span>
                                        <span class="bs-stepper-subtitle">Add Social Links</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="bs-stepper-content">
                            <form action="{{ route('configuration.update', 1) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div id="account-details-vertical-modern" class="content">
                                    <div class="content-header">
                                        <h5 class="mb-0">Aplication Detail</h5>
                                        <small class="text-muted">Enter Your Aplication or CMS Details.</small>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="vertical-modern-username">Name</label>
                                            <input type="text" id="vertical-modern-username" class="form-control" name="name" placeholder="Jarwonotech Cafe" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="vertical-modern-email">Email</label>
                                            <input type="email" id="vertical-modern-email" class="form-control" name="email" placeholder="jarwonozt@email.com" aria-label="jarwonoztr" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group form-password-toggle col-md-12">
                                            <label class="form-label" for="vertical-modern-confirm-password">Description</label>
                                            <textarea name="description" id="" cols="30" rows="5" class="form-control">Insert your descripton web app</textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="vertical-modern-username">SEO Tags</label>
                                            <input type="text" id="vertical-modern-username" class="form-control" name="tags" placeholder="startup, company, trendy" />
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="border rounded p-2">
                                                <h4 class="mb-1">Logo Image</h4>
                                                <div class="media flex-column flex-md-row">
                                                    <img src="{{ asset('assets') }}/images/slider/03.jpg" id="blog-feature-image" class="rounded mr-2 mb-1 mb-md-0" width="170" height="110" alt="Blog Featured Image" />
                                                    <div class="media-body">
                                                        <small class="text-muted">Image max size 2MB.</small>
                                                        <p class="my-50">
                                                            <a href="javascript:void(0);" id="blog-image-text">C:\fakepath\Logo.jpg</a>
                                                        </p>
                                                        <div class="d-inline-block">
                                                            <div class="form-group mb-0">
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" name="logo" id="blogCustomFile" accept="image/*" />
                                                                    <label class="custom-file-label" for="blogCustomFile">Choose file</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <button class="btn btn-outline-secondary btn-prev" disabled>
                                            <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <a class="btn btn-primary btn-next">
                                            <span class="align-middle d-sm-inline-block d-none">Next</span>
                                            <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
                                        </a>
                                    </div>
                                </div>
                                <div id="personal-info-vertical-modern" class="content">
                                    <div class="content-header">
                                        <h5 class="mb-0">Owner</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-1">
                                            <a href="{{ route('users.create') }}" class="btn btn-primary btn-block">Create New User</a>
                                        </div>
                                        <div class="col-md-12 mb-1">
                                            <label>Get from data user</label>
                                            <select class="select2 form-control" name="owner_id">
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <button class="btn btn-primary btn-prev">
                                            <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <a class="btn btn-primary btn-next">
                                            <span class="align-middle d-sm-inline-block d-none">Next</span>
                                            <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
                                        </a>
                                    </div>
                                </div>
                                <div id="address-step-vertical-modern" class="content">
                                    <div class="content-header">
                                        <h5 class="mb-0">Address</h5>
                                        <small>Enter Your Address.</small>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <textarea name="address" id="" cols="30" rows="5" class="form-control"></textarea>
                                            {{-- <input type="text" id="vertical-modern-address" class="form-control" placeholder="98  Borough bridge Road, Birmingham" /> --}}
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <button class="btn btn-primary btn-prev">
                                            <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <a class="btn btn-primary btn-next">
                                            <span class="align-middle d-sm-inline-block d-none">Next</span>
                                            <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
                                        </a>
                                    </div>
                                </div>
                                <div id="social-links-vertical-modern" class="content">
                                    <div class="content-header">
                                        <h5 class="mb-0">Social Links</h5>
                                        <small>Enter Your Social Links.</small>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="vertical-modern-twitter">Phone</label>
                                            <input type="number" name="phone" id="vertical-modern-twitter" class="form-control" placeholder="02100" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="vertical-modern-facebook">WhatsApp Number</label>
                                            <input type="number" name="whatsapp" id="vertical-modern-facebook" class="form-control" placeholder="0821234567" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="vertical-modern-twitter">Twitter</label>
                                            <input type="url" name="twitter" id="vertical-modern-twitter" class="form-control" placeholder="https://twitter.com/abc" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="vertical-modern-facebook">Facebook</label>
                                            <input type="url" name="facebook" id="vertical-modern-facebook" class="form-control" placeholder="https://facebook.com/abc" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="vertical-modern-twitter">Instagram</label>
                                            <input type="text" name="instagram" id="vertical-modern-twitter" class="form-control" placeholder="@yourig" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="vertical-modern-facebook">Tiktok</label>
                                            <input type="url" name="tiktok" id="vertical-modern-facebook" class="form-control" placeholder="https://tiktok.com/abc" />
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <button class="btn btn-primary btn-prev">
                                            <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button type="submit" class="btn btn-success btn-submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@push('vendor-css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendors/css/vendors.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendors/css/forms/wizard/bs-stepper.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendors/css/forms/select/select2.min.css">
@endpush
@push('page-css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/core/menu/menu-types/vertical-menu.css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/plugins/forms/form-validation.css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/plugins/forms/form-wizard.css">
@endpush
@push('page-js')
<script src="{{ asset('assets') }}/vendors/js/forms/wizard/bs-stepper.min.js"></script>
<script src="{{ asset('assets') }}/vendors/js/forms/select/select2.full.min.js"></script>
<script src="{{ asset('assets') }}/vendors/js/forms/validation/jquery.validate.min.js"></script>
<script src="{{ asset('assets') }}/js/scripts/forms/form-wizard.js"></script>

@endpush
</x-master-layouts>

