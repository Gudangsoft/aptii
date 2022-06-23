<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Exception;
use Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use RealRashid\SweetAlert\Facades\Alert;
use RobertSeghedi\News\Models\Article;
use RobertSeghedi\News\Models\Category;
use RobertSeghedi\News\Models\News;

class ArticleController extends Controller
{

    public function index()
    {
        return view('admin.article.index');
    }


    public function create()
    {
        return view('admin.article.create', [
            'categories' => Category::all(),
        ]);
    }


    public function store(Request $request)
    {
        // dd($request->image);
        $this->validate($request, [
            'title' => 'required',
            'category' => 'required',
            'slug' => 'required',
            'status' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]);

        $image = $request->file('image');
        $input['imagename'] = time().'.'.$image->extension();

        $destinationPath = public_path('/storage/articles/thumbnail');
        $img = Image::make($image->path());
        $img->resize(400, 400, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$input['imagename']);

        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['imagename']);

        try {
            $article = News::post(
                $request->title,
                $request->slug,
                $request->content,
                $request->category,
                $request->status,
                $input['imagename'],
                $request->tags,
                $request->date,
            );

            Cache::flush();

            if($article){
                Alert::success('Created', 'Article post successuflly');
                return redirect()->route('articles.index');
            }
        } catch (Exception $error) {
            Alert::error('Fail', $error->getMessage());
            return back();
        }
    }


    public function show($id)
    {
        return view('admin.article.detail', ['data' => Article::findOrFail($id)]);
    }


    public function edit($id)
    {
        $data = Article::findOrFail($id);
        return view('admin.article.edit', [
            'categories'        => Category::all(),
            'currentCategory'    => Category::findOrFail($data->category),
            'data' => $data
            // 'current_categories' => Category::all(),
        ]);
    }


    public function update(Request $request, $id)
    {
        $currentImage = Article::findOrFail($id)->image;

        if($request->image != null){
            if (file_exists(public_path('/storage/articles/thumbnail/').$currentImage)){
                unlink(public_path('/storage/articles/thumbnail/').$currentImage);
            }
            $image = $request->file('image');
            $input['imagename'] = time().'.'.$image->extension();

            $destinationPath = public_path('/storage/articles/thumbnail');
            $img = Image::make($image->path());
            $img->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$input['imagename']);

            $destinationPath = public_path('/images');
            $image->move($destinationPath, $input['imagename']);
        }
        try {
            $article = Article::findOrFail($id);
            $article->title = $request->title;
            $article->slug = $request->slug;
            $article->content = $request->content;
            $article->category = $request->category;
            $article->author = auth()->user()->id;
            $article->status = $request->status;
            $article->tags = $request->tags;

            if ($request->date != null) {
                $article->updated_at = $request->date;
            }

            if($request->image != null){
                $article->image = $input['imagename'];
            }

            $article->save();

            // Cache::flush();
            Cache::flush('article-'.$article->id);

            Alert::success('Updated', 'Article updated successuflly');
            return redirect()->route('articles.index');
        } catch (Exception $error) {
            Alert::error('Fail', $error->getMessage());
            return back();
        }
    }


    public function destroy($id)
    {
        //
    }

    public function delete($id)
    {
        News::delete_post($id);
        Alert::success('Deleted', 'Article delete successuflly');
        return back();
    }
}
