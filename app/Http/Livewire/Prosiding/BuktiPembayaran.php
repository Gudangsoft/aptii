<?php

namespace App\Http\Livewire\Prosiding;

use App\Models\Admin\Configuration;
use Livewire\Component;
use App\Models\Jobs\Jobs;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Prosiding\ProsidingPembayaran;
use App\Models\User;

class BuktiPembayaran extends Component
{
    use WithPagination, LivewireAlert;
    protected $paginationTheme = 'bootstrap';

    public $selectData = [];
    public $selectAll = false;
    public $bulkDisabled = true;
    public $statusSelected = false;
    public $search, $limitPerPage = 10, $changeLimitPage;

    protected $queryString = ['search' => ['except' => '']];
    protected $listeners = [
        'deleteConfirmed',
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

        $data = ProsidingPembayaran::where('user_id', auth()->user()->id)->orderByDesc('created_at')->paginate($this->limitPerPage);

        $this->emit('postStore');
        $this->dispatchBrowserEvent('iconLoad');

        $this->bulkDisabled = count($this->selectData) < 1;
        return view('livewire.prosiding.bukti-pembayaran', [
            'data' => $data,
        ]);
    }

    public function deleteSelected(){
        ProsidingPembayaran::query()
            ->whereIn('id', $this->selectData)
            ->delete();
        $this->selectData = [];
        $this->selectAll = false;
    }

    public function selectAll(){
        if($this->selectAll == true){
            $this->selectData = ProsidingPembayaran::pluck('id');
            $this->statusSelected = true;
        }else{
            $this->selectData = [];
        }
    }

    public function unselectedJobs(){
        $this->selectData = [];
        $this->selectAll = false;
        $this->statusSelected = false;

    }

    public function updateStatus($value){
        ProsidingPembayaran::query()
            ->whereIn('id', $this->selectData)
            ->update([
                'status' => $value
            ]);

        $this->selectData = [];
        $this->selectAll = false;
        $this->statusSelected = false;
    }

    public function updateStatusPembayaran($value, $id){
        ProsidingPembayaran::query()
            ->where('id', $id)
            ->update([
                'status' => $value
            ]);

        $this->selectData = [];
        $this->selectAll = false;
        $this->statusSelected = false;
        $this->dispatchBrowserEvent('closeEditModal', ['id' => $id]);
    }

    public function deleteConfirmed(){
        ProsidingPembayaran::findOrFail($this->selected_id)->delete();
        $this->alert('success', 'Data berhasil dihapus', [
            'position' => 'center',
        ]);
    }

    public function confirmPayment($id){
        $wa = Configuration::latest()->first()->whatsapp;
        $data = ProsidingPembayaran::where('id', $id)->where('user_id', auth()->user()->id)->first();
        if($data->naskah_id == null){
            $status = 'Pendaftaran Asosiasi';
        }else{
            $status = 'Jurnal';
        }

        $url = 'https://api.whatsapp.com/send?phone='.$wa.'&text=*Konfirmasi%20Pembayaran..!!*%0A%0ANama:%20'.$data->getUser->name.'%0APembayaran:%20'.$status.'%0ATanggal:%20'.$data->tanggal_bayar.'%0AJumlah:%20'.$data->jumlah.'*%0A%0ALink Nota:%20'.config('app.url').'nota/'.$data->no_transaksi;
        return redirect($url);
    }
}
