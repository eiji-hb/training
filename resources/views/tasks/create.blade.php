@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        @if ($errors->any())
          <div class="alert alert-danger m-0">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <form method="POST" action="{{route('task.store')}}">
          @csrf
          <div class="form-group mt-1">
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
