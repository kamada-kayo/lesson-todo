@extends('layout.app')
@section('content')
    <h2 class="page-header">ToDo編集</h2>
    <form>
      {!! Form::open(['route' => ['todo.update', $todo->id], 'method' => 'PUT']) !!}
        <div class="form-group">
            <input type="text" class="form-control" placeholder="ToDo内容">
        </div>
        <button type="submit" class="btn btn-success pull-right">更新</button>
      {!! Form::close() !!}
    </form>
@endsection