@extends('adminlte::page')

@section('title', 'Purchase')

@section('content_header')
    <h1>Purchase</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 60px;">ID #</th>
          <th>Customer</th>
          <th>Items</th>
          <th>Total Cost</th>
          <th>Purchase Date</th>
          <th style="width: 40px">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($purchases AS $purchase)
        <tr>
          <td>{{ $purchase->id }}</td>
          <td>{{ $purchase->customer->fullname }}</td>
          <td>{{ $purchase->number_of_items() }}</td>
          <td>${{ $purchase->total_price() }}</td>
          <td>{{ $purchase->purchase_date }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('purchase.show',['purchase'=>$purchase->id]) }}">View</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('purchase.create') }} " class="btn btn-primary" >Create</a>
@stop
