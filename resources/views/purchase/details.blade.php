@extends('adminlte::page')

@section('title', 'Purchase')

@section('header')
<meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('content_header')
    <h1>Purchase</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <div>
        <div class="h1">
            {{ $invoice->invoice_num}}
        </div>
        <dl class="row">
            <dt class="col-sm-3">Price</dt>
            <dd class="col-sm-9">{{ $invoice->price }}</dd>

            <dt class="col-sm-3">Purchase Date</dt>
            <dd class="col-sm-9">{{ $invoice->purchase_date }}</dd>

            <dt class="col-sm-3">Equipment ID</dt>
            <dd class="col-sm-9">{{ $invoice->equipment_id }}</dd>

            <dt class="col-sm-3">Customer ID</dt>
            <dd class="col-sm-9">{{ $invoice->customer_id }}</dd>
        </dl>
    </div>
@stop
© 2022 GitHub, Inc.
Terms
Privacy
