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
                <h1 class="text-center bg-light text-danger">Welcome To departments Index page : </h1><hr><br>
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
                <th>Department Name</th>
                <th>Employee Count</th>
                <th><a class="form-control btn btn-success" href="{{ route('departments.create') }}"> Add customer</a></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($departments as $department)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $department->nmae }}</td>
                <td>{{ $department->employee_count }}</td>
                <td>
                <form action="{{ route('departments.destroy',$department->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('departments.show',$department->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('departments.edit',$department->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Do you really want to delete department!')" class="btn btn-danger">Delete</button>
                </form></td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection