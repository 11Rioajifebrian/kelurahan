@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Jabatan Details</h1>
    <div class="form-group">
        <label for="jabatan">Jabatan</label>
        <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $jabatan->jabatan }}" readonly>
    </div>
    <a href="{{ route('jabatan.index') }}" class="btn btn-primary">Back</a>
</div>
@endsection