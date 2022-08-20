<?php

namespace App\Http\Controllers\Admin\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Prosiding\Event;
use Exception;
use RealRashid\SweetAlert\Facades\Alert;

class EventController extends Controller
{
    public function index()
    {
        return view('admin.event.index');
    }

    public function create()
    {
        return view('admin.event.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        $fileName = auth()->user()->id.$request->photo->getClientOriginalName();
        try {
            $request->photo->storeAs('public/pictures/events/', $fileName);

            $save = new Event();
            $save->judul = $request->judul;
            $save->keterangan = $request->keterangan;
            $save->link = $request->link;
            $save->date_start = $request->mulai;
            $save->date_end = $request->selesai;
            $save->created_by = auth()->user()->id;
            $save->status = 1;
            $save->image = $fileName;
            $save->save();

            Alert::success('Success', 'Naskah berhasil diupload !');
            return redirect()->route('event.index');

        } catch (Exception $error) {
            dd($error->getMessage());
            Alert::error('Error', $error->getMessage());
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
