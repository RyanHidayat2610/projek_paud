<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Konten;

class KontenController extends Controller
{
    public function index()
    {
        $kontens = Konten::all();
        return view('admin.konten.index', compact('kontens'));
    }

    public function create()
    {
        return view('admin.konten.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'jenis_konten' => 'required',
            'isi_teks' => 'nullable',
            'gambar' => 'nullable|image',
        ]);

        if ($request->hasFile('gambar')) {
            $data['gambar_path'] = $request->file('gambar')->store('images', 'public');
        }

        Konten::create($data);

        return redirect()->route('konten.index')->with('success', 'Konten berhasil ditambahkan.');
    }

    public function edit(Konten $konten)
    {
        return view('admin.konten.edit', compact('konten'));
    }

    public function update(Request $request, Konten $konten)
    {
        $data = $request->validate([
            'jenis_konten' => 'required',
            'isi_teks' => 'nullable',
            'gambar' => 'nullable|image',
        ]);

        if ($request->hasFile('gambar')) {
            $data['gambar_path'] = $request->file('gambar')->store('images', 'public');
        }

        $konten->update($data);

        return redirect()->route('konten.index')->with('success', 'Konten berhasil diperbarui.');
    }

    public function destroy(Konten $konten)
    {
        $konten->delete();
        return redirect()->route('konten.index')->with('success', 'Konten berhasil dihapus.');
    }
}

