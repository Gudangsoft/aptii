<?php

namespace App\Http\Livewire\Asosiasi;

use App\Models\Membership;
use App\Models\Prosiding\ProsidingPembayaran as PaymentValidation;
use App\Models\User;
use Exception;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class CreateMembership extends Component
{
    use WithPagination, LivewireAlert;
    protected $paginationTheme = 'bootstrap';

    public $selectJobs = [];
    public $selectAll = false;
    public $bulkDisabled = true;
    public $statusSelected = false;
    public $search, $limitPerPage = 10, $changeLimitPage;
    public $categoryId, $title, $keterangan;

    protected $queryString = ['search' => ['except' => '']];
    protected $listeners = [
        'deleteConfirmed',
        'deleteSelected',
        'jobs-table' => 'jobsCategoryTable'
    ];

    public function jobsCategoryTable(){
        $this->limitPerPage = $this->limitPerPage + 6;
    }

    public function render()
    {
        if(!empty($this->changeLimitPage)){
            $this->limitPerPage = $this->changeLimitPage;
        }

        $memberships = Membership::all()->pluck('user_id');
        $verify      = PaymentValidation::all()->pluck('user_id');
        $data        = User::whereIn('id', $verify)->whereNotIn('id', $memberships)->orderByDesc('created_at')->paginate($this->limitPerPage);
        if($this->search != null){
            $data = User::where('name', 'like', '%'.$this->search.'%')->orderByDesc('created_at')->paginate($this->limitPerPage);
        }

        $this->emit('postStore');
        $this->dispatchBrowserEvent('iconLoad');

        $this->bulkDisabled = count($this->selectJobs) < 1;
        return view('livewire.asosiasi.create-membership', [
            'data' => $data,
        ]);
    }

    public function deleteSelectedConfirm(){
        $this->alert('question', 'Yakin data akan dihapus?', [
            'showConfirmButton' => true,
            'showCancelButton' => true,
            'confirmButtonText' => 'Hapus',
            'onConfirmed' => 'deleteSelected',
            'position' => 'center',
            'timer' => null,
        ]);

    }

    public function deleteSelected(){
        User::query()
            ->whereIn('id', $this->selectJobs)
            ->delete();
        $this->selectJobs = [];
        $this->selectAll = false;
    }

    public function addMembership(){
        $users = User::query()
            ->whereIn('id', $this->selectJobs)
            ->get();

        foreach ($users as $key => $value) {
            $save[$key] = Membership::create([
                'user_id' => $value->id,
                'status' => 1,
                'created_by' => auth()->user()->id,
            ]);
        }

        $this->selectJobs = [];
        $this->selectAll = false;

        session()->flash('message', 'Pengurus berhasil ditambahkan.');
        return redirect()->route('memberships.index');
    }

    public function editJobsCategory($id){
        $data = User::findOrFail($id);
        $this->categoryId = $id;
        $this->title = $data->judul;

        $this->dispatchBrowserEvent('openCategoryModal');
    }

    public function updateJobsCategory(){
        $save = User::findOrFail($this->categoryId);
        $save->judul = $this->title;
        // $save->slug = Str::slug($this->title);
        $save->save();

        $this->alert('success', 'Category update successfully...', [
            'position' => 'center',
        ]);

        $this->dispatchBrowserEvent('closeCategoryModal');
    }

    public function selectAll(){
        if($this->selectAll == true){
            $this->selectJobs = User::pluck('id');
            $this->statusSelected = true;
        }else{
            $this->selectJobs = [];
        }
    }

    public function unselectedJobs(){
        $this->selectJobs = [];
        $this->selectAll = false;
        $this->statusSelected = false;

    }

    public function updateStatus($value){
        User::query()
            ->whereIn('id', $this->selectJobs)
            ->update([
                'status' => $value
            ]);

        $this->selectJobs = [];
        $this->selectAll = false;
        $this->statusSelected = false;
    }

    public function deleteSingleSelected($id){
        $this->selected_id = $id;

        $this->alert('question', 'Yakin data akan dihapus?', [
            'showConfirmButton' => true,
            'showCancelButton' => true,
            'confirmButtonText' => 'Hapus',
            'onConfirmed' => 'deleteConfirmed',
            'position' => 'center',
            'timer' => null,
        ]);
    }

    public function deleteConfirmed(){
        User::findOrFail($this->selected_id)->delete();
        $this->alert('success', 'Data berhasil dihapus', [
            'position' => 'center',
        ]);
    }

}
