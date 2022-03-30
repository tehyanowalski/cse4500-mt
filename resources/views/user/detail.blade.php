@extends('adminlte::page')

@section('title', 'User')

@section('content_header')
    <h1>User</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <div>
        <div class="h1">
            {{ $user->fullname }}
        </div>
        <dl class="row">
            <dt class="col-sm-3">Email</dt>
            <dd class="col-sm-9">{{ $user->email }}</dd>

            <dt class="col-sm-3">Phone Number</dt>
            <dd class="col-sm-9">{{ $user->phonenumber }}</dd>
        </dl>
    </div>
    <span style="float:right;">
        <a href="{{ route('user.create') }} " class="btn btn-warning">Update</a>
        <a href="{{ route('user.destroy',['user'=>$user->id]) }}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('submit-form').submit();">
        Delete</a>
        <!-- This is ugly but who even cares anymore -->
        <form id="submit-form" action="{{ route('user.destroy',['user'=>$user->id]) }}" method="POST" class="hidden">
            @csrf
            @method('DELETE')
        </form>
    </span>
  </div>
</div>
@stop
