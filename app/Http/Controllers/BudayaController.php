<?php

namespace App\Http\Controllers;

use App\Models\Budaya;
use Illuminate\Http\Request;

class BudayaController extends Controller
{
    public function index()
    {
        $budayas = Budaya::all();
        return view('backend.otomotif.index', compact('budayas'));
    }

    public function create()
    {
        return view('backend.budaya.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'lokasi' => 'required',
            'tahun_ditemukan' => 'required',
        ]);

        Budaya::create($request->all());

        return redirect()->intended('/otomotif')
            ->with('success', 'Data Mobil baru telah berhasil disimpan');
    }

    public function edit($id)
    {
        $budaya = Budaya::find($id);
        return view('backend.otomotif.index', compact('budaya'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'lokasi' => 'required',
            'tahun_ditemukan' => 'required',
        ]);

        $budaya = Budaya::find($request->id);
        $budaya->update($request->all());

        return redirect()->intended('/otomotif')
            ->with('success', 'Data Mobil telah berhasil diperbarui');
    }

    public function destroy($id)
    {
        $budaya = Budaya::find($id);
        $budaya->delete();

        return redirect()->intended('/otomotif')
            ->with('success', 'Data Mobil telah berhasil dihapus');
    }
}