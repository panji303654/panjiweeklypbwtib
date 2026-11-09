@extends('layouts.main')

@section('content')
    <div class="container mt-4">
        <div class="text-center mb-4">
            <h1>{{ $singlenews->judul }}</h1>
            <h5 class="text-muted">Penulis: {{ $singlenews->penulis }}</h5>
            <small class="text-muted">{{ $singlenews->created_at?->format('d M Y') }}</small>
        </div>

        <div class="text-justify">
            <p>{{ $singlenews->konten }}</p>
        </div>

        <a href="{{ route('berita.index') }}">Kembali</a>
    </div>
@endsection