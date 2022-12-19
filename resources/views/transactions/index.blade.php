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
                <h1 class="text-center bg-light text-danger">This is Transactions Index page : </h1><hr><br>
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
                <th>Ammount</th>
                <th>Description</th>
                <th><a class=" btn btn-success" href="{{ route('transactions.create') }}"> Add </a></th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($transactions as $transaction)
            <tr>
                <td>{{ $transaction->id }}</td>
                <td>{{ $transaction->ammount }}</td>
                <td>{{ $transaction->description }}</td>
                <td>
                <form action="{{ route('transactions.destroy',$transaction->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('transactions.show',$transaction->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('transactions.edit',$transaction->id) }}">Edit</a>
                    <a class="btn btn-outline-success" href="{{ route('transactions.create',$transaction->id) }}">Send</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Do you really want to delete  this transaction!')" class="btn btn-danger">Delete</button>
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection