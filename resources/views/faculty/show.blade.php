@extends('layouts.app')

@section('content')
    <h1>Detail Fakultas</h1>

    <p><strong>Nama:</strong> {{ $faculty->name }}</p>
    <p><strong>Email:</strong> {{ $faculty->email }}</p>
    <p><strong>Dekan:</strong> {{ $faculty->dean }}</p>
    <p><strong>Deskripsi:</strong> {{ $faculty->description }}</p>

    <a href="{{ route('faculty.index') }}" class="btn btn-secondary">Kembali ke Daftar</a>
@endsection
