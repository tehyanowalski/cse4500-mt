@extends('adminlte::page')

@section('title', 'Manufacture')

@section('content_header')
    <h1>Manufacture</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>Brand</th><th style="width: 40px">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($manufacture AS $manufacture)
        <tr>
          <td>{{ $manufacture->id }}</td>
          <td>{{ $manufacture->name }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('manufacture.show',['manufacture'=>$manufacture->id]) }}">View</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('manufacture.create') }} " class="btn btn-primary" >Create</a>
@stop
