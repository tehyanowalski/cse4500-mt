@extends('adminlte::page')

@section('title', 'Customers')

@section('content_header')
    <h1>Customers</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered sortable">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>Name</th><th style="width: 40px">Phone Number</th><th style="width: 40px">Email</th>
        </tr>
      </thead>
      <tbody>
        @foreach($customer AS $customer)
        <tr>
          <td>{{ $customer->id }}</td>
          <td>{{ $customer->fullname }}</td>
          <td>{{ $customer->phonenumber }}</td>
          <td>{{ $customer->email}}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('customer.show',['customer'=>$customer->id]) }}" style="float:right;">View</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('customer.create') }} " class="btn btn-primary" >Create</a>



@stop



@section('js')
<script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>
@stop
