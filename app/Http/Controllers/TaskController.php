<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $tasks = $request->user()->tasks()->oldest()->get();
        return view('tasks.index', [
            'tasks' => $tasks,
        ]);
    }

    public function store(TaskRequest $request)
    {
        $request->user()->tasks()->create([
            'name' => $request->name,
        ]);

        return redirect()->route('task.index');
    }

}
