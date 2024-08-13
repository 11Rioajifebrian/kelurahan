<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Jabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawais = Pegawai::with('jabatan')->get();
        return view('pegawai.index', compact('pegawais'));
    }

    public function create()
    {
        $jabatans = Jabatan::all();
        return view('pegawai.create', compact('jabatans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required|unique:pegawai,nip|max:20',
            'nama' => 'required|max:50',
            'jabatan_id' => 'nullable|exists:jabatan,id',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($gambar = $request->file('gambar')) {
            $destinationPath = 'gambar/';
            $profileImage = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
            $gambar->move(public_path($destinationPath), $profileImage);
            $input['gambar'] = "$destinationPath$profileImage";
        }

        Pegawai::create($input);
        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil ditambahkan.');
    }

    public function edit(Pegawai $pegawai)
    {
        $jabatans = Jabatan::all();
        return view('pegawai.edit', compact('pegawai', 'jabatans'));
    }

    public function update(Request $request, Pegawai $pegawai)
    {
        $request->validate([
            'nip' => 'required|max:20|unique:pegawai,nip,' . $pegawai->id,
            'nama' => 'required|max:50',
            'jabatan_id' => 'nullable|exists:jabatan,id',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($gambar = $request->file('gambar')) {
            // Hapus gambar lama jika ada
            if ($pegawai->gambar && file_exists(public_path($pegawai->gambar))) {
                unlink(public_path($pegawai->gambar));
            }

            $destinationPath = 'gambar/';
            $profileImage = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
            $gambar->move(public_path($destinationPath), $profileImage);
            $input['gambar'] = "$destinationPath$profileImage";
        } else {
            // Pertahankan gambar lama jika tidak ada gambar baru
            unset($input['gambar']);
        }

        $pegawai->update($input);
        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil diupdate.');
    }

    public function destroy(Pegawai $pegawai)
    {
        // Hapus gambar jika ada
        if ($pegawai->gambar && file_exists(public_path($pegawai->gambar))) {
            unlink(public_path($pegawai->gambar));
        }

        $pegawai->delete();
        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil dihapus.');
    }
}
