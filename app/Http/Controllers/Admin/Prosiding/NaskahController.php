<?php

namespace App\Http\Controllers\Admin\Prosiding;

use App\Http\Controllers\Controller;
use App\Models\Prosiding\BidangIlmu;
use App\Models\Prosiding\ProsidingNaskah;
use Exception;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use function PHPUnit\Framework\returnSelf;

class NaskahController extends Controller
{
    public function index()
    {
        return view('admin.article.index');
    }


    public function create()
    {
        return view('admin.asosiasi.upload-naskah.index', [
            'bidangIlmu' => BidangIlmu::all(),
        ]);
    }


    public function store(Request $request)
    {
        // dd($request);
        $fileName = auth()->user()->id.$request->document->getClientOriginalName();
        try {
            $request->document->storeAs('public/files/naskah/', $fileName);
            $upload = new ProsidingNaskah();
            $upload->user_id = auth()->user()->id;
            $upload->bidang_ilmu_id = $request->bidang_ilmu;
            $upload->judul = $request->judul;
            $upload->abstrak = $request->judul;
            $upload->file_naskah = $fileName;
            $upload->status = 1;
            $upload->save();

            Alert::success('Success', 'Naskah berhasil diupload !');
            return redirect()->route('asosiasi.upload-naskah');

        } catch (Exception $error) {
            dd($error->getMessage());
            Alert::error('Error', $error->getMessage());
            return back();
        }
    }


    public function show($id)
    {

    }


    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {
        //
    }

    public function delete($id)
    {

    }

    public function naskah(){
        return view('admin.asosiasi.naskah');
    }

    public function upload(){
        return view('admin.asosiasi.naskah-upload');
    }
}
