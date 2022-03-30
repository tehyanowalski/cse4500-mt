@extends('adminlte::page')

@section('title', 'Notes')

@section('content_header')
    <h1>History</h1>
@stop

@section('content')
<form method="post" action="{{ route('notes.store') }}" >
    @csrf
    <x-adminlte-input name="title" label="Title" />
    <x-adminlte-input name="progress" type="number" min=0 max=100 label="Progress" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop
