<!-- resources/views/tasks/create.blade.php -->
@extends('layout')

@section('title', 'Create Task')

@section('content')
    <h1>Create New Task</h1>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control">{{ old('description') }}</textarea>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" name="is_completed" class="form-check-input" value="1">
            <label class="form-check-label" for="is_completed">Completed</label>
        </div>
        <button type="submit" class="btn btn-primary">Save Task</button>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
