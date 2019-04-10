@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card uper">
            @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}  
            </div><br />
            @endif
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Phone Number</td>
                        <td>Value</td>
                        <td colspan="2">Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($topups as $topup)
                    <tr>
                        <td>{{$topup->id}}</td>
                        <td>{{$topup->phone_number}}</td>
                        <td>{{$topup->value}}</td>
                        <td><a href="{{ route('topups.edit',$topup->id)}}" class="btn btn-primary">Edit</a></td>
                        <td>
                            <form action="{{ route('topups.destroy', $topup->id)}}" method="post">
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
        
        @endsection