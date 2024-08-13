@extends('layouts.app')

@section('content')
<div class="container">
    <h1>RT Details</h1>
    <div>
        <strong>No RT:</strong> {{ $rt->no_rt }}
    </div>
    <div>
        <strong>Alamat:</strong> {{ $rt->alamat }}
    </div>
    <div>
        <strong>No HP:</strong> {{ $rt->no_hp }}
    </div>
    <a href="{{ route('rt.index') }}" class="btn btn-primary mt-3">Back</a>
</div>
@endsection