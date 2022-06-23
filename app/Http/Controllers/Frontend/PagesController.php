<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RobertSeghedi\News\Models\Article;

class PagesController extends Controller
{
    public static function recentArticles($limit){
        $rows = Article::orderByDesc('created_at')->paginate($limit);

        return $rows;
    }
}
