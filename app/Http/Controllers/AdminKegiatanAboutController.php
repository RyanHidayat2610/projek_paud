<?php

namespace App\Http\Controllers;

use App\Models\KegiatanAbout;
use Illuminate\Http\Request;

class AdminKegiatanAboutController extends Controller
{
    public function index()
    {
        $kegiatan = KegiatanAbout::all();
        return view('admin.admin-kegiatan-about', compact('kegiatan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpg,jpeg,png,webp|max:10240', // Maksimal 10MB
            'keterangan' => 'required|string|max:255',
        ]);


        $path = $request->file('gambar')->store('kegiatan-about', 'public');

        KegiatanAbout::create([
            'gambar' => $path,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->back()->with('success', 'Kegiatan berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $kegiatan = KegiatanAbout::findOrFail($id);
        $request->validate([
            'keterangan' => 'required|string|max:255',
        ]);

        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('kegiatan-about', 'public');
            $kegiatan->gambar = $path;
        }

        $kegiatan->keterangan = $request->keterangan;
        $kegiatan->save();

        return redirect()->back()->with('success', 'Kegiatan berhasil diperbarui');
    }

    public function destroy($id)
    {
        $kegiatan = KegiatanAbout::findOrFail($id);
        $kegiatan->delete();
        return redirect()->back()->with('success', 'Kegiatan berhasil dihapus');
    }
}

