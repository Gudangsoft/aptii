<?php

namespace App\Http\Controllers\Admin\Asosiasi;

use App\Http\Controllers\Controller;
use App\Models\Post\PostArticles;
use App\Models\Prosiding\Certificate;
use Illuminate\Http\Request;
use App\Models\Prosiding\Event as ProsidingEvent;
use App\Models\User;
use RobertSeghedi\News\Models\Article;

class AsosiasiController extends Controller
{
    public function info()
    {
        return view('admin.asosiasi.info.index');
    }

    public function infoDetail($slug)
    {
        return view('admin.asosiasi.info.detail', [
            'data' => PostArticles::where('slug', $slug)->first()
        ]);
    }

    public function seminar()
    {
        return view('admin.asosiasi.seminar.index');
    }

    public function seminarDetail($slug)
    {
        return view('admin.event.detail', [
            'data' => ProsidingEvent::where('slug', $slug)->first()
        ]);
    }

    public function sertifikat()
    {
        return view('admin.asosiasi.certificate.public-certificate');
    }

    public function sertifikatDetail($id)
    {
        return view('admin.asosiasi.certificate.detail', [
            'users' => User::where('status', true)->get(),
            'data' => Certificate::findOrFail($id)
        ]);
    }

    public function prosidingNasional(){
        return view('admin.asosiasi.link.index');
    }

    public function template(){
        return view('admin.asosiasi.template');
    }
}
