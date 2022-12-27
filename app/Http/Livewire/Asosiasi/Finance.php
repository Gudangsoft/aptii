<?php

namespace App\Http\Livewire\Asosiasi;

use App\Exports\FinanceExport;
use App\Exports\FinanceExportByDate;
use App\Exports\ReportExport;
use App\Exports\ReportExportView;
use App\Models\Prosiding\ProsidingPembayaran as Payment;
use App\Models\Store\Book;
use App\Models\Store\CartDetail;
use App\Models\Store\Report as StoreReport;
use App\Models\User;
use Illuminate\Support\Arr;
use Livewire\Component;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Maatwebsite\Excel\Facades\Excel;

class Finance extends Component
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

        $data = Payment::where('status', 1)->orderByDesc('created_at')->get();
        if($this->search != null){
            $user = User::where('name', 'like', '%'.$this->search.'%')->pluck('id');
            if($user == null){
                $data = $data;
            }else{
                $data = Payment::whereIn('user_id', $user)->orderByDesc('created_at')->get();
            }
        }

        if(!empty($this->rangeDate)){
            $dateStart = substr($this->rangeDate, 0, 10);
            $dateEnd   = substr($this->rangeDate, -10);

            $data = Payment::where('status', 1)->orderByDesc('tanggal_bayar')->whereBetween('tanggal_bayar', [$dateStart, $dateEnd])->get();
        }

        $this->emit('postStore');
        $this->dispatchBrowserEvent('iconLoad');

        $this->bulkDisabled = count($this->selectData) < 1;
        return view('livewire.asosiasi.finance', [
            'data' => $data,
        ]);
    }


    public function currentData($data)
    {
        $id = Arr::pluck($data, 'id');

        return Excel::download(new FinanceExportByDate($id), 'laporan_penjualan.xlsx');
    }

    public function allData(){
        return Excel::download(new FinanceExport, 'laporan_keuangan.xlsx');
    }

}
