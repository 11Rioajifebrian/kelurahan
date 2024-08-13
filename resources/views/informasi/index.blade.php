@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Informasi</h1>
    <a href="{{ route('informasi.create') }}" class="btn btn-primary">Add New Informasi</a>
    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif
    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Tanggal Informasi</th>
                <th>Deskripsi</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($informasi as $info)
            <tr>
                <td>{{ $info->id_informasi }}</td>
                <td>{{ $info->judul }}</td>
                <td>{{ $info->tanggal_informasi }}</td>
                <td>{{ $info->deskripsi }}</td>
                <td>
                    <a href="{{ route('informasi.show', $info->id_informasi) }}" class="btn btn-info">View</a>
                    <a href="{{ route('informasi.edit', $info->id_informasi) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('informasi.destroy', $info->id_informasi) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
