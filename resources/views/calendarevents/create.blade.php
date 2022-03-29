@extends('adminlte::page')

@section('title', 'Calendar Events')

@section('content_header')
    <h1>Calendar Events</h1>
@stop

@section('content')
<form method="post" action="{{ route('calendarevents.store') }}" >
    @csrf
    <x-adminlte-input name="title" label="Title" />
    <x-adminlte-input name="call" label="datetime-local" label="Start" />
    <x-adminlte-input name="close" label="datetime-local" label="Finish" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop
