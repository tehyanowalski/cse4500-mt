@extends('adminlte::page')

@section('title', 'Manufacturer')

@section('content_header')
    <h1>Manufacturer</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered sortable">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>Name</th><th style="width: 40px">Support Email</th><th style="width: 40px">Support Phone</th><th style="width: 40px">Sales Email</th><th style="width: 40px">Sales Phone Number</th>
        </tr>
      </thead>
      <tbody>
        @foreach($manufacturer AS $manufacturer)
        <tr>
          <td>{{ $manufacturer->id }}</td>
          <td>{{ $manufacturer->name }}</td>
          <td>{{ $manufacturer->tech_email }}</td>
          <td>{{ $manufacturer->tech_phone }}</td>
          <td>{{ $manufacturer->sales_email }}</td>
          <td>{{ $manufacturer->sales_phone }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('manufacturer.show',['manufacturer'=>$manufacturer->id]) }}" style="float:right;">View</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('manufacturer.create') }} " class="btn btn-primary" >Create</a>



@stop
