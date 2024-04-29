<?php

namespace App\Http\Controllers;

use App\Models\Masjid;
use App\Models\keuangan;
use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $keuangan = keuangan::all();
        return view('keuangan.index', compact('keuangan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $masjids = Masjid::all(); // Ambil semua data masjid untuk ditampilkan dalam dropdown

        return view('keuangan.create', compact('masjids'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        keuangan::create($request->all());
        return redirect()->route('keuangan')->with('Success', 'Data keuangan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $keuangan = keuangan::find($id);
        return view('keuangan.show', compact('keuangan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $keuangan = keuangan::find($id);
        return view('keuangan.edit', compact('keuangan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $keuangan = keuangan::find($id);
        $keuangan->update($request->all());
        return redirect()->route('keuangan')->with('Success', 'Data keuangan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $keuangan = keuangan::find($id);
        $keuangan->delete();
        return redirect()->route('keuangan')->with('Success', 'Data keuangan berhasil dihapus');
    }
}
