<?php

namespace App\Http\Controllers;

use App\Models\Kberencana;
use Illuminate\Http\Request;

class KberencanaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berencanas = Kberencana::latest()->get();
        return view('admin.kb', compact('berencanas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create-kb');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|min:3',
            'nik' => 'required|unique:kberencanas,nik',
            'umur' => 'required|integer',
            'jumlah_anak' => 'required|integer',
            'nama_suami' => 'required',
            'alamat' => 'required',
            'td' => 'required|integer',
            'bb' => 'required|integer',
            'tanggal_kembali' => 'required',
            'keterangan' => 'required',
        ]);

        // dd($validated);

        $data = new Kberencana();
        $data->nama = $validated['nama'];
        $data->nik = $validated['nik'];
        $data->umur = $validated['umur'];
        $data->jumlah_anak = $validated['jumlah_anak'];
        $data->nama_suami = $validated['nama_suami'];
        $data->alamat = $validated['alamat'];
        $data->is_kondom = $request->is_kondom;
        $data->is_pil = $request->is_pil;
        $data->is_suntik_1 = $request->is_suntik_1;
        $data->is_suntik_2 = $request->is_suntik_2;
        $data->is_suntik_3 = $request->is_suntik_3;
        $data->is_implan = $request->is_implan;
        $data->is_iud = $request->is_iud;
        $data->is_mow = $request->is_mow;
        $data->is_mop = $request->is_mop;
        $data->td = $validated['td'];
        $data->bb = $validated['bb'];
        $data->tanggal_kembali = $validated['tanggal_kembali'];
        $data->keterangan = $validated['keterangan'];
        $data->save();

        return redirect()->route('kb.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($nik)
    {
        $berencana = Kberencana::where('nik', $nik)->first();

        // dd($berencana);
        return view('admin.edit-kb', compact('berencana'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'nama' => 'required|string|min:3',
            'umur' => 'required|integer',
            'jumlah_anak' => 'required|integer',
            'nama_suami' => 'required',
            'alamat' => 'required',
            'is_kondom' => 'nullable',
            'is_pil' => 'nullable',
            'is_suntik_1' => 'nullable',
            'is_suntik_2' => 'nullable',
            'is_suntik_3' => 'nullable',
            'is_implan' => 'nullable',
            'is_iud' => 'nullable',
            'is_mow' => 'nullable',
            'is_mop' => 'nullable',
            'td' => 'required|integer',
            'bb' => 'required|integer',
            'tanggal_kembali' => 'required',
            'keterangan' => 'required',
        ]);

        // dd($request->all());

        $berencana = Kberencana::find($id);
        $berencana->nama = $request->nama;
        $berencana->umur = $request->umur;
        $berencana->jumlah_anak = $request->jumlah_anak;
        $berencana->nama_suami = $request->nama_suami;
        $berencana->alamat = $request->alamat;
        $berencana->is_kondom = $request->has('is_kondom') ? 1 : 0;
        $berencana->is_pil = $request->has('is_pil') ? 1 : 0;
        $berencana->is_suntik_1 = $request->has('is_suntik_1') ? 1 : 0;
        $berencana->is_suntik_2 = $request->has('is_suntik_2') ? 1 : 0;
        $berencana->is_suntik_3 = $request->has('is_suntik_3') ? 1 : 0;
        $berencana->is_implan = $request->has('is_implan') ? 1 : 0;
        $berencana->is_iud = $request->has('is_iud') ? 1 : 0;
        $berencana->is_mow = $request->has('is_mow') ? 1 : 0;
        $berencana->is_mop = $request->has('is_mop') ? 1 : 0;
        $berencana->td = $request->td;;
        $berencana->bb = $request->bb;
        $berencana->tanggal_kembali = $request->tanggal_kembali;
        $berencana->keterangan = $request->keterangan;
        $berencana->update();

        return redirect()->route('kb.index')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $berencana = Kberencana::find($id);
        $berencana->delete();

        return redirect()->route('kb.index')->with('success', 'Data Berhasil Dihapus');
    }
}
