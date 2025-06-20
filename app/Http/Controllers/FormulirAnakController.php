<?php

namespace App\Http\Controllers;

use App\Models\FormulirAnak;
use App\Models\LoginUser;
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
        return view('admin.admin-pendaftar', [
            'data' => $data,
            'title' => 'Admin Pendaftar'
        ]);

    }


    public function create()
{
    if (!session('user_id')) {
        return redirect('/login')->with('error', 'Silakan login terlebih dahulu untuk mengisi formulir.');
    }

    return view('formulir', ['title' => 'Formulir']);
}

    public function store(Request $request)
    {
        if (!session('user_id')) {
        return redirect('/login')->with('error', 'Silakan login terlebih dahulu.');
    }
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

        // Ambil data user dari session
        $userId = session('user_id');
        $user = LoginUser::find($userId);

        if (!$user) {
            return redirect()->back()->with('error', 'Anda harus login terlebih dahulu.');
        }

        // Tambahkan data user ke validasi
        $validated['user_id'] = $user->id;
        $validated['username'] = $user->username;
        $validated['email'] = $user->email;
        $validated['no_hp'] = $user->no_hp;
        $validated['status'] = 'Menunggu Hasil';
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


        public function destroy($id)
    {
        $anak = FormulirAnak::findOrFail($id);

        // Hapus file akte & kk kalau perlu
        if ($anak->foto_akte) {
            \Storage::disk('public')->delete($anak->foto_akte);
        }
        if ($anak->foto_kk) {
            \Storage::disk('public')->delete($anak->foto_kk);
        }

        $anak->delete();

        return redirect()->back()->with('success', 'Data anak berhasil dihapus.');
    }


    }

