<?php

namespace App\Http\Livewire\Asosiasi;

use App\Exports\FinanceExport;
use App\Exports\FinanceExportByDate;
use App\Exports\FinanceJournal as ExportsFinanceJournal;
use App\Exports\FinanceJournalByDate;
use App\Models\JournalCollaboration;
use App\Models\Prosiding\ProsidingPembayaran as Payment;
use App\Models\User;
use Illuminate\Support\Arr;
use Livewire\Component;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Maatwebsite\Excel\Facades\Excel;

class FinanceJournal extends Component
{
    use WithPagination, LivewireAlert;
    protected $paginationTheme = 'bootstrap';

    public $selectData = [];
    public $selectAll = false;
    public $bulkDisabled = true;
    public $statusSelected = false;
    public $search, $limitPerPage = 10, $changeLimitPage;
    public $rangeDate;

    protected $queryString = ['search' => ['except' => '']];
    protected $listeners = [
        'deleteConfirmed',
        'deleteAll',
        'jobs-table' => 'jobsTable'
    ];

    public function jobsTable(){
        $this->limitPerPage = $this->limitPerPage + 6;
    }


    public function render()
    {
        if(!empty($this->changeLimitPage)){
            $this->limitPerPage = $this->changeLimitPage;
        }

        $data = JournalCollaboration::where('status', 1)->orderByDesc('created_at')->get();

        if(!empty($this->rangeDate)){
            $dateStart = substr($this->rangeDate, 0, 10);
            $dateEnd   = substr($this->rangeDate, -10);

            $data = JournalCollaboration::where('status', 1)->orderByDesc('created_at')->whereBetween('created_at', [$dateStart, $dateEnd])->get();
        }

        $this->emit('postStore');
        $this->dispatchBrowserEvent('iconLoad');

        $this->bulkDisabled = count($this->selectData) < 1;
        return view('livewire.asosiasi.finance-journal', [
            'data' => $data,
        ]);
    }


    public function currentData($data)
    {
        $id = Arr::pluck($data, 'id');

        return Excel::download(new FinanceJournalByDate($id), 'laporan_keuangan_jurnal_afiliasi_date.xlsx');
    }

    public function allData(){
        return Excel::download(new ExportsFinanceJournal, 'laporan_keuangan_jurnal_afiliasi.xlsx');
    }

}
