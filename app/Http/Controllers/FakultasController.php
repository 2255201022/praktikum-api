<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    public function index()
    {
        $fakultas = Fakultas::all();
        return view('fakultas.index', compact('fakultas'));
    }

    public function create()
    {
        return view('fakultas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_fakultas' => 'required',
            'kode_fakultas' => 'required|unique:fakultas,kode_fakultas',
        ]);

        Fakultas::create($request->only(['nama_fakultas', 'kode_fakultas']));
        return redirect()->route('fakultas.index')->with('success', 'Data berhasil ditambahkan.');
    }

    // EDIT: terima $id, ambil model sendiri
    public function edit($id)
    {
        $fakultas = Fakultas::findOrFail($id);
        return view('fakultas.edit', compact('fakultas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_fakultas' => 'required',
            'kode_fakultas' => 'required',
        ]);

        $fakultas = Fakultas::findOrFail($id);
        $fakultas->update($request->only(['nama_fakultas', 'kode_fakultas']));

        return redirect()->route('fakultas.index')->with('success', 'Data berhasil diperbarui.');
    }

    // CONFIRM DELETE VIEW
    public function delete($id)
    {
        $fakultas = Fakultas::findOrFail($id);
        return view('fakultas.delete', compact('fakultas'));
    }

    public function destroy($id)
    {
        $fakultas = Fakultas::findOrFail($id);
        $fakultas->delete();
        return redirect()->route('fakultas.index')->with('success', 'Data berhasil dihapus.');
    }
}
