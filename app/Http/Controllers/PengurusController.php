<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use Illuminate\Http\Request;

class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengurus = Pengurus::all();
        return view('pengurus.index', compact('pengurus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pengurus = Pengurus::all();
        return view('pengurus.index', compact('pengurus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Pengurus::create($request->all());
        return redirect()->route('pengurus')->with('success', 'Data Pengurus Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pengurus = Pengurus::findOrFail($id);
        return view('pengurus.show', compact('pengurus'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pengurus = Pengurus::findOrFail($id);
        return view('pengurus.edit', compact('pengurus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pengurus = Pengurus::findOrFail($id);
        $pengurus->update($request->all());
        return redirect()->route('pengurus')->with('success', 'Data Pengurus Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pengurus = Pengurus::findOrFail($id);
        $pengurus->delete();
        return redirect()->route('pengurus')->with('success', 'Data Pengurus Berhasil Dihapus');
    }
}
