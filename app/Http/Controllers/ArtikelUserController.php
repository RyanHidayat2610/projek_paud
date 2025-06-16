<?php

namespace App\Http\Controllers;

use App\Models\Artikel;

class ArtikelUserController extends Controller
{
    public function index()
    {
        $artikels = Artikel::latest()->get();
        return view('artikel', compact('artikels'));
    }
}

