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
    <form method="post" action="/products/history">
          <div class="form-group">
              <label for="order">Pay your order :</label>
              <input type="number" class="form-control" id="order" name="order" placeholder="order no."  required/>
          </div>
          <button type="submit" class="btn btn-primary">Pay Now</button>
      </form>
  </div>
    </div>
    </div>
</div>
@endsection