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
                <h1 class="text-center bg-light text-danger">Welcome To cards Index page : </h1><hr><br>
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
                <th>Title</th>
                <th>Card Number</th>
                <th>Expiry Date</th>
                <th>CVV Code</th>
                <th><a class=" btn btn-success" href="{{ route('cards.create') }}"> Add a Card</a></th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($cards as $card)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $card->title }}</td>
                <td>{{ $card->number }}</td>
                <td>{{ $card->expiry_date }}</td>
                <td>{{ $card->cvv_code }}</td>
                <td>
                <form action="{{ route('cards.destroy',$card->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('cards.show',$card->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('cards.edit',$card->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Do you really want to delete card!')" class="btn btn-danger">Delete</button>
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection