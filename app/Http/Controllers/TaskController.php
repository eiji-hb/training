<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
  public function index()
  {
    return view('tasks.index');
  }
  public function create()
  {
    return view('tasks.create');
  }
  public function store(Request $request)
  {

  }
  public function show(Task $task)
  {

  }
  public function edit(Task $task)
  {
      //
  }
  public function update(Request $request, Task $task)
  {
      //
  }
  public function destroy(Task $task)
  {
      //
  }
}
