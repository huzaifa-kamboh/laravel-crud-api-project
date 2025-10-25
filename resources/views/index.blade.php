@extends("layouts.master")

@section('title', 'Home')
@section('content')

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session('dlt-success'))
    <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
        {{ session('dlt-success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<!-- @if(session('dlt-success'))
    <div class="alert alert-danger mt-3">
        {{ session('dlt-success') }}
    </div>
@endif -->

<!-- <div class="container mt-5"> -->
    <!-- <h3 class="mb-4 text-danger center">Laravel CRUD</h3> -->
    <h3 class="mb-4 text-primary">All Students</h3>
    <table class="table table-bordered table-hover table-striped">
        <thead class="table-primary">
            <tr>
                <!-- <th>ID</th> -->
                <th>Name</th>
                <th>Father Name</th>
                <th>Email</th>
                <th>Department</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <!-- <td>{{ $student->id }}</td> -->
                <td>{{ $student->name }}</td>
                <td>{{ $student->fatherName }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->depart}}</td>
                <td><a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form></td>
            </tr>
            @endforeach
        </tbody>
    </table>
<!-- </div> -->
@endsection

