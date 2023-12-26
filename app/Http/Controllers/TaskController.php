<?php

namespace App\Http\Controllers;


use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function create(Request $req){
        Task::create($req->all());
        
        return redirect()->route('home');
    }

     public function completeTask(Request $request, $id)
    {
        $task = Task::find($id);

        if (!$task) {
            abort(404, 'Task not found');
        }

        $task->completed = true;
        $task->save();

        return back(); // Redirect back to the previous page
    }
}
