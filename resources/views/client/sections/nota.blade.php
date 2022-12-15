<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nota Pembayaran {{ $data->getUser->name }}</title>
    <style>
        table {
            max-width: 100%;
            max-height: 100%;
        }
        body {
            font-family: monospace;
            padding: 5px;
            position: relative;
            width: 100%;
            height: 100%;
        }
        table th,
        table td {
            padding: .625em;
        text-align: center;
        }
        table .kop:before {
            content: ': ';
        }
        .left {
            text-align: left;
        }
        table #caption {
        font-size: 1.5em;
        margin: .5em 0 .75em;
        }
        table.border {
        width: 100%;
        border-collapse: collapse
        }

        table.border tbody th, table.border tbody td {
        border: thin solid #000;
        padding: 2px
        }
        .ttd td, .ttd th {
            padding-bottom: 4em;
        }
    </style>
</head>
<body>
    @php
        $config = \App\Models\Admin\Configuration::orderBy('created_at')->first();
    @endphp
    <div id="printable" class="container">
        <table border="0" cellpadding="0" cellspacing="0" width="485" class="border" style="overflow-x:auto;">
          <thead>
          <tr>
            <td colspan="6" width="485" id="caption">{{ $config->name }}</td>
          </tr>
          <tr>
            <td colspan="2">Nama </td>
            <td class="left kop">{{ $data->getUser->name }}</td>
            <td></td>
            <td>Tanggal</td>
            <td class="left kop">{{ \Carbon\Carbon::parse($data->tanggal_bayar)->format('D, m Y') }}</td>
          </tr>
          <tr>
            <td colspan="2">No Tansaksi</td>
            <td class="left kop">{{ $data->no_transaksi }}</td>
            <td></td>
            <td>Perihal</td>
            <td class="left kop">
                @php
                    if($data->naskah_id == null){
                        $status = 'Pendaftaran Asosiasi';
                    }else{
                        $status = 'Jurnal';
                    }
                @endphp
                {{ $status }}
            </td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          </thead>
          <tbody>
            <tr>
              <th>No</th>
              <th>NOMINAL</th>
              <th>JUMLAH</th>
              <th>TOTAL</th>
              <th colspan="2">KETERANGAN</th>
              <th colspan="2">STATUS</th>
            </tr>
            <tr>
              <td align="right">1</td>
              <td>Rp {{ number_format($data->jumlah) }}</td>
              <td align="right">1</td>
              <td>Rp {{ number_format($data->jumlah) }}</td>
              <td colspan="2"> {{ $data->keterangan }}</td>
              <td colspan="2" rowspan="2">
                @if ($data->status == 1)
                    <span class="badge badge-glow badge-success">LUNAS</span>
                @elseif ($data->status == 0)
                    <span class="badge badge-glow badge-secondary">MENUNGGU</span>
                @else
                    <span class="badge badge-glow badge-danger">MENUNGGU</span>
                @endif
              </td>
            </tr>
            <tr>
              <th colspan="3"> TOTAL</th>
              <td>Rp {{ number_format($data->jumlah) }}</td>
              <td colspan="2"></td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr class="ttd">
              <th colspan="2">Customer</th>
              <th colspan="2"></th>
              <th colspan="2">Mengetahui</th>
            </tr>
            <tr>
            <td colspan="2">{{ $config->getOwner->name }}</td>
              <td colspan="2"></td>
              <td colspan="2">{{ $data->getUser->name }}</td>
            </tr>
          </tfoot>
        </table>
        </div>
</body>
</html>
