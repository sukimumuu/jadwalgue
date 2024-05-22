<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $data = User::all();
        return view('Auth.index', compact('data'));
    }

    public function home(){
       $array = Task::select('id','date', 'time', 'task','completed')->get();
       // Transformasi setiap elemen dalam koleksi
       $data = $array->map(function ($item) {
           return [
               'id' => $item->id,
               'formatted_time' => Carbon::parse($item->time)->format('H:i'),
               'formatted_date' => Carbon::parse($item->date)->format('F j, Y'),
               'task' => $item->task,
               'completed' => $item->completed,
            ];
        });
        // Kembalikan data menggunakan compact
        $groupTask = [];
        foreach($data as $task){
            $groupTask[$task['formatted_date']][] = $task;
        }
        
        return view('home.index', compact('data','groupTask'));
    }

    public function login($id){
        $data = User::find($id);
        return view('Auth.login', compact('data'));
    }

    public function task(){
        return view('task.add');
    }
}
