<?php

namespace App\Http\Controllers;

use App\Models\artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artikel = artikel::all();
        return view('artikel.index', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // File validation
            'tanggal' => 'required',
            'isi' => 'nullable|string', // Allow optional description
        ]);

        if ($request->hasFile('gambar')) {
            $fileName = time() . '.' . $request->gambar->getClientOriginalExtension();
            $filePath = storage_path('public/artikel_images/' . $fileName);
            $request->file('gambar')->storeAs('public/artikel_images', $fileName);
            $validatedData['gambar'] = $fileName; // Save filename in database
        }
        $artikel = new artikel;
        $artikel->fill($validatedData);
        $artikel->save();

        // Flash success message and redirect back
        session()->flash('success', 'Artikel baru berhasil ditambahkan!');

        return redirect()->route('artikel')->with('success', 'Artikel berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $artikel = artikel::find($id);
        return view('artikel.show', compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $artikel = artikel::find($id);
        return view('artikel.edit', compact('artikel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Jangan wajib jika tidak ingin mengganti gambar
            'tanggal' => 'required',
            'isi' => 'nullable|string',
        ]);

        // Temukan artikel berdasarkan ID
        $artikel = Artikel::findOrFail($id);

        // Jika ada gambar baru diunggah, simpan gambar tersebut
        if ($request->hasFile('gambar')) {
            // Generate nama file yang unik
            $imageName = time() . '.' . $request->gambar->getClientOriginalExtension();
            // Simpan gambar ke direktori penyimpanan
            $request->gambar->storeAs('public/artikel_images', $imageName);
            // Hapus gambar lama jika ada
            Storage::delete('public/artikel_images/' . $artikel->gambar);
            // Update data gambar dalam array validasi
            $validatedData['gambar'] = $imageName;
        }

        // Lakukan update data artikel
        $artikel->update($validatedData);

        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil diperbarui');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $artikel = artikel::find($id);
        $artikel->delete();
        return redirect()->route('artikel')->with('success', 'Artikel berhasil dihapus');
    }
}
