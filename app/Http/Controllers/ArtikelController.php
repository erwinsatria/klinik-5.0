<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Container\Attributes\Storage;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artikels = Artikel::latest()->get();

        return view('admin.artikel', compact('artikels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required',
            'image' => 'required|max:2048'
        ]);



        $artikel = new Artikel();
        $artikel->judul = $request->judul;
        $artikel->deskripsi = $request->deskripsi;
        $artikel->slug = $request->slug;


        if ($request->has('image')) {
            $image = $request->file('image');

            $imageName = time() . '_' . $request->name . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('images', $imageName, 'public');

            $artikel->image = $path;
            $artikel->save();
        };

        return redirect()->route('artikel.index')->with('success', 'Artikel Berhasil Dibuat');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $artikel = Artikel::find($id);
        $artikel->delete();

        return redirect()->route('artikel.index')->with('success', 'Data Berhasil Dihapus');
    }
}
