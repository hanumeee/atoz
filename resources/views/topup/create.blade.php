@extends('layouts.app')

@section('content')
<style>
  .card-uper {
  width: 60%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  }
</style>
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
      <form method="post" 
      {{-- action="{{ route('topup.store') }}"  --}}
      >
          <div class="form-group">
              @csrf
              <label for="name">Mobile Number:</label>
              <input type="text" class="form-control" name="mobile_number"/>
          </div>
          <div class="form-group">
              <label for="price">Value :</label>
              <input type="text" class="form-control" name="value"/>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
    </div>
    </div>
</div>
@endsection