@extends('layouts.master')

@section('title', 'Add Student')

@section('content')
    <h3 class="mb-4 text-primary">Add New Student</h3>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Father Name</label>
            <input type="text" name="fatherName" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Department</label>
            <input type="text" name="depart" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Save Student</button>
    </form>
@endsection
