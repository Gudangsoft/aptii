<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Configuration;
use App\Models\Prosiding\CustomerCare;
use App\Models\Prosiding\ProsidingNaskah;
use App\Models\User;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;
use Butschster\Head\Packages\Entities\OpenGraphPackage;
use RobertSeghedi\News\Models\Article;

class HomeController extends Controller
{
    public function index(){
        self::meta('Beranda');
        $statistics = [
            'posts' => Article::where('status', true)->get()->count(),
            'users' => User::where('status', true)->get()->count(),
            'naskah' => ProsidingNaskah::where('status', true)->get()->count(),
        ];
        // dd(PagesController::prosidingInfo());
        return view('frontend.home', [
            'recent'        => PagesController::recentArticles(4),
            'headline'      => PagesController::headlineArticles(),
            'events'        => PagesController::events(),
            'agenda'        => PagesController::agenda(),
            'prosidingInfo' => PagesController::prosidingInfo(),
            'news'          => PagesController::articles(12, null),
            'statistics'    => $statistics,
            'customerCare'  => CustomerCare::where('status', true)->get(),
        ]);
    }

    public static function meta($title)
    {
        $web = Configuration::where('status', 1)->first();
        Meta::prependTitle($title)
                ->setContentType('text/html')
                ->setViewport('width=device-width, initial-scale=1')
                ->setDescription($web->description)
                ->setKeywords(explode(',', $web->tags))
                ->setRobots('nofollow,noindex')
                ->addMeta('author', [
                    'content' => $web->getOwner->name,
                ]);

        $og = new \Butschster\Head\Packages\Entities\OpenGraphPackage('og_meta');

        $og->setType('website')
            ->setSiteName($web->name)
            ->setTitle('Beranda')
            ->setDescription($web->description)
            ->setUrl(config('app.url'))
            ->setLocale('id_ID')
            ->addImage(asset('storage/images/logo').'/'.$web->logo);

        $og->toHtml();
        Meta::registerPackage($og);

        $card = new \Butschster\Head\Packages\Entities\TwitterCardPackage('twitter_meta');

        $card->setType('summary')
        ->setSite('@jarwonoztech')
        ->setTitle($web->name)
        ->setDescription($web->description)
        ->setCreator('@jarwonoztech')
        ->setImage(asset('storage/images/logo').'/'.$web->logo)
        ->addMeta('image:alt', $web->name);

        $card->toHtml();
        Meta::registerPackage($card);
    }
}
