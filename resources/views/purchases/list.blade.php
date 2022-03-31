@extends('adminlte::page')

@section('title', 'Purchases')

@section('content_header')
    <h1>Purchases</h1>
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
        @foreach($purchases AS $purchases)
        <tr>
          <td>{{ $purchases->id }}</td>
          <td>{{ $purchases->customer->fullname }}</td>
          <td>{{ $purchases->number_of_items() }}</td>
          <td>${{ $purchases->total_price() }}</td>
          <td>{{ $purchases->purchase_date }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('purchases.show',['purchases'=>$purchases->id]) }}">View</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('purchases.create') }} " class="btn btn-primary" >Create</a>
@stop
