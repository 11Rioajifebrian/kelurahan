@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Pegawai</h1>

    <form action="{{ route('pegawai.update', $pegawai->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nip" class="form-label">NIP</label>
            <input type="text" class="form-control" id="nip" name="nip" value="{{ old('nip', $pegawai->nip) }}" required>
        </div>

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $pegawai->nama) }}" required>
        </div>

        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <select class="form-control" id="jabatan" name="jabatan">
                <option value="">Pilih Jabatan</option>
                @foreach($jabatans as $jabatan)
                <option value="{{ $jabatan->id }}" {{ $pegawai->jabatan == $jabatan->id ? 'selected' : '' }}>{{ $jabatan->nama_jabatan }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="gambar" name="gambar">
            @if($pegawai->gambar)
            <img src="/{{ $pegawai->gambar }}" alt="Gambar Pegawai" class="img-fluid mt-2" width="150">
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('pegawai.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection