@extends('layouts.app')

@section('content')
    <h1>Edit Program Studi</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('study_programs.update', $study_program) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nama:</label>
        <input type="text" name="name" value="{{ old('name', $study_program->name) }}" required>

        <label for="faculty_id">Fakultas:</label>
        <select name="faculty_id" required>
            @foreach($faculties as $faculty)
                <option value="{{ $faculty->id }}" {{ $faculty->id == $study_program->faculty_id ? 'selected' : '' }}>{{ $faculty->name }}</option>
            @endforeach
        </select>

        <label for="degree_level">Tingkat Gelar:</label>
        <input type="text" name="degree_level" value="{{ old('degree_level', $study_program->degree_level) }}" required>

        <label for="accreditation_status">Status Akreditasi:</label>
        <input type="text" name="accreditation_status" value="{{ old('accreditation_status', $study_program->accreditation_status) }}" required>

        <label for="description">Deskripsi:</label>
        <textarea name="description">{{ old('description', $study_program->description) }}</textarea>

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ old('email', $study_program->email) }}" required>

        <button type="submit">Perbarui Program Studi</button>
    </form>
@endsection
