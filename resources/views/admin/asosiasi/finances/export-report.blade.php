<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Keuangan</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/bootstrap.css">
</head>
<body>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th colspan="3"><h4>Jumlah Dana Masuk</h4></th>
                    <th colspan="5" class="text-right"><h4>Rp {{ number_format($data->sum('jumlah')) }}</h4></th>
                </tr>
                <tr>
                    <th>Nama</th>
                    <th>Institusi</th>
                    <th>Kategori</th>
                    <th>Tanggal</th>
                    <th>Total</th>
                    <th>Bank</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $row)
                    <tr>
                        <td>{{ $row->getUser->name }}</td>
                        <td>{{ $row->getUser->company }}</td>
                        <td>{!! $row->category == 2 ? "PENGELOLA JURNAL" : "MEMBER" !!}</td>
                        <td>{{ $row->tanggal_bayar }}</td>
                        <td>Rp {{ number_format($row->jumlah) }}</td>
                        <td>{{ $row->bank_pengirim }}</td>
                        <td>{{ $row->keterangan }}</td>
                    </tr>
                @empty
                <tr>
                    <td colspan="9" class="pt-2 pb-1 text-center"><h4>Data tidak ditemukan !</h5></td>
                </tr>
                @endforelse

            </tbody>
        </table>
    </div>
</body>
</html>
