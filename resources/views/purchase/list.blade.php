@extends('adminlte::page')

@section('title', 'Purchase')

@section('content_header')
    <h1>Purchase</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered sortable">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>Invoice Number</th><th style="width: 40px">Price</th><th style="width: 40px">Purchase Date</th><th style="width: 40px">Equipment ID</th><th style="width: 40px">Customer ID</th>
        </tr>
      </thead>
      <tbody>
        @foreach($invoice AS $invoice)
        <tr>
          <td>{{ $invoice->id }}</td>
          <td>{{ $invoice->invoice_num }}</td>
          <td>{{ $invoice->price }}</td>
          <td>{{ $invoice->purchase_date }}</td>
          <td>{{ $invoice->equipment_id }}</td>
          <td>{{ $invoice->customer_id }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('invoice.show',['invoice'=>$invoice->id]) }}" style="float:right;">View</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('invoice.create') }} " class="btn btn-primary" >Create</a>



@stop
