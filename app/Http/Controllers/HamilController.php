<?php

namespace App\Http\Controllers;

use App\Models\Hamil;
use Illuminate\Http\Request;

class HamilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hamils = Hamil::latest()->get();

        return view('admin.hamil', compact('hamils'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create-hamil');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|min:3',
            'nik' => 'required|unique:hamils,nik',
            'umur' => 'required|numeric',
            'nama_suami' => 'required|string',
            'alamat' => 'required|string',
            'no_hp' => 'required',
            'gpa' => 'required|numeric',
            'jarak_kehamilan' => 'required|numeric',
            'tinggi_fundus' => 'required|numeric',
            'hpht' => 'required|numeric',
            'tp' => 'required|numeric',
            'uk' => 'required|numeric',
            'tb' => 'required|numeric',
            'bb' => 'required|numeric',
            'td' => 'required|numeric',
            'lila' => 'required|numeric',
            'djj' => 'required|numeric',
            'tt' => 'nullable|numeric',
            'hb' => 'nullable|numeric',
            'pro' => 'nullable|numeric',
            'glu' => 'nullable|numeric',
            'keluhan' => 'required|string',
            'terapi' => 'required|string',
        ]);

        // dd($request->all());

        $hamil = new Hamil();
        $hamil->nama = $request->nama;
        $hamil->nik = $request->nik;
        $hamil->umur = $request->umur;
        $hamil->nama_suami = $request->nama_suami;
        $hamil->alamat = $request->alamat;
        $hamil->no_hp = $request->no_hp;
        $hamil->gpa = $request->gpa;
        $hamil->jarak_kehamilan = $request->jarak_kehamilan;
        $hamil->hpht = $request->hpht;
        $hamil->tp = $request->tp;
        $hamil->uk = $request->uk;
        $hamil->tb = $request->tb;
        $hamil->bb = $request->bb;
        $hamil->td = $request->td;
        $hamil->lila = $request->lila;
        $hamil->tinggi_fundus = $request->tinggi_fundus;
        $hamil->djj = $request->djj;
        $hamil->tt = $request->tt;
        $hamil->hb = $request->hb;
        $hamil->pro = $request->pro;
        $hamil->glu = $request->glu;
        $hamil->keluhan = $request->keluhan;
        $hamil->terapi = $request->terapi;
        $hamil->save();

        return redirect()->route('hamil.index')->with('success', 'Data Berhasil Disimpan.');
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
        $hamil = Hamil::where('nik', $id)->first();

        // dd($hamil);

        return view('admin.edit-hamil', compact('hamil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required|string|min:3',
            'umur' => 'required|numeric',
            'nama_suami' => 'required|string',
            'alamat' => 'required|string',
            'no_hp' => 'required',
            'gpa' => 'required|numeric',
            'jarak_kehamilan' => 'required|numeric',
            'tinggi_fundus' => 'required|numeric',
            'hpht' => 'required|numeric',
            'tp' => 'required|numeric',
            'uk' => 'required|numeric',
            'tb' => 'required|numeric',
            'bb' => 'required|numeric',
            'td' => 'required|numeric',
            'lila' => 'required|numeric',
            'djj' => 'required|numeric',
            'tt' => 'nullable|numeric',
            'hb' => 'nullable|numeric',
            'pro' => 'nullable|numeric',
            'glu' => 'nullable|numeric',
            'keluhan' => 'required|string',
            'terapi' => 'required|string',
        ]);

        // dd($request->all());

        $hamil = Hamil::find($id);

        $hamil->update($validated);

        return redirect()->route('hamil.index')->with('success', 'Berhasil Merubah Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hamil = Hamil::find($id);

        $hamil->delete();

        return redirect()->route('hamil.index')->with('success', 'Data berhasil Dihapus');
    }
}
