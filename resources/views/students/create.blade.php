@extends('layouts.app')

@section('content')
    <h2>Add Student</h2>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <select name="course" required>
            <option value="">Select Course</option>
            <option value="ACT">ACT</option>
            <option value="BSIS">BSIS</option>
            <option value="BSA/BSAIS">BSA/BSAIS</option>
            <option value="BAB">BAB</option>
        </select>
        <select name="year_level" required>
            <option value="">Select Year Level</option>
            <option value="1">1st Year</option>
            <option value="2">2nd Year</option>
            <option value="3">3rd Year</option>
            <option value="4">4th Year</option>
        </select>
        <input type="submit" value="Add Student">
    </form>
    <a href="{{ route('students.index') }}">Back to Student List</a>
@endsection
