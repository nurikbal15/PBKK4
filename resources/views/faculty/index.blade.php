@extends('layouts.app')

@section('content')
    <h1>Daftar Fakultas</h1>

    <a href="{{ route('faculty.create') }}" class="btn btn-primary mb-3">Tambah Fakultas</a>

    @if(session('pesan'))
        <div class="alert alert-success">
            {{ session('pesan') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Dekan</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($faculties as $faculty)
                <tr>
                    <td>{{ $faculty->name }}</td>
                    <td>{{ $faculty->email }}</td>
                    <td>{{ $faculty->dean }}</td>
                    <td>{{ $faculty->description }}</td>
                    <td>
                        <a href="{{ route('faculty.show', $faculty) }}" class="btn btn-info">Lihat</a>
                        <a href="{{ route('faculty.edit', $faculty) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('faculty.destroy', $faculty) }}" method="POST" style="display: inline;">
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
