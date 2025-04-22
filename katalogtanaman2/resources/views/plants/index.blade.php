@extends('layouts.app')

@section('title', 'Daftar Tanaman')

@section('content')
    <h1 class="text-center mb-4">🌿 Katalog Tanaman</h1>

    <div class="row">
        @foreach ($plants as $plant)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $plant->name }}</h5>
                        <p><strong>Jenis:</strong> {{ $plant->type }}</p>
                        <p><strong>Perawatan:</strong> {{ $plant->care_instructions }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="text-center mt-5">
        <a href="{{ route('plants.create') }}" class="btn btn-primary">Tambah Tanaman</a>
    </div>
@endsection
