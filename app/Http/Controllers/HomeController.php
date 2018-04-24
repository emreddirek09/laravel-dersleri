<?php

namespace App\Http\Controllers;

use App\haberler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    public function get_deneme()
    {
        $adim=Input::get('adim');
        $soyadim=Input::get('soyadim');
        return view('deneme')->with('adim',$adim)->with('soyadim',$soyadim);

    }

    public function get_form()
    {
        return view('form');
    }

    public function post_form(Request $request)
    {
        $birinci=$request->birinci;
        $ikinci=$request->ikinci;
        $toplam=$birinci*$ikinci;

        return view('form')->with('toplam',$toplam);
    }
    public function get_deneme_isim($isim)
    {
        return view('deneme')->with('isim',$isim);
    }

    public function get_katagori($forum,$php,$fremawork)
    {
        return view('sorular')->with('forum',$forum)->with('php',$php)->with('fremawork',$fremawork);
    }
    public function get_haberler()
    {
        $haberler=haberler::all();
        return view('haberler')->with('haberler',$haberler);
    }
    public function post_haberler(Request $request)
    {
        haberler::create($request->all());
        return 'islem basarili';
    }

}

