@extends('layouts.app')
@section('content')
<div class="container">
    <div class="center">
        <div class="col-lg-12 margin-tb">
            <form action="" class=" mt-4">
                <div class="form-group">
                  <input type="text" name="search" id="" class="form-control bg-light text-dark" value="{{($search)}}" placeholder="Search by Name">
                </div>
            </form>
            <div class="pull-left text-center">
                <h1 class="text-left  text-danger">Welcome To Customer Index page : </h1><hr><br>
            </div>

        </div>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <span>{{ $message }}</span>
    </div>
    @endif
    <table class="table table-hover">
        <thead class="text-center text-dark">
            <tr>
                <th>No</th>
                <th>Account Number</th>
                <th>Account Limit</th>
                <th>Current Balance</th>

                <th><a class="form-control btn btn-success" href="{{ route('customers.create') }}"> Add customer</a></th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($customers as $customer)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $customer->account_number }}</td>
                <td>{{ $customer->account_limit }}</td>
                <td>{{ $customer->current_balance }}</td>
                <td>
                <form action="{{ route('customers.destroy',$customer->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('customers.show',$customer->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('customers.edit',$customer->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Do you really want to delete customer!')" class="btn btn-danger">Delete</button>
                </form></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@if ($search == "")
    {!! $customers->links() !!}
@endif
</div>
@endsection