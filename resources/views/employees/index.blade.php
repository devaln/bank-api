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
                <h1 class="text-left  text-danger">Welcome To Employees Index page : </h1><hr><br>
            </div>

        </div>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <span>{{ $message }}</span>
    </div>
    @endif
    <table class="table table-hover">
        <thead class="text-center  text-dark">
            <tr>
                <th>No</th>
                <th>Education</th>
                <th>jioning Date</th>
                <th>Designation</th>
                <th>Official E-Mail</th>

                <th><a class=" btn btn-success" href="{{ route('employees.create') }}"> Add customer</a></th>
                <th>Send Money</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($employees as $employee)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $employee->education }}</td>
                <td>{{ $employee->date_of_joining }}</td>
                <td>{{ $employee->designation }}</td>
                <td>{{ $employee->official_email }}</td>
                <td>
                <form action="{{ route('employees.destroy',$employee->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('employees.show',$employee->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('employees.edit',$employee->id) }}">Edit</a>
                    <a class="btn btn-outline-success" href="{{ route('transactions.trans', $employee->id) }}">Send</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Do you really want to delete employee!')" class="btn btn-danger">Delete</button>
                </form></td>
            </tr>
            @endforeach
        </tbody>
    </table>
{!! $employees->links() !!}
</div>
@endsection