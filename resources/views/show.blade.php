@extends('layouts.master')

@section('content')
<div class="container">
    <h2>Student Details</h2>

    <p><strong>Name:</strong> {{ $students->name }}</p>
    <p><strong>Father Name:</strong> {{ $students->fatherName }}</p>
    <p><strong>Email:</strong> {{ $students->email }}</p>
    <p><strong>Department:</strong> {{ $students->depart }}</p>
    <a href="{{ route('students.index') }}">Back to List</a>

</div>
@endsection
