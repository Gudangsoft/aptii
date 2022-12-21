<div>
    <div class="content-header row">
        <div class="content-header-left col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-7">
                    <h2 class="content-header-title float-left mb-0">Kegiatan</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">Kegiatan
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="col-5 d-flex justify-content-end">
                    <a href="{{ route('activity.create') }}" class="btn btn-primary">Tambah</a>
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
                            <div class="col-lg-6 col-sm-12">
                                @if (count($selectData) > 0)
                                <p class="card-text">
                                    {{ count($selectData) }} data selected, <button wire:click="unselectedJobs()" class="btn btn-sm btn-primary">Cancel</button>
                                    <div class="btn-group">
                                        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Actions
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
                                            @role('admin|super admin')
                                                <a class="dropdown-item" href="javascript:void(0);" wire:click="updateStatus(1)">Diterima</a>
                                                <a class="dropdown-item" href="javascript:void(0);" wire:click="updateStatus(0)">Pending</a>
                                            @endrole
                                            <a class="dropdown-item" href="javascript:void(0);" wire:click="deleteSelected()">Delete</a>
                                        </div>
                                    </div>
                                </p>
                                @endif
                            </div>
                            <div class="col-lg-4 col-sm-12 d-flex justify-content-end">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon-search1"><i data-feather="search"></i></span>
                                    </div>
                                    <input type="text" wire:model="search" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon-search1" />
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-12 d-flex justify-content-end">
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
                                <tr>
                                    <th><input type="checkbox" wire:click="selectAll()" wire:model="selectAll"></th>
                                    <th>Nama Kegiatan</th>
                                    <th>Instansi</th>
                                    <th>Pelaksanaan</th>
                                    <th>Anggaran</th>
                                    <th>No Rekening</th>
                                    <th>Oleh</th>
                                    <th>Status</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $row)
                                    <tr>
                                        <td>
                                            <input type="checkbox" value="{{ $row->id }}" wire:model="selectData" id="a">
                                        </td>
                                        <td>
                                            {{ $row->name }}
                                        </td>
                                        <td>
                                            {{ $row->institution }}
                                        </td>
                                        <td>
                                            {{ \Carbon\Carbon::parse($row->date)->isoFormat('dddd, D MMMM Y') }}
                                        </td>
                                        <td>
                                            Rp {{ number_format($row->budget) }}
                                        </td>
                                        <td>
                                            {{ $row->no_rekening }}
                                        </td>
                                        <td>
                                            <span class="badge badge-light-primary mr-1"> {{ ucfirst($row->user->name) }}</span>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-{{ $row->status == 1 ? 'warning' : 'secondary' }} waves-effect waves-float waves-light">{{ $row->status == 1 ? 'DITERIMA' : 'PENDING' }}</button>
                                                @role('admin|super admin')
                                                <button type="button" class="btn btn-sm btn-dark dropdown-toggle dropdown-toggle-split waves-effect waves-float waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" style="">
                                                    <h6 class="dropdown-header">Ubah Status</h6>
                                                    <a class="dropdown-item" href="javascript:void(0);" wire:click='setBudget({{ $row->id }})'><i data-feather='check'></i> Terima</a>
                                                    <a class="dropdown-item" href="javascript:void(0);" wire:click='updateStatusSingle({{ $row->id}}, 0)'><i data-feather='alert-circle'></i> Pending</a>
                                                </div>
                                                @endrole
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <div class="btn-group">
                                                <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Select
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
                                                    <a class="dropdown-item" href="{{ route('activity.show', $row->id) }}">Detail</a>
                                                    <a class="dropdown-item" href="{{ route('activity.edit', $row->id) }}">Edit</a>
                                                    <a class="dropdown-item" wire:click="deleteSingleSelected({{ $row->id }})">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                <tr>
                                    <td colspan="8" class="text-center pt-2 pb-1"><strong>Data not found !</strong></td>
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
    <div wire:ignore class="modal fade modal-primary" id="status-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel160" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel160">Masukan Jumlah Anggaran Tersedia</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('activity.setBudget') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="col-12">
                        <div class="form-group mb-2">
                            <h5 for="blog-edit-title">Anggaran Tersedia</h5>
                            <input type="hidden" name='selectId' id="selectId">
                            <input type="number" name="max_budget" id="max_budget" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type='submit' value="Simpan" class="btn btn-primary">
                </div>
                </form>
            </div>
        </div>
    </div>
    @push('vendor-css')
        <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendors/css/vendors.min.css">
    @endpush
    @push('page-js')

        <script>
            window.addEventListener('openModalStatus', event => {
                $("#status-modal").modal('show');
                $("#selectId").val(event.detail.id);
            })

            window.addEventListener('closeFormModal', event => {
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
