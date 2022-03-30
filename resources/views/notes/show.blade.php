@extends('adminlte::page')

@section('title', 'Notes')

@section('content_header')
    <h1>History</h1>
@stop

@section('content')
  <h2>{{ $notes->title; }}</h2>
  <div><p>{{ $notes->progress; }}% finished</p></div>
@stop
