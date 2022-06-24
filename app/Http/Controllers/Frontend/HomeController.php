<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;
// use Butschster\Head\MetaTags\MetaInterface;

class HomeController extends Controller
{
    public function index(){
        Meta::prependTitle('Home page')
                ->setViewport('width=device-width, initial-scale=1')
                ->setDescription('Jarwonotech adalah layanan web khusus untuk berbagi tutorial trips dan trik seputar laravel')
                ->setKeywords(['jarwonozt', 'jarwonoztech', 'laravel', 'blog'])
                ->setRobots('nofollow,noindex')
                ->setContentType('text/html');

        // dd(PagesController::sliderArticles(4));
        return view('frontend.home', [
            'recent'    => PagesController::recentArticles(4),
            'slider'    => PagesController::sliderArticles(4),
            'headline'  => PagesController::headlineArticles(2),
        ]);
    }

    public function post($slug){

        return view('frontend.article.detail', [
            'data'      => PageController::article($slug),
            'recent'    => PagesController::recentArticles(4),

        ]);
    }
}
