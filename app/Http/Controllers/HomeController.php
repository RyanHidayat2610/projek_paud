<?php

// app/Http/Controllers/HomeController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramHome;
use App\Models\KegiatanHome;

class HomeController extends Controller
{
    public function index()
    {
        $programs = ProgramHome::all();
        $kegiatans = KegiatanHome::all();

        return view('home', compact('programs', 'kegiatans'));
    }
}
