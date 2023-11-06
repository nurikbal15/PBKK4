@extends('layouts.app')

@section('content')
    <h1>Detail Program Studi</h1>

    <p><strong>Nama:</strong> {{ $study_program->name }}</p>
    <p><strong>Fakultas:</strong> {{ $study_program->faculty->name }}</p>
    <p><strong>Tingkat Gelar:</strong> {{ $study_program->degree_level }}</p>
    <p><strong>Status Akreditasi:</strong> {{ $study_program->accreditation_status }}</p>
    <p><strong>Deskripsi:</strong> {{ $study_program->description }}</p>
    <p><strong>Email:</strong> {{ $study_program->email }}</p>

    <a href="{{ route('study_programs.index') }}" class="btn btn-secondary">Kembali ke Daftar</a>
@endsection
