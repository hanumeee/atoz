@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
<div class="col-md-6">
    <div class="title">
      <h2> Prepaid Balance </h2>
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
    <form method="post" action="/topup/store">
          <div class="form-group">
              @csrf
              <label for="phone_number">Phone Number:</label>
              <input type="number" class="form-control" name="phone_number" id="phone_number" required/>
          </div>
          <div class="form-group">
              <label for="value">Value:</label>
              <select class="form-control" name="value" id="value">
                  <option value="10.000">10.000</option>
                  <option value="50.000">50.000</option>
                  <option value="100.000">100.000</option>
              </select>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
    </div>
    </div>
</div>
@endsection