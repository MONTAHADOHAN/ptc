<!-- resources/views/tasks/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tasks List</h1>

        <!-- رابط لإضافة مهمة جديدة -->
        <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">Add New Task</a>

        <!-- عرض جدول المهام -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                        <td>
                            <!-- رابط تعديل المهمة -->
                            <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning">Edit</a>

                            <!-- نموذج حذف المهمة -->
                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>

                            <!-- رابط عرض تفاصيل المهمة -->
                            <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-info">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
