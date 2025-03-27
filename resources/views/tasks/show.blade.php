<!-- resources/views/tasks/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Task Details</h1>

        <h1>{{ $task->title }}</h1>
        <p>{{ $task->description }}</p>
 
        <div class="card">
            <div class="card-header">
                <h2>{{ $task->title }}</h2>
            </div>
            <div class="card-body">
                <p><strong>Description:</strong></p>
                <p>{{ $task->description }}</p>
                <p><strong>Created At:</strong> {{ $task->created_at->format('Y-m-d H:i:s') }}</p>
                <p><strong>Updated At:</strong> {{ $task->updated_at->format('Y-m-d H:i:s') }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('tasks.index') }}" class="btn btn-primary">Back to Tasks</a>
            </div>
        </div>
    </div>
@endsection
