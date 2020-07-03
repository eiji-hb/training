@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <table class="table">
          <tbody>
            <tr>
              <th>id</th>
              <td>{{ $task->id}}</td>
            </tr>
            <tr>
              <th>name</th>
              <td>{{ $task->name}}</td>
            </tr>
            <tr>
              <th>description</th>
              <td>{{ $task->description}}</td>
            </tr>
            <tr>
              <th>登録日時</th>
              <td>{{ $task->created_at}}</td>
            </tr>

          </tbody>
        </table>
            <a href="{{ route('task.edit', ['id' => $task->id ]) }}" class="btn btn-primary mr-3">編集</a>
            <form method="POST" action="{{ route('task.destroy', ['id' => $task->id ])}}" >
              @csrf
              <button type="submit" class="btn btn-danger mt-2">消去</button>
            </form>
      </div>
    </div>
  </div>
@endsection
