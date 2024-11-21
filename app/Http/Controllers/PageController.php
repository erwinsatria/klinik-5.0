<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $data = Artikel::latest()->limit(4)->get();
        Carbon::setLocale('id');
        // dd($data);
        return view('landingpage', compact('data'));
    }

    public function artikels()
    {
        $artikels = Artikel::latest()->get();
        // dd($artikels);
        return view('artikel', compact('artikels'));
    }

    public function showArtikel($slug)
    {
        $artikel = Artikel::where('slug', $slug)->get();
        // dd($artikel);
        return view('show-artikel', compact('artikel'));
    }
}
