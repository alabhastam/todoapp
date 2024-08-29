<!-- resources/views/tasks/edit.blade.php -->
@extends('layout')

@section('title', 'Edit Task')

@section('content')
    <h1>Edit Task</h1>

    <form action="{{ route('tasks.update', $task) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $task->title) }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control">{{ old('description', $task->description) }}</textarea>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" name="is_completed" class="form-check-input" value="1" {{ $task->is_completed ? 'checked' : '' }}>
            <label class="form-check-label" for="is_completed">Completed</label>
        </div>
        <button type="submit" class="btn btn-primary">Update Task</button>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
