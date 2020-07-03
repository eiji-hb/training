@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <form method="POST" action="{{route('task.store')}}">
          @csrf
          <div class="form-group">
            <label for="titleInput">タイトル</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="form-group">
            <label for="bodyInput">内容</label>
            <textarea class="form-control" id="bodyInput" rows="3" name="description"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">新規追加</button>
        </form>
      </div>
    </div>
  </div>
@endsection
