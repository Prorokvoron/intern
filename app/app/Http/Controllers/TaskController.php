<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Http\Resources\TaskIndexResourceCollection;
use App\Http\Resources\TaskResourceShow;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function show(Task $task)
    {
        return new TaskResourceShow($task);
    }

    public function index(Task $task)
    {
        $task = Task::all();
        return new TaskIndexResourceCollection($task);
    }

    public function delete(Task $task)
    {
        return Task::findOrFail($task->id)->delete();
    }

    public function update(Task $task, UpdateTaskRequest $updateTaskRequest)
    {
        $input = $updateTaskRequest->validated();
        $task = Task::findOrFail($task->id);
        $task->update($input);
        return $task->fresh();
    }

    public function store(TaskRequest $taskRequest)
    {
        return Task::create($taskRequest->validated());
    }


}
