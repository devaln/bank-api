@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="center">
            <div class="col-lg-12 margin-tb">
                <form action="" class="">
                    <div class="form-group">
                        <input type="text" name="search" id="" class="form-control text-dark" value=""placeholder="Search by Name">
                    </div>
                </form>
                <h1 class="text-left text-danger mt-4">Welcome To Nominees Index page : </h1>
                <hr>
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
                    <th>Last Name</th>
                    <th>Birthdate</th>
                    <th>Contact</th>
                    <th>Gender</th>
                    <th>Relation</th>
                    <th><a class="form-control btn btn-success" href="{{ route('nominees.create') }}"> Add customer</a></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nominees as $nominee)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $nominee->first_name }}</td>
                        <td>{{ $nominee->middle_name }}</td>
                        <td>{{ $nominee->last_name }}</td>
                        <td>{{ $nominee->date_of_birth }}</td>
                        <td>{{ $nominee->contact }}</td>
                        <td>{{ $nominee->gender }}</td>
                        <td>{{ $nominee->relation }}</td>
                        <td>
                            <form action="{{ route('nominees.destroy', $nominee->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('nominees.show', $nominee->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('nominees.edit', $nominee->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Do you really want to delete nominee!')"
                                    class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $nominees->links()}}
    </div>
@endsection
