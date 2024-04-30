<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\artikel;
use App\Models\keuangan;
use App\Models\Pengurus;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $artikel = Artikel::all();
        $pengurus = Pengurus::all();
        $user = auth()->user(); // Mendapatkan pengguna yang sedang masuk

        return view('pages.home', compact('artikel', 'pengurus', 'user'));
    }


    public function about(){
        return view('pages.about');
    }

    public function berita(){
        $artikel = Artikel::all();
        return view('pages.berita',compact('artikel'));
    }

    public function keuangan(){
        $keuangan = keuangan::all();
        return view('pages.keuangan', compact('keuangan'));
    }

    public function kegiatan(){
        return view('pages.kegiatan');
    }



}
