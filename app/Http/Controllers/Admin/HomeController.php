<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TentangPaud;
use App\Models\Program;
use App\Models\Kegiatan;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    // Tampilkan data di halaman home admin
    public function index()
    {
        $tentang = TentangPaud::first(); // asumsikan hanya 1 row
        $programs = Program::all();
        $kegiatans = Kegiatan::all();

        return view('admin.home', compact('tentang', 'programs', 'kegiatans'));
    }

    // Update Tentang PAUD
    public function updateTentang(Request $request)
    {
        $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
        ]);

        $tentang = TentangPaud::first();
        if(!$tentang){
            $tentang = new TentangPaud();
        }
        $tentang->judul = $request->judul;
        $tentang->deskripsi = $request->deskripsi;
        $tentang->save();

        return redirect()->back()->with('success', 'Tentang PAUD berhasil diperbarui!');
    }

    // CRUD Program (misal update via form sederhana)
    public function updateProgram(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
        ]);

        $program = Program::findOrFail($id);
        $program->judul = $request->judul;
        $program->deskripsi = $request->deskripsi;
        $program->save();

        return redirect()->back()->with('success', 'Program berhasil diperbarui!');
    }

    // CRUD Kegiatan: update judul + upload gambar
    public function updateKegiatan(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string',
            'gambar' => 'nullable|image|max:2048', // max 2MB
        ]);

        $kegiatan = Kegiatan::findOrFail($id);
        $kegiatan->judul = $request->judul;

        if ($request->hasFile('gambar')) {
            // hapus gambar lama jika ada
            if ($kegiatan->gambar && Storage::exists($kegiatan->gambar)) {
                Storage::delete($kegiatan->gambar);
            }
            $path = $request->file('gambar')->store('public/kegiatan');
            $kegiatan->gambar = $path;
        }

        $kegiatan->save();

        return redirect()->back()->with('success', 'Kegiatan berhasil diperbarui!');
    }
}
