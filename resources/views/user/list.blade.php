@extends('adminlte::page')

@section('title', 'User')

@section('content_header')
    <h1>User</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>Task</th><th style="width: 40px">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($user AS $user)
        <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->fullname }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('user.show',['user'=>$user->id]) }}">View</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('user.create') }} " class="btn btn-primary" >Create</a>
@stop
