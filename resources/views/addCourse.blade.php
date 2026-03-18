@extends('layout.layout')

@section('title','Add a course')

@section('content')

    <form action="/courses" method="POST">
        @csrf

        <div>
            <label for="title">Title</label>
            <input type="text" name="title" placeholder="Title">
        </div>

        <div>
            <label for="description">Description</label>
            <textarea name="description" placeholder="Description"></textarea>
        </div>

        <div>
            <label>
                <input type="checkbox" name="active" value="1">
                Active
            </label>     
        </div>

        <div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>

        <button type="submit">Create Course</button>
    </form>

@endsection