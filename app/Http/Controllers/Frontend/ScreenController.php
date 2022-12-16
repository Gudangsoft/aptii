<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\MetaController;
use App\Models\Admin\Configuration;
use App\Models\PageWeb;
use App\Models\Post\PostAction;
use App\Models\Post\PostArticles;
use App\Models\Prosiding\CustomerCare;
use App\Models\Prosiding\Event;
use App\Models\Prosiding\ProsidingNaskah;
use App\Models\Prosiding\ProsidingPembayaran;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;
use Illuminate\Support\Arr;
use RobertSeghedi\News\Models\Article;
use Illuminate\Support\Str;
use RobertSeghedi\News\Models\News;

class ScreenController extends Controller
{
    public function post($slug){
        MetaController::meta($slug);
        PostAction::counter($slug);
        return view('client.screen.post', [
            'data'          => PageController::article($slug),
            'popular'       => PagesController::popularArticle(),
            'recent'        => PagesController::recentArticles(4),
            'agendas'       => PagesController::agenda(),
            'tags'          => PagesController::tags(),
        ]);
    }

    public function seminar($slug){
        MetaController::metaSeminar($slug);
        return view('frontend.events.detail', [
            'data'          => PageController::seminar($slug),
            'popular'       => PagesController::popularArticle(),
            'recent'        => PagesController::recentArticles(4),
            'agendas'       => PagesController::agenda(),
            'tags'          => PagesController::tags(),
        ]);
    }



    public function contact(){
        HomeController::meta('Kontak Kami');

        return view('frontend.sections.contact', [
            'popular'       => PagesController::popularArticle(),
            'recent'        => PagesController::recentArticles(4),
            'agendas'       => PagesController::agenda(),
            'tags'          => PagesController::tags(),
            'customerCare'  => CustomerCare::where('status', true)->get(),
            'configuration' => Configuration::orderBy('created_at')->first()
        ]);
    }

    public function nota($id){
        HomeController::meta('Nota Pembayaran');
        $data = ProsidingPembayaran::where('no_transaksi', $id)->first();
        // dd($data);
        return view('client.sections.nota', [
            'popular'       => PagesController::popularArticle(),
            'recent'        => PagesController::recentArticles(4),
            'agendas'       => PagesController::agenda(),
            'tags'          => PagesController::tags(),
            'customerCare'  => CustomerCare::where('status', true)->get(),
            'configuration' => Configuration::orderBy('created_at')->first(),
            'data'          => $data
        ]);
    }

    public function journal(Request $request){
        $data = ProsidingNaskah::findOrFail($request->id);
        HomeController::meta($data->judul);

        return view('client.screen.journal-detail', [
            'data' => $data
        ]);

    }

    public function page($slug){
        $data = PageWeb::where('slug', $slug)->where('status', true)->first();
        HomeController::meta($data->title);

        return view('client.screen.page-detail', [
            'data'          => $data,
            'popular'       => PagesController::popularArticle(),
        ]);

    }


}
