<div>
    <div class="content-header row">
        <div class="content-header-left col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-7">
                    <h2 class="content-header-title float-left mb-0">Pilih Pengurus</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">Pilih Pengurus
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="modal fade text-left" id="create-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12 mt-1">

                            </div>
                            <div class="col-lg-4 col-sm-12 d-flex justify-content-end mt-1">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon-search1"><i data-feather="search"></i></span>
                                    </div>
                                    <input type="text" wire:model="search" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon-search1" />
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-12 d-flex justify-content-end mt-1">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon-search1">Page</i></span>
                                    </div>
                                    <select class="form-control" wire:model="changeLimitPage" id="">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                @if (count($selectJobs) > 0)
                                <tr>
                                    <th colspan="5">
                                        <p class="card-text">
                                            {{ count($selectJobs) }} data selected, <button wire:click="unselectedJobs()" class="btn btn-sm btn-primary">Cancel</button>
                                            <div class="btn-group">
                                                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Pilih Sebagai Pengurus
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
                                                    <a class="dropdown-item" href="javascript:void(0);" wire:click="addMembership()">Tambahkan Pengurus</a>
                                                </div>
                                            </div>
                                        </p>
                                    </th>
                                </tr>
                                @endif
                                <tr>
                                    <td colspan="4">List member yang terdaftar dan sudah melunasi biaya pendaftaran member</td>
                                </tr>
                                <tr>
                                    {{-- <th><input type="checkbox" wire:click="selectAll()" wire:model="selectAll"></th> --}}
                                    <th>Name</th>
                                    <th>Afiliasi</th>
                                    <th>Status</th>
                                    <th>Pilih</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $row)
                                    <tr>

                                        <td>
                                            <span class="font-weight-bold">{{ $row->name }}</span>
                                            @if ($row->status < 1)
                                                <i class="text-danger" data-feather="eye-off"></i>
                                            @endif
                                        </td>
                                        <td>{{ $row->company }}</td>
                                        <td>
                                            @if ($row->status == true)
                                                <span class="badge badge-light-success mr-1"> active</span>
                                            @else
                                                <span class="badge badge-light-danger mr-1"> hidden</span>
                                            @endif
                                        </td>
                                        <td>
                                            <input type="checkbox" value="{{ $row->id }}" wire:model="selectJobs" id="a">
                                        </td>
                                    </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="pt-2 pb-1"><strong>Data not found !</strong></td>
                                </tr>
                                @endforelse

                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center mt-2">
                            {{ $data->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('vendor-css')
        <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendors/css/vendors.min.css">
    @endpush
    @push('page-js')
        <script src="{{ asset('assets') }}/ckeditorx/ckeditor.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('.ckeditor').ckeditor();
            });
        </script>
        <script>
            window.addEventListener('openCategoryModal', event => {
                $("#category-modal").modal('show');
            })

            window.addEventListener('closeCategoryModal', event => {
                $("#category-modal").modal('hide');
            })

            window.addEventListener('closeModalBidangIlmu', event => {
                $("#create-modal-bidangilmu").modal('hide');
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
