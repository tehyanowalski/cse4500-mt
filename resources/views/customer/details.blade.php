@extends('adminlte::page')

@section('title', 'Customers')

@section('content_header')
    <h1>Customer</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <div>
        <div class="h1">
            {{ $customer->fullname }}
        </div>
        <dl class="row">
            <dt class="col-sm-3">Phone Number</dt>
            <dd class="col-sm-9">{{ $customer->phonenumber }}</dd>

            <dt class="col-sm-3">Email</dt>
            <dd class="col-sm-9">{{ $customer->email }}</dd>
        </dl>
    </div>
    <span style="float:right; margin-bottom: 10px;">
      <a href="{{ route('customer.destroy' ,['customer'=> $customer->id])}}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('submit-form').submit();">Delete</a>
    </span>
@stop
        <tr>
          <th style="width: 10px">ID</th>
          <th>Items</th>
          <th>Total</th>
          <th>Purchase Date</th>
          <th style="width: 40px">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($customer->purchases AS $purchase)
        <tr>
          <td>{{ $purchase->id }}</td>
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
@stop
