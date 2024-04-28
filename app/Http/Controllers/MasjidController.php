<?php

namespace App\Http\Controllers;

use App\Models\Masjid;
use Illuminate\Http\Request;

class MasjidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $masjid = Masjid::all();
        return view('masjid.index', compact('masjid'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('masjid.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_masjid' => 'required|string|max:255',
            'alamat_masjid' => 'required|string|max:255',
            'foto_masjid' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // File validation
            'telepon_masjid' => 'nullable|string|max:255', // Allow optional phone number
            'deskripsi' => 'nullable|string', // Allow optional description
            'email_masjid' => 'nullable|string', // Allow optional
        ]);

        $imageName = time() . '.' . $request->foto_masjid->getClientOriginalExtension(); // Generate unique filename

        $request->foto_masjid->storeAs('public/masjid_images', $imageName); // Store the image in the public/masjid_images directory

        $validatedData['foto_masjid'] = $imageName; // Update the validated data with the stored filename

        Masjid::create($validatedData);

        return redirect()->route('masjid')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $masjid = Masjid::findOrFail($id);
        return view('masjid.show', compact('masjid'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $masjid = Masjid::findOrFail($id);
        return view('masjid.edit', compact('masjid'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $masjid = Masjid::findOrFail($id);
        $masjid->update($request->all());
        return redirect()->route('masjid')->with('success','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $masjid = Masjid::findOrFail($id);
        $masjid->delete();
        return redirect()->route('masjid')->with('success','Data Berhasil Dihapus');
    }
}
