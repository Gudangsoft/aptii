<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Video;
use Exception;
use Illuminate\Support\Str;

class VideoController extends Controller
{
    public function index()
    {
        return view('admin.videos.index');
    }

    public function create()
    {
        return view('admin.videos.create');
    }

    public function store(Request $request)
    {

        try{
            $save = new Video();
            $save->code = Str::random(5);
            $save->youtube_id = $request->youtube_id;
            $save->title = $request->title;
            $save->slug = Str::slug($request->title);
            $save->content = $request->content;
            $save->status = $request->status;
            $save->category_id = 1;
            $save->created_by = auth()->user()->id;
            $save->save();


            return redirect()->route('videos.index')->with('message', $save->title.' | Berhasil ditambahkan!');
        }catch(Exception $error){
            return redirect()->route('videos.index')->with('message', $error->getMessage());
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('admin.videos.edit',[
            'data'          => Video::findOrFail($id),
        ]);
    }

    public function update(Request $request, $id)
    {
        try{
            $save = Video::findOrFail($id);
            $save->code = Str::random(5);
            $save->youtube_id = $request->youtube_id;
            $save->title = $request->title;
            $save->slug = Str::slug($request->title);
            $save->content = $request->content;
            $save->status = $request->status;
            $save->category_id = 1;
            $save->created_by = auth()->user()->id;
            $save->save();

            return redirect()->route('videos.index')->with('message', $save->title.' | Berhasil diupdate!');
        }catch(Exception $error){
            return redirect()->route('videos.index')->with('message', $error->getMessage());
        }
    }

    public function destroy($id)
    {
        //
    }
}
