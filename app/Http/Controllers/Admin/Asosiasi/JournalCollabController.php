<?php

namespace App\Http\Controllers\Admin\Asosiasi;

use App\Http\Controllers\Controller;
use App\ImageProses;
use App\Models\JournalCollaboration;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class JournalCollabController extends Controller
{

    public function index()
    {
        return view('admin.asosiasi.journal-collabs.index');
    }


    public function create()
    {
        return view('admin.asosiasi.journal-collabs.create');
    }

    public function store(Request $request)
    {
        // dd($request->image);
        $validate = $request->validate([
            'title' => 'required',
            'link_journal' => 'required',
            'afiliasi' => 'required',
            'editor' => 'required',
            'image'=>'required|image|mimes:jpeg,png,jpg',
            'payment_image'=>'required|image|mimes:jpeg,png,jpg',
        ]);

        $image_setting = [
            'ori_width'=>config('app.img_size.ori_width'),
            'ori_height'=>config('app.img_size.ori_height'),
            'mid_width'=>config('app.img_size.mid_width'),
            'mid_height'=>config('app.img_size.mid_height'),
            'thumb_width'=>config('app.img_size.thumb_width'),
            'thumb_height'=>config('app.img_size.thumb_height')
        ];

        if(!$validate) {
            Alert::toast($request->validate->errors()->first(), 'error');
            return redirect()->back();
        }

        $namaImage = '';
        if($request->file('image') != null){
            $data = array(
                'skala11' => array(
                    'width'=>$request->input('1_1_width'),
                    'height'=>$request->input('1_1_height'),
                    'x'=>$request->input('1_1_x'),
                    'y'=>$request->input('1_1_y')
                )
            );

            $image_data = [
                'file'=>$request->file('image'),
                'setting'=>$image_setting,
                'path'=>public_path('storage/images/cover_journal/'),
                'modul'=>'user',
                'data'=>$data
            ];

            $uploadImg = ImageProses::imageUser($image_data);
            if($uploadImg['status'] == true){
                $namaImage = $uploadImg['namaImage'];
            }
        }

        $request->payment_image->storeAs('public/images/bukti_bayar_jurnal/', auth()->user()->id.$request->payment_image->getClientOriginalName());

        try {
            $save = new JournalCollaboration();
            $save->title = $request->title;
            $save->slug = Str::slug($request->title);
            $save->afiliasi = $request->afiliasi;
            $save->link_journal = $request->link_journal;
            $save->editor = $request->editor;
            $save->index_journal = $request->index_journal;
            $save->image = $namaImage;
            $save->price = $request->price;
            $save->payment_image = '/storage/images/bukti_bayar_jurnal/'.auth()->user()->id.$request->payment_image->getClientOriginalName();
            $save->created_by = auth()->user()->id;
            $save->save();

            if($save){
                Alert::success('Created', 'Article post successuflly');
                return redirect()->route('journal_collab.index');
            }
        } catch (Exception $error) {
            // dd($error->getMessage());
            Alert::error('Fail', $error->getMessage());
            return back();
        }
    }

    public function show($id)
    {
        return view('admin.asosiasi.journal-collabs.detail', [
            'data' => JournalCollaboration::findOrFail($id)
        ]);
    }

    public function edit($id)
    {
        return view('admin.asosiasi.journal-collabs.edit', [
            'data' => JournalCollaboration::findOrFail($id)
        ]);
    }


    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'title' => 'required',
            'link_journal' => 'required',
            'afiliasi' => 'required',
            'editor' => 'required',
            // 'image'=>'required|image|mimes:jpeg,png,jpg',
            // 'payment_image'=>'required|image|mimes:jpeg,png,jpg',
        ]);

        $image_setting = [
            'ori_width'=>config('app.img_size.ori_width'),
            'ori_height'=>config('app.img_size.ori_height'),
            'mid_width'=>config('app.img_size.mid_width'),
            'mid_height'=>config('app.img_size.mid_height'),
            'thumb_width'=>config('app.img_size.thumb_width'),
            'thumb_height'=>config('app.img_size.thumb_height')
        ];

        if(!$validate) {
            Alert::toast($request->validate->errors()->first(), 'error');
            return redirect()->back();
        }

        $namaImage = '';
        if($request->file('image') != null){
            $data = array(
                'skala11' => array(
                    'width'=>$request->input('1_1_width'),
                    'height'=>$request->input('1_1_height'),
                    'x'=>$request->input('1_1_x'),
                    'y'=>$request->input('1_1_y')
                )
            );

            $image_data = [
                'file'=>$request->file('image'),
                'setting'=>$image_setting,
                'path'=>public_path('storage/images/cover_journal/'),
                'modul'=>'user',
                'data'=>$data
            ];

            $uploadImg = ImageProses::imageUser($image_data);
            if($uploadImg['status'] == true){
                $namaImage = $uploadImg['namaImage'];
            }
        }

        if($request->payment_image){
            $request->payment_image->storeAs('public/images/bukti_bayar_jurnal/', auth()->user()->id.$request->payment_image->getClientOriginalName());
        }

        try {
            $save = JournalCollaboration::findOrFail($id);
            $save->title = $request->title;
            $save->slug = Str::slug($request->title);
            $save->afiliasi = $request->afiliasi;
            $save->link_journal = $request->link_journal;
            $save->editor = $request->editor;
            $save->index_journal = $request->index_journal;

            if($request->file('image')){
                $save->image = $namaImage;
            }

            if($request->payment_image){
                $save->payment_image = '/storage/images/bukti_bayar_jurnal/'.auth()->user()->id.$request->payment_image->getClientOriginalName();
            }

            $save->price = $request->price;
            $save->created_by = auth()->user()->id;
            $save->save();

            if($save){
                Alert::success('Created', 'Article post successuflly');
                return redirect()->route('journal_collab.index');
            }
        } catch (Exception $error) {
            dd($error->getMessage());
            Alert::error('Fail', $error->getMessage());
            return back();
        }
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
