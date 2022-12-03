@extends('layouts.app')
@section('content')
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
                <th>Education</th>
                <th>jioning Date</th>
                <th>Designation</th>
                <th>Official E-Mail</th>
              
                <th><a class="form-control btn btn-success" href="{{ route('addresses.create') }}"> Add customer</a></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($addresses as $address)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $address->education }}</td>
                <td>{{ $address->date_of_joining }}</td>
                <td>{{ $address->designation }}</td>
                <td>{{ $address->offical_email }}</td>
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

@endsection