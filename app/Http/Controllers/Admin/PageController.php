<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageWeb as Page;
use Exception;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function index()
    {
        return view('admin.pages.index');
    }

    public function create()
    {
        return view('admin.pages.create', [
            // 'categories' => PageCategory::where('status', 1)->get()
        ]);
    }

    public function store(Request $request)
    {
        try{
            $save = new Page();
            $save->title = $request->title;
            $save->slug = Str::slug($request->title);
            $save->content = $request->content;
            $save->status = $request->status;
            // $save->category_id = $request->category_id;
            $save->created_by = auth()->user()->id;
            $save->save();

            Cache::flush('pages');

            return redirect()->route('pages.index')->with('message', "$save->title berhasil ditambahkan");
        }catch(Exception $error){
            return redirect()->route('pages.index')->with('message', $error->getMessage());
        }
    }

    public function edit($id)
    {
        return view('admin.pages.edit', [
            'data' => Page::findOrFail($id),
            // 'categories' => PageCategory::where('status', 1)->get()
        ]);
    }

    public function update(Request $request, $id)
    {
        try{
            $save = Page::findOrFail($id);
            $save->title = $request->title;
            $save->slug = Str::slug($request->title);
            $save->content = $request->content;
            $save->status = $request->status;
            $save->category_id = $request->category_id;
            $save->updated_by = auth()->user()->id;
            $save->save();

            Cache::flush("page-$save->slug");

            return redirect()->route('pages.index')->with('message', "$save->title berhasil diupdate");
        }catch(Exception $error){
            return redirect()->route('pages.index')->with('message', $error->getMessage());
        }
    }
}
