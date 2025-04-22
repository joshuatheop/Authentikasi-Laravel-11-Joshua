@extends('layouts.app')

@section('title', 'Tambah Tanaman')

@section('content')
    <h1 class="text-center mb-4">Tambah Tanaman Baru 🌱</h1>

    <form action="/plants" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nama Tanaman</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>

    <div class="mb-3">
        <label for="type" class="form-label">Jenis Tanaman</label>
        <input type="text" class="form-control" id="type" name="type" required>
    </div>

    <div class="mb-3">
        <label for="care_instructions" class="form-label">Perawatan Tanaman</label>
        <input type="text" class="form-control" id="care_instructions" name="care_instructions" required>
    </div>

    <button type="submit" class="btn btn-primary">Simpan Tanaman</button>
</form>


    <div class="mt-4 text-center">
        <a href="/plants" class="btn btn-secondary">Kembali ke Daftar Tanaman</a>
    </div>
@endsection
