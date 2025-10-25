@extends('layouts.master')

@section('title', 'Edit Student')

@section('content')
    <h3 class="mb-4 text-primary">Edit Student</h3>
    <form action="{{ route('students.update', $students->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $students->name }}" required>
        </div>

        <div class="mb-3">
            <label>Father Name</label>
            <input type="text" name="fatherName" class="form-control" value="{{ $students->fatherName }}" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $students->email }}" required>
        </div>

        <div class="mb-3">
            <label>Department</label>
            <input type="text" name="depart" class="form-control" value="{{ $students->depart }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update Student</button>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
