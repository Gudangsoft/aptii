@section('title')
    Laporan Keuangan Jurnal Afiliasi -
@endsection

<x-master-layouts>
    @include('sweetalert::alert')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-12 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Laporan Keuangan Jurnal Afiliasi</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">Laporan Keuangan Jurnal Afiliasi
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @livewire('asosiasi.finance-journal')
        </div>
    </div>
</x-master-layouts>
