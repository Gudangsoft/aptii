<?php

namespace App\Exports;


use App\Models\Prosiding\ProsidingPembayaran as Payment;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class FinanceExportByDate implements FromView
{
    public function __construct($id)
    {
        $this->selectedKey = $id;
    }

    public function view(): View
    {
        $data = Payment::whereIn('id', $this->selectedKey)->where('status', 1)->orderByDesc('created_at')->get();
        return view('admin.asosiasi.finances.export-report', [
            'data' => $data,
        ]);
    }
}
