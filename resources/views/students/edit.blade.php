@extends('layouts.app')

@section('content')
    <h2>Edit Student</h2>
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $student->name }}" required>
        <input type="email" name="email" value="{{ $student->email }}" required>
        <select name="course" required>
            <option value="">Select Course</option>
            <option value="Computer Science" {{ $student->course == 'Computer Science' ? 'selected' : '' }}>Computer Science</option>
            <option value="Information Technology" {{ $student->course == 'Information Technology' ? 'selected' : '' }}>Information Technology</option>
            <option value="Engineering" {{ $student->course == 'Engineering' ? 'selected' : '' }}>Engineering</option>
            <option value="Business Administration" {{ $student->course == 'Business Administration' ? 'selected' : '' }}>Business Administration</option>
        </select>
        <select name="year_level" required>
            <option value="">Select Year Level</option>
            <option value="1" {{ $student->year_level == 1 ? 'selected' : '' }}>1st Year</option>
            <option value="2" {{ $student->year_level == 2 ? 'selected' : '' }}>2nd Year</option>
            <option value="3" {{ $student->year_level == 3 ? 'selected' : '' }}>3rd Year</option>
            <option value="4" {{ $student->year_level == 4 ? 'selected' : '' }}>4th Year</option>
        </select>
        <input type="submit" value="Update Student">
    </form>
    <a href="{{ route('students.index') }}">Back to Student List</a>
@endsection
