@extends('layout.layout')

@section('title','The index')

@section('content')

    <h2>Courses</h2>

    @if (session('success'))
            <p>{{ session('success') }}</p>
    @endif

<table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; width: 100%;">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>

    @foreach ($courses as $course)
    <!-- who needs styling when ye got... TABLES! -->
    
            <tr>
                <td>{{ $course->title }}</td>
                <td>{{ $course->description }}</td>
                <td>Status: {{ $course->active ? 'Active' : 'Inactive' }}</td>
                <td>
                    <form method="POST" action="{{ route('courses.toggle', $course->id) }}">
                        @csrf
                        @method('PATCH')

                        <button type="submit">
                            Toggle
                        </button>
                    </form>
                </td>
            </tr>
       
    @endforeach
    
    </tbody>
</table>

@endsection