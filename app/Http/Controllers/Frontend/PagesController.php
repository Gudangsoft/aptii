<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\JournalCollaboration;
use App\Models\Prosiding\Agenda;
use App\Models\Prosiding\Event;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use RobertSeghedi\News\Models\Article;
use Illuminate\Support\Str;
use App\Models\Post\PostArticles as PostArticle;
use RobertSeghedi\News\Models\Category;

class PagesController extends Controller
{
    public static function articles($limit, $page = null){
        $rows = PostArticle::orderByDesc('created_at')->paginate($limit)->withQueryString();
        return $rows;
    }

    public static function articlesTag($limit, $slug){
        $tag  = Tag::where('slug', $slug)->first()->id;
        $rows = PostArticle::where('tags', 'like', '%' . $tag . '%')->orderByDesc('created_at')->paginate($limit);
        return $rows;
    }

    public static function popularArticle(){
        $data = PostArticle::orderByDesc('counter')->paginate(4);
        return $data;
    }

    public static function recentArticles($limit){
        $data = Cache::rememberForever('recent-articles', function () use($limit) {
            $rows = PostArticle::orderByDesc('created_at')->paginate($limit);
            return $rows;
        });
        return $data;
    }

    public static function headlineArticles(){
        $data = Cache::rememberForever('headline', function () {
            $rows = PostArticle::where('type', 1)->where('status', true)->orderByDesc('created_at')->get();
            return $rows;
        });
        return $data;
    }

    public static function sliderArticles(){
        $data = Cache::rememberForever('slider', function () {
            $rows = PostArticle::where('type', 2)->orderByDesc('created_at')->get();
            return $rows;
        });
        return $data;
    }

    public static function events(){
        $data = Cache::rememberForever('events', function () {
            $rows = Event::where('status', 1)->orderByDesc('created_at')->get();
            return $rows;
        });
        return $data;
    }

    public static function prosidingInfo(){
        $category = Category::where('slug', 'prosiding')->first();
        if($category != null){
            $rows = PostArticle::orderByDesc('created_at')
                    ->where('category', $category->id)
                    ->whereNot('type', 1)
                    ->where('status', true)
                    ->paginate(10);
        }else{
            $rows = null;
        }
        return $rows;
    }

    public static function agenda(){
        return Agenda::orderByDesc('created_at')->where('status', true)->get();
    }

    public static function  activities(){
        return Activity::orderByDesc('created_at')->where('status', true)->get();
    }

    public static function tags(){
        return Tag::orderByDesc('created_at')->where('status', true)->get();
    }

    public static function seminarNasional($limit, $page = null){
        $data = Cache::remember("seminarnasional-$page", 60 * 60 * 12, function () use($limit) {
            $rows = Event::where('type', 1)->orderByDesc('created_at')->paginate($limit)->withQueryString();
            return $rows;
        });
        return $data;
    }

    public static function seminarInternasional($limit, $page = null){
        $data = Cache::remember("seminarnasional-$page", 60 * 60 * 12, function () use($limit) {
            $rows = Event::where('type', 2)->orderByDesc('created_at')->paginate($limit)->withQueryString();
            return $rows;
        });
        return $data;
    }

    public static function journalLinkages($userId, $id){
        return JournalCollaboration::where('created_by', $userId)
                                    ->whereNot('id', $id)
                                    ->where('status', true)
                                    ->orderByDesc('created_at')
                                    ->paginate(10)
                                    ->withQueryString();
    }

    public static function kegiatanLinkages($userId, $id){
        return Activity::where('created_by', $userId)
                        ->whereNot('id', $id)
                        ->where('status', true)
                        ->orderByDesc('created_at')
                        ->paginate(10)
                        ->withQueryString();
    }
}
