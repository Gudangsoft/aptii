<x-frontend-master>
    <div class="page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="post-single">
                        <div class="post-thumb">
                            <img src="https://asset.kompas.com/crops/n-L3Xb_alBUqHpjnqYtadDvumB0=/0x83:2000x1417/750x500/data/photo/2021/02/03/601aa35153cc4.jpg" alt="" class="img-fluid">
                        </div>

                        <div class="single-post-content">
                            <div class="post-meta">
                                <span class="post-author">Oleh : <strong>{{ $data->user->name }}</strong></span>
                                <span class="post-date"><i class="fa fa-calendar-alt mr-2"></i>{{ $data->dateCreate }}</span>
                            </div>
                            <h3 class="post-title">{!! $data->name !!}</h3>
                            <table>
                                <tr>
                                    <td class="fw-bold">Institusi</td>
                                    <td>:</td>
                                    <td>{{ $data->institution }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Waktu</td>
                                    <td>:</td>
                                    <td>{{ $data->date }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Anggaran</td>
                                    <td>:</td>
                                    <td>Rp {{ number_format($data->budget) }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Ketetangan</td>
                                    <td>:</td>
                                    <td>{!! $data->description !!}</td>
                                </tr>
                            </table>

                            @include('client.sections.journal-linkages', ['title' => 'Jurnal Terkait', 'data' => $journals])

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4">
                    @include('client.sections.sidebar-journal')
                </div>
            </div>
        </div>
    </div>
</x-frontend-master>
