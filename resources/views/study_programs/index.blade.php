@extends('layouts.app')

@section('content')
    <h1>Daftar Program Studi</h1>

    <a href="{{ route('study_programs.create') }}" class="btn btn-primary mb-3">Tambah Program Studi</a>

    @if(session('pesan'))
        <div class="alert alert-success">
            {{ session('pesan') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Fakultas</th>
                <th>Tingkat Gelar</th>
                <th>Status Akreditasi</th>
                <th>Deskripsi</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($study_programs as $study_program)
                <tr>
                    <td>{{ $study_program->name }}</td>
                    <td>{{ $study_program->faculty->name }}</td>
                    <td>{{ $study_program->degree_level }}</td>
                    <td>{{ $study_program->accreditation_status }}</td>
                    <td>{{ $study_program->description }}</td>
                    <td>{{ $study_program->email }}</td>
                    <td>
                        <a href="{{ route('study_programs.show', $study_program) }}" class="btn btn-info">Lihat</a>
                        <a href="{{ route('study_programs.edit', $study_program) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('study_programs.destroy', $study_program) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
