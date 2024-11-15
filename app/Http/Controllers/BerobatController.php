<?php

namespace App\Http\Controllers;

use App\Models\Berobat;
use Illuminate\Http\Request;

class BerobatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berobats = Berobat::all();

        return view('admin.berobat', compact('berobats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create-berobat');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'nama' => 'required|string',
            'umur' => 'required|integer',
            'alamat' => 'required',
            'keluhan' => 'required',
            'pemeriksaan_fisik' => 'required',
            'terapi' => 'required',
            'keterangan' => 'required',
        ], [
            'nama.required' => 'Nama wajib diisi',
            'nama.string' => 'Nama harus berupa huruf',
            'umur.required' => 'Umur wajib diisi',
            'alamat.required' => 'Alamat wajib diisi',
            'keluhan.required' => 'Keluhan wajib diisi',
            'pemeriksaan_fisik.required' => 'Fisik wajib diisi',
            'terapi.required' => 'Terapi wajib diisi',
            'keterangan.required' => 'Keterangan wajib diisi',
        ]);

        // dd($validated);

        $berobat = new Berobat();
        $berobat->nama = $validated['nama'];
        $berobat->umur = $validated['umur'];
        $berobat->alamat = $validated['alamat'];
        $berobat->keluhan = $validated['keluhan'];
        $berobat->pemeriksaan_fisik = $validated['pemeriksaan_fisik'];
        $berobat->terapi = $validated['terapi'];
        $berobat->keterangan = $validated['keterangan'];
        $berobat->save();

        return redirect()->route('berobat.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $berobat = Berobat::find($id);

        return view('admin.edit-berobat', compact('berobat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required|string',
            'umur' => 'required|integer',
            'alamat' => 'required',
            'keluhan' => 'required',
            'pemeriksaan_fisik' => 'required',
            'terapi' => 'required',
            'keterangan' => 'required',
        ], [
            'nama.required' => 'Nama wajib diisi',
            'umur.required' => 'Umur wajib diisi',
            'alamat.required' => 'Alamat wajib diisi',
            'keluhan.required' => 'Keluhan wajib diisi',
            'pemeriksaan_fisik.required' => 'Fisik wajib diisi',
            'terapi.required' => 'Terapi wajib diisi',
            'keterangan.required' => 'Keterangan wajib diisi',
        ]);

        $berobat = Berobat::find($id);

        $berobat->update($validated);

        return redirect()->route('berobat.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $berobat = Berobat::find($id);

        $berobat->delete();

        return redirect()->route('berobat.index')->with('success', 'Berhasil Menghapus Data');
    }
}
