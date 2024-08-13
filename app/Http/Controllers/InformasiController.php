<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function index()
    {
        $informasi = Informasi::all();
        return view('informasi.index', compact('informasi'));
    }

    public function create()
    {
        return view('informasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'tanggal_informasi' => 'required|date',
            'deskripsi' => 'required|string',
        ]);

        Informasi::create($request->all());

        return redirect()->route('informasi.index')
            ->with('success', 'Informasi berhasil ditambahkan.');
    }

    public function show(Informasi $informasi)
    {
        return view('informasi.show', compact('informasi'));
    }

    public function edit(Informasi $informasi)
    {
        return view('informasi.edit', compact('informasi'));
    }

    public function update(Request $request, Informasi $informasi)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'tanggal_informasi' => 'required|date',
            'deskripsi' => 'required|string',
        ]);

        $informasi->update($request->all());

        return redirect()->route('informasi.index')
            ->with('success', 'Informasi berhasil diperbarui.');
    }

    public function destroy(Informasi $informasi)
    {
        $informasi->delete();

        return redirect()->route('informasi.index')
            ->with('success', 'Informasi berhasil dihapus.');
    }
}
