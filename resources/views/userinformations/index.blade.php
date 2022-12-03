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
                <h1 class="text-center bg-light text-danger">Welcome To userinformation Index page : </h1><hr><br>
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
                <th>First Name</th>
                <th>Middle Name</th>
                <th>last Name</th>
                <th>Contact</th>
                <th>Birth Date</th>
                <th>gender</th>
                <th>pan_card_number</th>
                <th>adhaar_card_number</th>
                <th>mirital_status</th>
              
                <th><a class="form-control btn btn-success" href="{{ route('userinformations.create') }}"> Add userinformation</a></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($userinformations as $userinformation)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $userinformation->first_name }}</td>
                <td>{{ $userinformation->middle_name }}</td>
                <td>{{ $userinformation->last_name }}</td>
                <td>{{ $userinformation->contact }}</td>
                <td>{{ $userinformation->date_of_birth }}</td>
                <td>{{ $userinformation->gender }}</td>
                <td>{{ $userinformation->pan_card_number }}</td>
                <td>{{ $userinformation->adhaar_card_number }}</td>
                <td>{{ $userinformation->maritial_status }}</td>
                <td>
                <form action="{{ route('userinformations.destroy',$userinformation->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('userinformations.show',$userinformation->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('userinformations.edit',$userinformation->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Do you really want to delete userinformation!')" class="btn btn-danger">Delete</button>
                </form></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection