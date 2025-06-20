<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\KegiatanAbout;

class PageController extends Controller
{
    public function about()
    {
        $gurus = Guru::all();
        $kegiatan_about = KegiatanAbout::all();
        return view('about', compact('gurus', 'kegiatan_about'));
    }
}
