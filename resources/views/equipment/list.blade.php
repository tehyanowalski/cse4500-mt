@extends('adminlte::page')

@section('title', 'Equipment')

@section('content_header')
    <h1>Equipment</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered sortable">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>Name</th><th style="width: 40px">Specs</th><th style="width: 40px">Category</th><th style="width: 40px">Manufacturer ID</th>
        </tr>
      </thead>
      <tbody>
        @foreach($equipment AS $equipment)
        <tr>
          <td>{{ $equipment->id }}</td>
          <td>{{ $equipment->name }}</td>
          <td>{{ $equipment->price }}</td>
          <td>{{ $equipment->category }}</td>
          <td>{{ $equipment->manufacture_id }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('equipment.show',['equipment'=>$equipment->id]) }}" style="float:right;">View</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('equipment.create') }} " class="btn btn-primary" >Create</a>



@stop
