@extends('layouts.app')
@section('content')
<div class="container">
    <div class="center">
        <div class="col-lg-12 margin-tb">
            <form action="" class=" mt-4">
                <div class="form-group">
                  <input type="text" name="search" id="" class="form-control bg-light text-dark" value="" placeholder="Search by Name">
                </div>
            </form>
            <div class="pull-left text-center">
                <h1 class="text-center bg-light text-danger">Welcome To Address Index page : </h1><hr><br>
            </div>
            
        </div>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <span>{{ $message }}</span>
    </div>
    @endif
    <table class="table table-hover">
        <thead class="text-center bg-dark text-white">
            <tr>
                <th>No</th>
                <th>City Name</th>
                <th>Landmark</th>
                <th>Taluka</th>
                <th>District</th>
                <th>State</th>
                <th>Country</th>
                <th>Pin Code</th>
              
                <th><a class="form-control btn btn-success" href="{{ route('addresses.create') }}"> Add customer</a></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($addresses as $address)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $address->city_name }}</td>
                <td>{{ $address->landmark }}</td>
                <td>{{ $address->taluka }}</td>
                <td>{{ $address->district }}</td>
                <td>{{ $address->state }}</td>
                <td>{{ $address->country }}</td>
                <td>{{ $address->pin_code }}</td>
                <td>
                <form action="{{ route('addresses.destroy',$address->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('addresses.show',$address->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('addresses.edit',$address->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Do you really want to delete address!')" class="btn btn-danger">Delete</button>
                </form></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection