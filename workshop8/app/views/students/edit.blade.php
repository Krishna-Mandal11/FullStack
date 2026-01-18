@extends('layouts.master')

@section('content')
    <h2>Edit Student</h2>
    <form action="index.php?page=update&id={{ $student->id }}" method="POST">
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $student->name }}" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $student->email }}" required>
        </div>
        <div class="mb-3">
            <label>Course</label>
            <input type="text" name="course" class="form-control" value="{{ $student->course }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Student</button>
        <a href="index.php" class="btn btn-secondary">Cancel</a>
    </form>
@endsection