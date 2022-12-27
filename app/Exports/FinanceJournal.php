<?php

namespace App\Exports;

use App\Models\JournalCollaboration;
use App\Models\Prosiding\ProsidingPembayaran as Payment;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class FinanceJournal implements FromView
{
    public function view(): View
    {
        $data = JournalCollaboration::where('status', 1)->orderByDesc('created_at')->get();
        return view('admin.asosiasi.finances.export-finance-journal', [
            'data' => $data,
        ]);
    }
}
