<?php

namespace App\Http\Controllers\Admin\Asosiasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Prosiding\Event as ProsidingEvent;
use RobertSeghedi\News\Models\Article;

class AsosiasiController extends Controller
{
    public function info()
    {
        return view('admin.prosiding.info.index');
    }

    public function infoDetail($slug)
    {
        return view('admin.prosiding.info.detail', [
            'data' => Article::where('slug', $slug)->first()
        ]);
    }

    public function seminar()
    {
        return view('admin.prosiding.seminar.index');
    }

    public function seminarDetail($slug)
    {
        return view('admin.event.detail', [
            'data' => ProsidingEvent::where('slug', $slug)->first()
        ]);
    }

    public function sertifikat()
    {
        return view('admin.prosiding.certificate.public-certificate');
    }

    public function prosidingNasional(){
        return view('admin.prosiding.link.index');
    }

    public function template(){
        return view('admin.prosiding.template');
    }
}
