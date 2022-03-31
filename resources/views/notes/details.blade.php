@extends('adminlte::page')

@section('title', 'Notes')

@section('content_header')
    <h1>Notes</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <div>
        <div class="h1">
            {{ $notes->equipment_id}}
        </div>
        <dl class="row">

            <dt class="col-sm-3">Services</dt>
            <dd class="col-sm-9">{{ $notes->services}}</dd>

            <dt class="col-sm-3">Software</dt>
            <dd class="col-sm-9">{{ $notes->software }}</dd>
        </dl>
    </div>
@stop
