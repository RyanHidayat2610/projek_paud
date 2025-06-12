<?php

namespace App\Http\Controllers;

use App\Models\FormulirAnak;
use App\Models\Anak;
use Illuminate\Http\Request;

class FormulirAnakController extends Controller
{   
    public function updateStatus(Request $request, $id)
{
    $anak = FormulirAnak::findOrFail($id);
    $anak->status = $request->status;
    $anak->save();

    return redirect()->back()->with('success', 'Status berhasil diperbarui.');
}

    
    public function DataAnak()
    {
        $data = FormulirAnak::all(); // Ambil semua data anak dari database
        return view('data-anak', compact('data'));
    }


    public function create()
    {
        return view('formulir.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'gender' => 'required|in:Laki-laki,Perempuan',
            'agama' => 'required',
            'hobi' => 'nullable',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'jarak_rumah' => 'required',
            'foto_akte' => 'nullable|mimes:jpg,jpeg,png,pdf|max:10240',
            'foto_kk' => 'nullable|mimes:jpg,jpeg,png,pdf|max:10240',
        ]);

        // Handle file uploads
        if ($request->hasFile('foto_akte')) {
            $validated['foto_akte'] = $request->file('foto_akte')->store('akte', 'public');
        }

        if ($request->hasFile('foto_kk')) {
            $validated['foto_kk'] = $request->file('foto_kk')->store('kk', 'public');
        }

        $saved = FormulirAnak::create($validated);
            if ($saved) {
                return redirect()->back()->with('success', 'Formulir berhasil disimpan.');
            } else {
                \Log::error('Gagal menyimpan data: ', $validated);
                return redirect()->back()->with('error', 'Gagal menyimpan data.');
            }
}
    }

