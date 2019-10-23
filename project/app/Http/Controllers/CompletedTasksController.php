<?php

namespace App\Http\Controllers;

use App\Task;

class CompletedTasksController extends Controller
{
    // store completed task

    public function store (Task $task)
    {
        $task->complete();

        return back();
    }

    public function destroy (Task $task)
    {
        $task->incomplete();

        return back();
    }

    // destroy completed task (mark as incomplete)
}
