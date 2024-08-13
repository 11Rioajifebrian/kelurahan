@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Jabatan</h1>
    <a href="{{ route('jabatan.create') }}" class="btn btn-primary">Add New Jabatan</a>
    @if (session('success'))
    <div class="alert alert-success mt-3">
        {{ session('success') }}
    </div>
    @endif
    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Jabatan</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jabatans as $jabatan)
            <tr>
                <td>{{ $jabatan->id }}</td>
                <td>{{ $jabatan->nama_jabatan }}</td>
                <td>
                    <a href="{{ route('jabatan.show', $jabatan->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('jabatan.edit', $jabatan->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('jabatan.destroy', $jabatan->id) }}" method="POST" style="display:inline-block;">
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