@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
  <div class="col-md-6">
    <div class="card uper">
      <div class="card-body">
        @if(session()->get('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }}  
        </div><br />
        @endif
        <table class="table table-striped">
          <thead>
            <tr>
              <td>ID</td>
              <td>Product</td>
              <td>Shipping Address</td>
              <td>Price</td>
              <td colspan="2">Action</td>
            </tr>
          </thead>
          <tbody>
            @foreach($products as $product)
            <tr>
              <td>{{$product->id}}</td>
              <td>{{$product->phone_number}}</td>
              <td>{{$product->value}}</td>
              <td><a href="{{ route('products.edit',$product->id)}}" class="btn btn-primary">Edit</a></td>
              <td>
                <form action="{{ route('products.destroy', $product->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <div>
        </div>
      </div>
    </div>
    
    @endsection