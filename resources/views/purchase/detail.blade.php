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
            Invoice ID: {{ $purchase->id }}
        </div>
        <dl class="row">
            <dt class="col-sm-3">Customer</dt>
            <dd class="col-sm-9">{{ $purchase->customer->fullname }}</dd>

            <dt class="col-sm-3">Purchase Date</dt>
            <dd class="col-sm-9">{{ $purchase->purchase_date }}</dd>

            <dt class="col-sm-3">Total Items</dt>
            <dd class="col-sm-9">{{ $purchase->number_of_items() }}</dd>

            <dt class="col-sm-3">Total Cost</dt>
            <dd class="col-sm-9">${{ $purchase->total_price() }}</dd>
        </dl>
    </div>
    <span style="float:right; margin-bottom:10px;">
        <a href="{{ route('purchase.edit', ['purchase'=>$purchase->id]) }} " class="btn btn-warning">Update</a>
        <a href="{{ route('purchase.destroy',['purchase'=>$purchase->id]) }}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('submit-form').submit();">
        Delete</a>
        <form id="submit-form" action="{{ route('purchase.destroy',['purchase'=>$purchase->id]) }}" method="POST" class="hidden">
            @csrf
            @method('DELETE')
        </form>
    </span>


    <table id="table" class="table table-bordered" style=" margin-bottom:10px;">
      <thead>
        <tr>
          <th style="width: 10px">ID</th>
          <th>Name</th>
          <th>Price</th>
          <th style="width: 150px">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($purchase->equipments AS $equipment)
        <tr>
            <td>{{ $equipment->id }}</td>
            <td>{{ $equipment->name }}</td>
            <td>${{ $equipment->price }}</td>
            <td>
                <span>
                <a class="btn btn-default btn-sm" href="{{ route('equipment.show',['equipment'=>$equipment->id]) }}">View</a>
                <a class="btn btn-danger btn-sm" onclick="deleteItem( {!! $equipment->id !!}  )">Delete</a>
                </span>
            </td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <div class="input-group mb-3">
        <input type="number" class="form-control" id="equipment-input" placeholder="Add item by ID" aria-describedby="button-addon2">
        <button class="btn btn-outline-secondary" type="button" onclick="addItem()">Submit</button>
    </div>

  </div>
</div>
@stop

@section('js')
    <script>
    const addItem = () => {
        let element = document.getElementById("equipment-input").value;
        let purchaseID = "{!! $purchase->id !!}"
        fetch(`/purchase/${purchaseID}/${element}`, {
            method: 'POST',
            redirect: 'manual',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        }).then(response => window.location.reload())
    }
    const deleteItem = (itemID) => {
        let purchaseID = "{!! $purchase->id !!}"
        fetch(`/purchase/${purchaseID}/${itemID}`, {
            method: 'DELETE',
            redirect: 'manual',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        }).then(response => window.location.reload())
        console.log(itemID)
    }
    
    </script>
@stop
