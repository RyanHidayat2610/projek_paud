<?php

namespace App\Http\Controllers;

use App\Models\FormulirAnak;
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
        $data = FormulirAnak::all(); 
        return view('admin.admin-pendaftar', [
            'data' => $data,
            'title' => 'Admin Pendaftar'
        ]);

    }

    public function create()
    {
        return view('formulir.create');
    }

public function store(Request $request)
{
 $request->validate([
        'nama' => 'required|string|max:255',
        'tempat_lahir' => 'required',
        'tanggal_lahir' => 'required|date',
        'gender' => 'required',
        'agama' => 'required',
        'hobi' => 'nullable',
        'nama_ayah' => 'required',
        'nama_ibu' => 'required',
        'jarak_rumah' => 'required',
        'foto_akte' => 'file|mimes:jpg,jpeg,png,pdf|max:2048',
        'foto_kk' => 'file|mimes:jpg,jpeg,png,pdf|max:2048',
    ]);

    // Simpan file
    $aktePath = $request->file('foto_akte')->store('uploads/akte', 'public');
    $kkPath = $request->file('foto_kk')->store('uploads/kk', 'public');

    \App\Models\FormulirAnak::create([
        'id_user' => session('user_id'), // ✅ ambil dari session
        'nama' => $request->nama,
        'tempat_lahir' => $request->tempat_lahir,
        'tanggal_lahir' => $request->tanggal_lahir,
        'gender' => $request->gender,
        'agama' => $request->agama,
        'hobi' => $request->hobi,
        'nama_ayah' => $request->nama_ayah,
        'nama_ibu' => $request->nama_ibu,
        'jarak_rumah' => $request->jarak_rumah,
        'foto_akte' => $aktePath,
        'foto_kk' => $kkPath,
    ]);

    return back()->with('success', 'Formulir berhasil dikirim!');
}
    }

