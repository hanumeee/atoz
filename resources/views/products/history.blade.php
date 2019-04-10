@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
<div class="col-md-6">
    <div class="title">
      <h2> History </h2>
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
    <div class="table">
        <table class="table">
        @foreach( $products as $data)
        <tr>
				<td> order no </td>
                <td> price </td>              
        </tr>           
        <tbody>
            <td> {{$data->id}} </td>
            <td> {{$data->price}} </td>
            <td> {{$data->phone_number}} </td>

        </tbody>
			
        @endforeach
        <br>
           </table>
    </div>
  </div>
    </div>
    </div>
</div>
@endsection