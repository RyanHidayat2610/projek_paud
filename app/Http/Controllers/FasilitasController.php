<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FasilitasProgram;

class FasilitasController extends Controller
{
    public function index()
    {
        $programs = FasilitasProgram::all();
        return view('fasilitas', compact('programs'));
    }
}
