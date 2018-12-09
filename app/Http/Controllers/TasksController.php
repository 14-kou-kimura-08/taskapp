<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    protected $task;

    // Dependency Injection
    public function __construct(Task $task)
    {
        $this->task = $task;
    }

    public function index()
    {
        // 「tasks」データベースにあるデータを全て取得します。
        $tasks = $this->task->all();

        // 上記で指定した変数を$tasksとしてtasks.indexに渡す
        return view('tasks.index', ['tasks' => $tasks]);
    }
}
