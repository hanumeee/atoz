@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
<div class="col-md-6">
    <div class="title">
      <h2> Success </h2>
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
            <form method="post" action="/products/order">
        @foreach( $products as $data)
        <tr>
				<br>Order No :  {{ $data->id }}
                <br>Total : {{ $data->price }}
                <br>
                <br>{{ $data->product }} that costs {{ $data->price }} will be shipped to:
                <br>{{ $data->shipping_address }}
                <br>
                <br>only after you pay.
            </tr>
			{{-- <tr>
				<br>Order No :  {{ $id }}
                <br>Total : {{ $price }}
                <br>
                <br>{{ $product }}} that costs {{ $price }} will be shipped to:
                <br>
                <br>{{ $shipping_address }}
                <br>
                <br>only after you pay.
            </tr> --}}
            
			
        @endforeach
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
    </div>
    </div>
</div>
@endsection