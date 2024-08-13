@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Jabatan</h1>

    <form action="{{ route('jabatan.update', $jabatan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama_jabatan" class="form-label">Nama Jabatan</label>
            <input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan" value="{{ old('nama_jabatan', $jabatan->nama_jabatan) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('jabatan.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection