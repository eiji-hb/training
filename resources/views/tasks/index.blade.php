@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <a href="{{ route('task.create') }}" class="btn btn-primary mr-3">新規作成</a>
        <table class="table">
          <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">description</th>
            <th scope="col">登録日時</th>
            <th scope="col">詳細</th>
            </tr>
          </thead>
          <tbody>
              @foreach($tasks as $task)
            <tr>
              <td>{{ $task->id}}</td>
              <td>{{ $task->name}}</td>
              <td>{{ $task->description}}</td>
              <td>{{ $task->created_at}}</td>
              <td><a href="{{ route('task.show', ['id' => $task->id ]) }}" class="btn btn-primary">詳細</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
