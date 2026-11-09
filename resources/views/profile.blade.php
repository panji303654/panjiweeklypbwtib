@extends('layouts.main')

@section('content')
    <div class="container mt-4">
        <h1>Halaman Profile</h1>
        <hr>
        {{-- Memanggil variabel yang dikirim dari web.php --}}
        <p><strong>Nama:</strong> {{ $name ?? 'Panji Satria Pratama' }}</p>
        <p><strong>NIM:</strong> {{ $nim ?? '13242520066' }}</p>
        <p><strong>Prodi:</strong> {{ $prodi ?? 'Teknologi Informasi' }}</p>
        <img src="{{ asset('images/bocilkece.jpg') }}" alt="Profile image" width="200" class="img-fluid rounded">
    </div>
@endsection