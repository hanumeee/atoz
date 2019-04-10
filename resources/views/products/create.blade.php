@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
<div class="col-md-6">
    <div class="title">
      <h2> Product </h2>
    </div>
    <div class="card uper">
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <form method="post" action="/product/store">
          <div class="form-group">
              @csrf
              <label for="product">Product:</label>
              <textarea class="form-control" rows="5" id="product" name="product" required></textarea>
          </div>
          <div class="form-group">
              @csrf
              <label for="shipping">Shipping Address:</label>
              <textarea class="form-control" rows="5" id="shipping_address" name="shipping_address" required></textarea>
          </div>
          <div class="form-group">
              <label for="price">Price :</label>
              <input type="number" class="form-control" id="price" name="price"  required/>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
    </div>
    </div>
</div>
@endsection