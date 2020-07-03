<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
class TaskController extends Controller
{
  public function index()
  {
    $tasks = Task::all();
    return view('tasks.index',['tasks' => $tasks]);
  }
  public function create()
  {
    return view('tasks.create');
  }
  public function store(Request $request)
  {
    $task = new Task;
    $task->name = $request->name;
    $task->description = $request->description;
    // dd($task);
    $task->save();

    return redirect('/');
  }
  public function show($id)
  {
    $task = Task::find($id);
    return view('tasks.show',['task'=>$task]);
  }
  public function edit($id)
  {
    $task = Task::find($id);
    return view('tasks.edit',['task'=>$task]);
  }
  public function update(Request $request ,$id)
  {
    $task = Task::find($id);
    $task->name = $request->name;
    $task->description = $request->description;

    $task->save();

    return redirect('/');
  }
  public function destroy($id)
  {
    // dd($id);
    Task::destroy($id);
    return redirect('/');
  }
}
