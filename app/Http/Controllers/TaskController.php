<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::paginate(10);
        return view('backend.task.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTaskRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTaskRequest $request)
    {
        $task = new Task;
        $task->title = $request->title;
        $task->content = $request->content;
        $task->status = false;
        $task->save();

        return redirect('tasks')->with('status', 'New Task added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        $task = Task::find($task->id);
        if ($task) {
            return view('backend.task.edit', compact('task'));
        } else {
            return redirect()->route('tasks.index')->with('error', 'Task not find!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        $task = Task::find($task->id);
        if ($task) {
            return view('backend.task.edit', compact('task'));
        } else {
            return redirect()->route('tasks.index')->with('error', 'Task not find!');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTaskRequest  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        $task->title = $request->title;
        $task->content = $request->content;

        if ($request->status)
            $task->status = true;
        else
            $task->status = false;

        $task->save();

        return redirect('tasks')->with('status', 'New Task added.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task = Task::find($task->id);
        if ($task) {
            Task::destroy($task->id);
            return redirect()->route('tasks.index')->with('success', 'Task deleted successfully');
        } else {
            return redirect()->route('tasks.index')->with('error', 'Task not deleted!');
        }
    }
}
