<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KegiatanHome;
use App\Models\ProgramHome;

class AdminKegiatanController extends Controller
{
    public function edit($id)
    {
        $kegiatan = KegiatanHome::findOrFail($id);
        $kegiatans = KegiatanHome::all();
        $programs = ProgramHome::all();

        return view('admin.admin-home', [
            'editKegiatan' => $kegiatan,
            'kegiatans' => $kegiatans,
            'programs' => $programs,
        ]);
    }

    public function update(Request $request, $id)
    {
        $kegiatan = KegiatanHome::findOrFail($id);

        $request->validate([
            'desckegiatan' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('kegiatan', 'public');
            $kegiatan->gambar = $gambarPath;
        }

        $kegiatan->desckegiatan = $request->desckegiatan;
        $kegiatan->save();

        return redirect()->route('admin.home')->with('success', 'Kegiatan berhasil diperbarui.');
    }

    public function cancel()
    {
        return redirect()->route('admin.home');
    }
}
