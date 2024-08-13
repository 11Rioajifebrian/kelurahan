@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit RT</h1>
    <form action="{{ route('rt.update', $rt->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="no_rt" class="form-label">No RT</label>
            <input type="text" class="form-control" id="no_rt" name="no_rt" value="{{ $rt->no_rt }}" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $rt->alamat }}" required>
        </div>
        <div class="mb-3">
            <label for="no_hp" class="form-label">No HP</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $rt->no_hp }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection