@extends('layouts.app')

@section('content')
    <h1>Edit Fakultas</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('faculty.update', $faculty) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nama:</label>
        <input type="text" name="name" value="{{ old('name', $faculty->name) }}" required>

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ old('email', $faculty->email) }}" required>

        <label for="dean">Dekan:</label>
        <input type="text" name="dean" value="{{ old('dean', $faculty->dean) }}" required>

        <label for="description">Deskripsi:</label>
        <textarea name="description">{{ old('description', $faculty->description) }}</textarea>

        <button type="submit">Perbarui Fakultas</button>
    </form>
@endsection
