<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikels = Artikel::all(); // Mengambil semua artikel dari database
        return view('admin.admin-artikel', compact('artikels'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'gambar1' => 'nullable|image|mimes:jpg,jpeg,png|max:10240',
            'gambar2' => 'nullable|image|mimes:jpg,jpeg,png|max:10240',
        ]);

        if ($request->hasFile('gambar1')) {
            $validated['gambar1'] = $request->file('gambar1')->store('artikel_images', 'public');
        }

        if ($request->hasFile('gambar2')) {
            $validated['gambar2'] = $request->file('gambar2')->store('artikel_images', 'public');
        }

        Artikel::create($validated);
        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil ditambahkan.');
    }


    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);
        $artikels = Artikel::all();
        return view('admin.admin-artikel', compact('artikel', 'artikels'));
    }

    public function update(Request $request, Artikel $artikel)
{
    $validated = $request->validate([
        'judul' => 'required',
        'konten' => 'required',
        'gambar1' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'gambar2' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    if ($request->hasFile('gambar1')) {
        if ($artikel->gambar1) {
            \Storage::disk('public')->delete($artikel->gambar1);
        }
        $validated['gambar1'] = $request->file('gambar1')->store('artikel_images', 'public');
    }

    if ($request->hasFile('gambar2')) {
        if ($artikel->gambar2) {
            \Storage::disk('public')->delete($artikel->gambar2);
        }
        $validated['gambar2'] = $request->file('gambar2')->store('artikel_images', 'public');
    }

    $artikel->update($validated);
    return redirect()->route('artikel.index')->with('success', 'Artikel berhasil diperbarui.');
}


    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);
        $artikel->delete();

        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil dihapus!');
    }
}