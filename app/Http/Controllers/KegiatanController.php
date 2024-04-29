<?php

namespace App\Http\Controllers;

use App\Models\Masjid;
use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kegiatan = Kegiatan::all();
        return view('kegiatan.index', compact('kegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $masjids = Masjid::all(); // Fetch all masjids
        return view('kegiatan.create', compact('masjids'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_masjid' => 'required|integer|exists:table_masjid,id',
            'nama_kegiatan' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal' => 'required|date',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
            'tempat' => 'required|string|max:255',
            'foto_kegiatan' => 'nullable|image|max:2048', // Adjust max file size as needed
        ]);

        // Handle file upload (if any)
        if ($request->hasFile('foto_kegiatan')) {
            $fileName = time() . '.' . $request->foto_kegiatan->getClientOriginalExtension();
            $filePath = storage_path('public/kegiatan_images/' . $fileName);
            $request->file('foto_kegiatan')->storeAs('public/kegiatan_images', $fileName);
            $validatedData['foto_kegiatan'] = $fileName; // Save filename in database
        }

        // Create new Kegiatan instance and save
        $kegiatan = new Kegiatan;
        $kegiatan->fill($validatedData);
        $kegiatan->save();

        // Flash success message and redirect back
        session()->flash('success', 'Kegiatan baru berhasil ditambahkan!');
        return redirect()->route('kegiatan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        return view('kegiatan.show', compact('kegiatan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        $masjids = Masjid::all(); // Fetch all masjids
        return view('kegiatan.edit', compact('kegiatan','masjids'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        $validatedData = $request->validate([
            'id_masjid' =>'required|integer|exists:table_masjid,id',
            'nama_kegiatan' =>'required|string|max:255',
            'deskripsi' =>'required|string',
            'tanggal' =>'required|date',
            'waktu_mulai' =>'required',
            'waktu_selesai' =>'required',
            'tempat' =>'required|string|max:255',
            'foto_kegiatan' => 'nullable|image|max:2048', // Adjust max file size as needed
        ]);

        // Handle file upload (if any)
        if ($request->hasFile('foto_kegiatan')) {
            $fileName = time() . '.' . $request->foto_kegiatan->getClientOriginalExtension();
            $filePath = storage_path('public/kegiatan_images/' . $fileName);
            $request->file('foto_kegiatan')->storeAs('public/kegiatan_images', $fileName);
            $validatedData['foto_kegiatan'] = $fileName; // Save filename in database
        }

        $kegiatan->fill($validatedData);
        $kegiatan->save();

        // Flash success message and redirect back
        session()->flash('success', 'Kegiatan berhasil diperbarui!');
        return redirect()->route('kegiatan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        $kegiatan->delete();

        // Flash success message and redirect back
        session()->flash('success', 'Kegiatan berhasil dihapus!');
        return redirect()->route('kegiatan');
    }
}
