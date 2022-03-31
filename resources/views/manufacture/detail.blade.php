@extends('adminlte::page')

@section('title', 'Manufacture')

@section('content_header')
    <h1>Manufacture</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <div>
        <div class="h1">
            {{ $manufacture->name }}
        </div>
        <dl class="row">
            <dt class="col-sm-3">Tech Email</dt>
            <dd class="col-sm-9">{{ $manufacture->tech_email }}</dd>

            <dt class="col-sm-3">Tech Phone Number</dt>
            <dd class="col-sm-9">{{ $manufacture->tech_phone }}</dd>

            <dt class="col-sm-3">Sales Email</dt>
            <dd class="col-sm-9">{{ $manufacture->sales_email }}</dd>

            <dt class="col-sm-3">Sales Phone Number</dt>
            <dd class="col-sm-9">{{ $manufacture->sales_phone }}</dd>
        </dl>
    </div>
    <span style="float:right;">
        <a href="{{ route('manufacture.edit',['manufacture'=>$manufacture->id]) }} " class="btn btn-warning">Update</a>
        <a href="{{ route('manufacture.destroy',['manufacture'=>$manufacture->id]) }}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('submit-form').submit();">
        Delete</a>
        <form id="submit-form" action="{{ route('manufacture.destroy',['manufacture'=>$manufacturer->id]) }}" method="POST" class="hidden">
            @csrf
            @method('DELETE')
        </form>
    </span>
  </div>
</div>
@stop
