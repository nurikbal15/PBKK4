@extends('layouts.app')

@section('content')
    <h1>Tambah Fakultas</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('faculty.store') }}" method="POST">
        @csrf
        <label for="name">Nama:</label>
        <input type="text" name="name" value="{{ old('name') }}" required>

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ old('email') }}" required>

        <label for="dean">Dekan:</label>
        <input type="text" name="dean" value="{{ old('dean') }}" required>

        <label for="description">Deskripsi:</label>
        <textarea name="description">{{ old('description') }}</textarea>

        <button type="submit">Tambah Fakultas</button>
    </form>
@endsection
