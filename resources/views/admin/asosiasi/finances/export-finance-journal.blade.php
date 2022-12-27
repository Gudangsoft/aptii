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
    <div class="container">

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="3"><h4>Total Dana Jurnal Afiliasi</h4></th>
                        <th colspan="2" class="text-right"><h4>Rp {{ number_format($data->sum('price')) }}</h4></th>
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
</body>
</html>
