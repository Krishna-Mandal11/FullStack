@extends('layouts.master')

@section('content') 
    <div class="d-flex justify-content-between">
        <h2>Student List</h2>
        <a href="index.php?page=create" class="btn btn-primary">Add New Student</a>
    </div>
    
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Name</th><th>Email</th><th>Course</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $s) 
                <tr>
                    <td>{{ $s->name }}</td> 
                    <td>{{ $s->email }}</td>
                    <td>{{ $s->course }}</td>
                    <td>
                        <a href="index.php?page=edit&id={{ $s->id }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="index.php?page=delete&id={{ $s->id }}" class="btn btn-sm btn-danger" onclick="return confirm('Delete this?')">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection