@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Pegawai Details</h1>
    <div class="form-group">
        <label for="nip">NIP</label>
        <input type="text" class="form-control" id="nip" name="nip" value="{{ $pegawai->nip }}" readonly>
    </div>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{ $pegawai->nama }}" readonly>
    </div>
    <div class="form-group">
        <label for="jabatan">Jabatan</label>
        <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $pegawai->jabatan ? $pegawai->jabatan->jabatan : 'N/A' }}" readonly>
    </div>
    <a href="{{ route('pegawai.index') }}" class="btn btn-primary">Back</a>
</div>
@endsection