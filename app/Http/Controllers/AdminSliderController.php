<?php
namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminSliderController extends Controller
{
    public function index() {
        $sliders = Slider::all();
        return view('admin.admin-slider', compact('sliders'));
    }

    public function store(Request $request) {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:10240',
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '.' . $file->getClientOriginalExtension();

            if (!Storage::exists('slider')) {
                Storage::makeDirectory('slider');
            }

            $path = Storage::putFileAs('slider', $file, $filename);

            if (!$path) {
                return back()->with('error', 'Gagal menyimpan file ke storage.');
            }

            Slider::create(['gambar' => $filename]);

            return back()->with('success', 'Gambar slider berhasil ditambahkan!');
        }

        return back()->with('error', 'Tidak ada file ditemukan.');
    }

    public function update(Request $request, $id) {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:10240',
        ]);

        $slider = Slider::findOrFail($id);

        if (Storage::exists('slider/' . $slider->gambar)) {
            Storage::delete('slider/' . $slider->gambar);
        }

        $file = $request->file('gambar');
        $filename = time() . '.' . $file->getClientOriginalExtension();

        Storage::putFileAs('slider', $file, $filename);

        $slider->update(['gambar' => $filename]);

        return redirect()->route('admin.slider.index')->with('success', 'Gambar slider berhasil diperbarui!');
    }

    public function destroy($id) {
        $slider = Slider::findOrFail($id);

        if (Storage::exists('slider/' . $slider->gambar)) {
            Storage::delete('slider/' . $slider->gambar);
        }

        $slider->delete();

        return back()->with('success', 'Gambar slider berhasil dihapus!');
    }
}
