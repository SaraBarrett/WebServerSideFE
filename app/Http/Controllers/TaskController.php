<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function returnAllTasksView(){
        return view('tasks.all_tasks');
    }
}
