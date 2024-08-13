@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New RT</h1>
    <form action="{{ route('rt.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="no_rt" class="form-label">No RT</label>
            <input type="text" class="form-control" id="no_rt" name="no_rt" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" required>
        </div>
        <div class="mb-3">
            <label for="no_hp" class="form-label">No HP</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection