<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        return view('frontend.home', [
            'recent'    => PagesController::recentArticles(4),
        ]);
    }

    public function post($slug){

        return view('frontend.article.detail', [
            'data'      => PageController::article($slug),
            'recent'    => PagesController::recentArticles(4),

        ]);
    }
}
