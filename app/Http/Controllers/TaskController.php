<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index(){
        return Task::All();
    }
    
    /*Getting one*/
    public function show(Task $task){
        return $task;
    }
         
    /*Creating one*/
    public function store(Request $request){
        $task = Task::create($request->all());
        
        return response()->json($task, 201/*Object created successfuly*/);
    }
    
    /*Updating one*/
    public function update(Request $request, Task $task){
        $task->update($request->all());
    
        return response()->json($task, 200/*Success*/);
    }
    
    /*Delete one*/
    public function delete(Request $request, Task $task){
        $task->delete();
    
        return response()->json(null, 204/*No content retun, Success*/);
    }
}
