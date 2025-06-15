<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use Illuminate\Support\Facades\Storage;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = Guru::all();
        return view('admin.admin-guru', compact('gurus'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'jenis_guru' => 'required',
            'riwayat_sekolah' => 'required',
            'hobi' => 'required',
            'motivasi' => 'required',
            'foto_profile' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('foto_profile')) {
            $validated['foto_profile'] = $request->file('foto_profile')->store('foto_guru', 'public');
        }

        Guru::create($validated);
        return redirect()->route('guru.index')->with('success', 'Data guru berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $guru = Guru::findOrFail($id);
        $gurus = Guru::all();
        return view('admin.admin-guru', compact('guru', 'gurus'));
    }

    public function update(Request $request, $id)
    {
        $guru = Guru::findOrFail($id);
        $validated = $request->validate([
            'nama' => 'required',
            'jenis_guru' => 'required',
            'riwayat_sekolah' => 'required',
            'hobi' => 'required',
            'motivasi' => 'required',
            'foto_profile' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('foto_profile')) {
            if ($guru->foto_profile) {
                Storage::disk('public')->delete($guru->foto_profile);
            }
            $validated['foto_profile'] = $request->file('foto_profile')->store('foto_guru', 'public');
        }

        $guru->update($validated);
        return redirect()->route('guru.index')->with('success', 'Data guru berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);
        if ($guru->foto_profile) {
            Storage::disk('public')->delete($guru->foto_profile);
        }
        $guru->delete();

        return redirect()->route('guru.index')->with('success', 'Data guru berhasil dihapus.');
    }

    public function showToUser()
    {
        $gurus = Guru::all();
        return view('about', compact('gurus'));
    }
}
