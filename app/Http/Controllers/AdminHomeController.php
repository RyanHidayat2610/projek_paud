<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramHome;
use App\Models\KegiatanHome;

class AdminHomeController extends Controller
{
    public function index()
    {
        return view('admin.admin-home', [
            'programs' => ProgramHome::all(),
            'kegiatans' => KegiatanHome::all(),
        ]);
    }

    public function storeProgram(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $gambarPath = $request->file('gambar')->store('program', 'public');

        ProgramHome::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'gambar' => $gambarPath,
        ]);

        return redirect()->route('admin.home')->with('success', 'Program berhasil ditambahkan.');
    }

    public function deleteProgram($id)
    {
        $program = ProgramHome::findOrFail($id);
        $program->delete();

        return redirect()->route('admin.home')->with('success', 'Program berhasil dihapus.');
    }

    public function storeKegiatan(Request $request)
    {
        $request->validate([
            'desckegiatan' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $gambarPath = $request->file('gambar')->store('kegiatan', 'public');

        KegiatanHome::create([
            'desckegiatan' => $request->desckegiatan,
            'gambar' => $gambarPath,
        ]);

        return redirect()->route('admin.home')->with('success', 'Kegiatan berhasil ditambahkan.');
    }

    public function deleteKegiatan($id)
    {
        $kegiatan = KegiatanHome::findOrFail($id);
        $kegiatan->delete();

        return redirect()->route('admin.home')->with('success', 'Kegiatan berhasil dihapus.');
    }
}
