@extends('layouts.app')

@section('content')
<div class="container">
    <h1>RT List</h1>
    <a href="{{ route('rt.create') }}" class="btn btn-primary">Create New RT</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>No RT</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rts as $rt)
            <tr>
                <td>{{ $rt->id }}</td>
                <td>{{ $rt->no_rt }}</td>
                <td>{{ $rt->alamat }}</td>
                <td>{{ $rt->no_hp }}</td>
                <td>
                    <a href="{{ route('rt.show', $rt->id) }}" class="btn btn-info">Show</a>
                    <a href="{{ route('rt.edit', $rt->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('rt.destroy', $rt->id) }}" method="POST" style="display:inline;">
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