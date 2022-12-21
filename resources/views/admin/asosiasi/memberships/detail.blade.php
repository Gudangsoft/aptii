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
                            <h2 class="content-header-title float-left mb-0">Detail Anggota</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/dashboard">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('memberships.index') }}">Anggota</a>
                                    </li>
                                    <li class="breadcrumb-item active"> Detail
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- account setting page -->
                <section id="page-account-settings">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="tab-content">

                                        <div role="tabpanel" class="tab-pane active" id="account-vertical-general" aria-labelledby="account-pill-general" aria-expanded="true">

                                            <div class="media">
                                                <a href="javascript:void(0);" class="mr-25">
                                                    <img src="{{ $data->profile_photo_path ? asset('storage/images/users').'/'.$data->profile_photo_path : asset('assets/images/portrait/small/avatar-s-11.jpg') }}" id="account-upload-img" class="rounded mr-50" alt="profile image" height="80" width="80" />
                                                </a>
                                                <div class="media-body mt-75 ml-1">
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-username">Username</label>
                                                        <input disabled type="text" class="form-control" id="account-username" name="username" placeholder="Username" value="{{ $data->username }}" />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-name">Name</label>
                                                        <input disabled type="text" class="form-control" id="account-name" name="name" placeholder="Name" value="{{ $data->name }}" />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-e-mail">E-mail</label>
                                                        <input disabled type="email" class="form-control" id="account-e-mail" name="email" placeholder="Email" value="{{ $data->email }}" />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-company">Afiliasi</label>
                                                        <input disabled type="text" class="form-control" id="account-company" name="company" placeholder="Company name" value="{{ $data->company }}" />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-company">NIK</label>
                                                        <input disabled type="text" class="form-control" id="account-company" name="nik" placeholder="NIK" value="{{ $data->nik }}" />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-company">ID Sinta</label>
                                                        <input disabled type="text" class="form-control" id="account-company" name="sinta_id" placeholder="ID Sinta" value="{{ $data->sinta_id }}" />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-company">ID GS</label>
                                                        <input disabled type="text" class="form-control" id="account-company" name="gs_id" placeholder="ID GS" value="{{ $data->gs_id }}" />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-company">ID Scopus</label>
                                                        <input disabled type="text" class="form-control" id="account-company" name="scopus_id" placeholder="ID Scopus" value="{{ $data->scopus_id }}" />
                                                    </div>
                                                </div>
                                                <div class="col-12 mt-75">
                                                    {{-- <div class="alert alert-warning mb-50" role="alert">
                                                        @if ($data->hasVerifiedEmail() == false)
                                                            <h4 class="alert-heading">Your email is not confirmed. Please check your inbox.</h4>
                                                            <div class="alert-body">
                                                                <a href="javascript: void(0);" class="alert-link">Resend confirmation</a>
                                                            </div>
                                                        @endif
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>


    @push('page-vendor')
    <script src="{{ asset('assets') }}/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="{{ asset('assets') }}/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="{{ asset('assets') }}/vendors/js/pickers/pickadate/picker.time.js"></script>
    <script src="{{ asset('assets') }}/vendors/js/pickers/pickadate/legacy.js"></script>
    <script src="{{ asset('assets') }}/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
    <script src="{{ asset('assets') }}/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
    @endpush

    @push('custom-scripts')
    <script>
        $('#password, #confirm-password').on('keyup', function () {
            if ($('#password').val() == $('#confirm-password').val()) {
                $('#message').html('Password sama').css('color', 'green');
                $(':input[type="submit"]').prop('disabled', false);
            }else{
                $('#message').html('Password tidak sama').css('color', 'red');
            }
        });

        document.getElementById('account-upload').onchange = function () {
            var src = URL.createObjectURL(this.files[0])
            document.getElementById('account-upload-img').src = src
        }
    </script>
    @endpush

    @push('page-js')
    <script src="{{ asset('assets') }}/js/scripts/forms/form-number-input.js"></script>
    <script src="{{ asset('assets') }}/js/scripts/forms/pickers/form-pickers.js"></script>
    @endpush
    </x-master-layouts>
