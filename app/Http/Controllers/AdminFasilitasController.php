<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FasilitasProgram;
use Illuminate\Support\Facades\Storage;

class AdminFasilitasController extends Controller
{
    public function index()
    {
        $fasilitas = FasilitasProgram::all();
        return view('admin.admin-fasilitas', compact('fasilitas'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'img' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $validated['img'] = $request->file('img')->store('fasilitas', 'public');

        FasilitasProgram::create($validated);

        return redirect()->route('admin.fasilitas.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $editProgram = FasilitasProgram::findOrFail($id);
        $fasilitas = FasilitasProgram::all();
        return view('admin.admin-fasilitas', compact('editProgram', 'fasilitas'));
    }


    public function update(Request $request, $id)
    {
        $data = FasilitasProgram::findOrFail($id);
        $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'img' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('img')) {
            Storage::disk('public')->delete($data->img);
            $data->img = $request->file('img')->store('fasilitas', 'public');
        }

        $data->title = $request->title;
        $data->desc = $request->desc;
        $data->save();
        
        return redirect()->route('admin.fasilitas.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        $data = FasilitasProgram::findOrFail($id);
        Storage::disk('public')->delete($data->img);
        $data->delete();

        return redirect()->route('admin.fasilitas.index')->with('success', 'Data berhasil dihapus');
    }
}
