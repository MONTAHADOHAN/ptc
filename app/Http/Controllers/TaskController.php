<?php

// app/Http/Controllers/TaskController.php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // عرض جميع المهام
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    // عرض صفحة إضافة مهمة جديدة
    public function create()
    {
        return view('tasks.tasks.create');
    }

    // تخزين بيانات المهمة الجديدة
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Task::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
    }

    // عرض صفحة تعديل المهمة
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    // تحديث بيانات المهمة
    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $task->update([
            'title' => $validated['title'],
            'description' => $validated['description'],
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully.');
    }

    // حذف المهمة
  
    public function destroy($id)
        {
            $task = Task::findOrFail($id);
            $task->delete();
            return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');
        }

        public function show($id)
{
    $task = Task::findOrFail($id);  // البحث عن المهمة بواسطة الـ id
    return view('tasks.show', compact('task'));  // تمرير المهمة إلى الواجهة
}

}
