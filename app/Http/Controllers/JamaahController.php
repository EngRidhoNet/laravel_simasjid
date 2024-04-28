<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class JamaahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return view('jamaah.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jamaah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create($request->all());
        return redirect()->route('jamaah')->with('success', 'Data Jamaah Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jamaah = User::findOrFail($id);
        return view('jamaah.show', compact('jamaah'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jamaah = User::findOrFail($id);
        return view('jamaah.edit', compact('jamaah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $jamaah = User::findOrFail($id);
        $jamaah->update($request->all());
        return redirect()->route('jamaah')->with('success', 'Data Jamaah Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jamaah = User::findOrFail($id);
        $jamaah->delete();
        return redirect()->route('jamaah')->with('success', 'Data Jamaah Berhasil Dihapus');
    }
}
