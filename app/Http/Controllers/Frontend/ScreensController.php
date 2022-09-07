<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Frontend\PagesController;
use RobertSeghedi\News\Models\Article;

class ScreensController extends Controller
{
    public function posts(Request $request, PagesController $page){

        return view('frontend.articles.index', [
            'data'      => $page->articles(12, $request->page),
            'headline'  => $page->headlineArticles(),
        ]);
    }

    public function tags(PagesController $page, $slug){
        // dd($page->articlesTag(12, $slug));
        return view('frontend.tags.index', [
            'slug'      => $slug,
            'headline'  => $page->headlineArticles(),
        ]);
    }

    public function seminarNasional(Request $request, PagesController $page){
        return view('frontend.events.nasional');
    }

    public function seminarInternasional(Request $request, PagesController $page){
        return view('frontend.events.internasional');
    }

}
