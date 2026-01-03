@extends('layouts.app')

@section('content')
<h2 class="mb-4">Layanan Kami</h2>

@auth
@if(auth()->user()->role === 'admin')
    <a href="/services/create" class="btn btn-primary mb-3">Tambah Layanan</a>
@endif
@endauth

<div class="row">
@foreach($services as $s)
    <div class="col-md-4 mb-4">
        <div class="card h-100">

            @if($s->gambar)
                <img src="{{ asset('images/services/'.$s->gambar) }}" class="card-img-top">
            @endif

            <div class="card-body">
                <h5 class="card-title">{{ $s->nama_layanan }}</h5>
                <p class="card-text">{{ $s->deskripsi }}</p>
                <strong>{{ $s->harga }}</strong>
            </div>

            @auth
            @if(auth()->user()->role === 'admin')
            <div class="card-footer text-end">
                <a href="/services/{{ $s->id }}/edit" class="btn btn-sm btn-warning">Edit</a>

                <form action="/services/{{ $s->id }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </form>
            </div>
            @endif
            @endauth

        </div>
    </div>
@endforeach
</div>
@endsection
