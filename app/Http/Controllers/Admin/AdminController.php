<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    // Tampilkan halaman home admin dengan data dari tentang_paud
   public function index()
{
    $tentang = DB::table('tentang_paud')->first(); // Ambil 1 data
    $kegiatanList = DB::table('kegiatan')->get();  // Ambil semua kegiatan
    return view('admin.home', compact('tentang', 'kegiatanList'));
}

    public function updateTentang(Request $request)
{
    $request->validate([
        'judul' => 'required|string|max:255',
        'deskripsi' => 'required|string'
    ]);

    DB::table('tentang_paud')->update([
        'judul' => $request->judul,
        'deskripsi' => $request->deskripsi
    ]);

    $tentang = DB::table('tentang_paud')->first();
    $kegiatanList = DB::table('kegiatan')->get();

    return view('admin.home', compact('tentang', 'kegiatanList'))
           ->with('success', 'Data Tentang PAUD berhasil diperbarui.');
}

    public function editKegiatan($id)
{
    $tentang = DB::table('tentang_paud')->first();
    $editKegiatan = DB::table('kegiatan')->where('id_kegiatan', $id)->first();
    $kegiatanList = DB::table('kegiatan')->get();

    return view('admin.home', compact('tentang', 'editKegiatan', 'kegiatanList'));
}

public function updateKegiatan(Request $request, $id)
{
    $request->validate([
        'judul' => 'required|string|max:255',
        'gambar.*' => 'image|mimes:jpeg,png,jpg|max:2048',
    ]);

    $data = [
        'judul' => $request->judul,
        'updated_at' => now()
    ];

    if ($request->hasFile('gambar')) {
        $gambarPaths = [];

        foreach ($request->file('gambar') as $file) {
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/kegiatan'), $filename);
            $gambarPaths[] = $filename;
        }
$kegiatanList = DB::table('kegiatan')->get();

        $data['gambar'] = json_encode($gambarPaths);
    }

    DB::table('kegiatan')->where('id_kegiatan', $id)->update($data);

    return redirect()->route('admin.home')->with('success_kegiatan', 'Kegiatan berhasil diperbarui.');
}


    public function store(Request $request)
{
    $request->validate([
        'judul' => 'required|string|max:255',
        'gambar.*' => 'image|mimes:jpeg,png,jpg|max:2048',
    ]);

    $gambarPaths = [];

    if($request->hasfile('gambar')) {
        $files = $request->file('gambar');

        if(count($files) > 5) {
            return back()->with('error', 'Maksimal 5 gambar saja!');
        }

        foreach($files as $file) {
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/kegiatan'), $filename);
            $gambarPaths[] = $filename;
        }
    }
$kegiatanList = DB::table('kegiatan')->get();

    DB::table('kegiatan')->insert([
        'judul' => $request->judul,
        'gambar' => json_encode($gambarPaths),
        'updated_at' => now(),
    ]);

    return redirect()->route('admin.home')->with('success_kegiatan', 'Kegiatan berhasil ditambahkan.');
}

}

