<?php

namespace App\Http\Controllers;

use App\Models\donasi;
use Illuminate\Http\Request;

class DonasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $donasi = donasi::all();
        return view('donasi.index', compact('donasi'));
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $donasi = donasi::find($id);
        return view('donasi.show', compact('donasi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $donasi = donasi::find($id);
        return view('donasi.edit', compact('donasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $donasi = donasi::find($id);
        $donasi->update($request->all());
        return redirect()->route('donasi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $donasi = donasi::find($id);
        $donasi->delete();
        return redirect()->route('donasi.index');
    }
}
