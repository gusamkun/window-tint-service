@extends('layouts.app')

@section('content')
<h2>Tambah Layanan</h2>

<form method="POST" action="/services" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label>Nama Layanan</label>
        <input type="text" name="nama_layanan" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea name="deskripsi" class="form-control" rows="4"></textarea>
    </div>

    <div class="mb-3">
        <label>Harga</label>
        <input type="text" name="harga" class="form-control">
    </div>

    <div class="mb-3">
        <label>Gambar</label>
        <input type="file" name="gambar" class="form-control">
    </div>

    <button class="btn btn-success">Simpan</button>
</form>
@endsection
