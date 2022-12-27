<div>
    <div class="content-body">
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Export
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
                                    <a class="dropdown-item" href="javascript:void(0);" wire:click='allData()'>Semua Data</a>
                                    <a class="dropdown-item" href="javascript:void(0);" wire:click='currentData({{ $data }})'>Berdasarkan Tanggal</a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 d-flex justify-content-end">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon-search1">Tanggal</i></span>
                                    </div>
                                    <input type="text" wire:model='rangeDate' id="fp-range" class="form-control flatpickr-range" placeholder="YYYY-MM-DD to YYYY-MM-DD" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th colspan="3"><h4>Total Dana Jurnal Afiliasi</></th>
                                    <th colspan="2" class="text-right"><h4>Rp {{ number_format($data->sum('price')) }}</></th>
                                </tr>
                                <tr>
                                    <th>Judul</th>
                                    <th>Afiliasi</th>
                                    <th>Chif Editor</th>
                                    <th>Bukti Bayar</th>
                                    <th>Total Bayar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $row)
                                    <tr>
                                        <td>
                                            {{ $row->title }}
                                        </td>
                                        <td>
                                            {{ $row->afiliasi }}
                                        </td>
                                        <td>
                                            {{ ucwords($row->editor) }}
                                        </td>
                                        <td>
                                            {{ asset($row->payment_image) }}
                                        </td>
                                        <td>
                                            Rp {{ number_format($row->price) }}
                                        </td>
                                    </tr>
                                @empty
                                <tr>
                                    <td colspan="8" class="text-center pt-2 pb-1"><strong>Data not found !</strong></td>
                                </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('vendor-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendors/css/pickers/pickadate/pickadate.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendors/css/pickers/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/plugins/forms/pickers/form-flat-pickr.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/plugins/forms/pickers/form-pickadate.css">
    @endpush
    @push('page-vendor')
        <script src="{{ asset('assets') }}/vendors/js/pickers/pickadate/picker.date.js"></script>
        <script src="{{ asset('assets') }}/vendors/js/pickers/pickadate/picker.time.js"></script>
        <script src="{{ asset('assets') }}/vendors/js/pickers/pickadate/legacy.js"></script>
        <script src="{{ asset('assets') }}/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
        <script src="{{ asset('assets') }}/js/scripts/forms/pickers/form-pickers.js"></script>
    @endpush
    @push('page-js')
        <script>
            window.addEventListener('openFormModal', event => {
                $("#create-modal").modal('show');
            })

            window.addEventListener('closeFormModal', event => {
                $("#create-modal").modal('hide');
            })

            window.addEventListener('closeEditModal', event => {
                let id = event.detail.id;
                $("#modal-edit"+id).modal('hide');
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
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
        <script src="{{ asset('assets') }}/vendors/js/pickers/pickadate/picker.js"></script>
    @endpush

</div>
