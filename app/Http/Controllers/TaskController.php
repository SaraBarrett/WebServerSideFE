<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function returnAllTasksView(){
        $tasksFromDB = $this->getAllTasks();


        return view('tasks.all_tasks', compact('tasksFromDB'));
    }

    private function getAllTasks(){
        $tasks = DB::table('tasks')
        ->join('users', 'users.id','=', 'tasks.user_id')
        ->select('tasks.*', 'users.name as user_name')
        ->get();

        return $tasks;
    }

    public function deleteTask($id){

        DB::table('tasks')
        ->where('id', $id)
        ->delete();

        return back();
    }

    public function viewTask($id){
        $ourTask = DB::table('tasks')
        ->join('users', 'tasks.user_id', 'users.id')
        ->where('tasks.id', $id)
        ->select('tasks.*', 'users.name as user_name')
        ->first();
      
        return view('tasks.view_task', compact('ourTask'));

    }
}
