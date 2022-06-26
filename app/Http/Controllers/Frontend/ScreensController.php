<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Frontend\PagesController;

class ScreensController extends Controller
{
    public function posts(){

        return view('frontend.articles.index', [
            'data'    => PagesController::articles(4),
            'headline'  => PagesController::headlineArticles(1),
        ]);
    }
}
