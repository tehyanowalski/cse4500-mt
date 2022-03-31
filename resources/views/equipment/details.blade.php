@extends('adminlte::page')

@section('title', 'Equipment')

@section('content_header')
    <h1>Equipment</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <div>
        <div class="h1">
            {{ $equipment->name }}
        </div>
        <dl class="row">
            <dt class="col-sm-3">Price</dt>
            <dd class="col-sm-9">{{ $equipment->price }}</dd>

            <dt class="col-sm-3">Category</dt>
            <dd class="col-sm-9">{{ $equipment->category }}</dd>

            <dt class="col-sm-3">Manufacturer ID</dt>
            <dd class="col-sm-9">{{ $equipment->manufacturer_id }}</dd>
        </dl>
    </div>
@stop
