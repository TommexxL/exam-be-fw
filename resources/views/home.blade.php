@extends('layout.layout')

@section('title','The index')

@section('content')

    <h2>Courses</h2>

    @if (session('success'))
            <p>{{ session('success') }}</p>
    @endif

    @foreach ($courses as $course)
        <div>
            <tr>
                <td>{{ $course->title }}</td>
                <td>{{ $course->description }}</td>
                <td>Status: {{ $course->active ? 'Active' : 'Inactive' }}</td>
            </tr>
        </div>
    @endforeach

@endsection