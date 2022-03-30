@extends('adminlte::page')

@section('title', 'Customer')

@section('content_header')
    <h1>Customer</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>Name</th><th style="width: 40px">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($customer AS $customer)
        <tr>
          <td>{{ $customer->id }}</td>
          <td>{{ $customer->name }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('customer.show',['customer'=>$customer->id]) }}">View</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('customer.create') }} " class="btn btn-primary" >Create</a>
@stop
