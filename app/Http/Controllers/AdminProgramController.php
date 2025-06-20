<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramHome;
use App\Models\KegiatanHome;

class AdminProgramController extends Controller
{
    public function edit($id)
    {
        $program = ProgramHome::findOrFail($id);
        $programs = ProgramHome::all();

        return view('admin.admin-home', [
            'editProgram' => $program,
            'programs' => $programs,
            'kegiatans' => KegiatanHome::all(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $program = ProgramHome::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('program', 'public');
            $program->gambar = $gambarPath;
        }

        $program->title = $request->title;
        $program->desc = $request->desc;
        $program->save();

        return redirect()->route('admin.home')->with('success', 'Program berhasil diperbarui.');
    }

    public function cancel()
    {
        return redirect()->route('admin.home');
    }
}
