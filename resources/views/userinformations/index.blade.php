@extends('layouts.app')
@section('content')
<div class="container">
    <h1 class="text-left text-dark mt-2">Welcome To User-Information Index page : </h1><br>
    <div class="center">
        <div class="col-lg-12 margin-tb">
            <form action="" class=" mt-4">
                <div class="form-group">
                  <input type="text" name="search" id="" class="form-control bg-light text-dark" value="" placeholder="Search by Name">
                </div>
            </form>
        </div>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <span>{{ $message }}</span>
    </div>
    @endif
    <table class="table table-hover">
        <div align="left">
            <form action="{{ route('userinformations.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" for="import" name="file" class="" required>
                <button type="submit" align="left" id="import" onclick="return confirm('Do you really want!')" class="btn btn-outline-primary">Import</button>
            </form>
        </div>
        <div align="right">
            <form action="{{ route('userinformations.export') }}" method="GET">
                @csrf
                @method('EXPORT')
                <button type="submit" align="right" onclick="return confirm('Do you really want!')" class="btn btn-outline-danger">Excel Report</button>
            </form>
        </div>
        <thead class="text-center text-dark">
            <tr>
                <th>Sr.No</th>
                <th>Full Name</th>

                <th>Contact</th>
                <th>Birth Date</th>
                <th>gender</th>
                {{-- <th>Pan Card Number</th>
                <th>Adhaar Card Number</th> --}}
                <th>Maritial Status</th>
                <th>Profile Image</th>

                <th><a class="form-control btn btn-success" href="{{ route('userinformations.create') }}"> Add </a></th>
                <th> Send Money</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($userinformations as $userinformation)
            <tr>
                <td>{{ ++$i }}</td>
                <td><a href="{{ route('userinformations.show',$userinformation->id) }}">{{ $userinformation->first_name }} {{ $userinformation->last_name }}</a></td>

                <td>{{ $userinformation->contact }}</td>
                <td>{{ $userinformation->date_of_birth }}</td>
                <td>{{ $userinformation->gender }}</td>
                {{-- <td>{{ $userinformation->pan_card_number }}</td>
                <td>{{ $userinformation->adhaar_card_number }}</td> --}}
                <td>{{ $userinformation->maritial_status }}</td>
                <td><img src="/public/images/{{ $userinformation->image }}"></td>
                <td>
                    <form action="{{ route('userinformations.destroy',$userinformation->id) }}" method="POST">

                        <a class="btn btn-primary mb-1" href="{{ route('userinformations.edit',$userinformation->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Do you really want to delete userinformation!')" class="btn btn-danger">Delete</button>
                    </form></td>
                <td><a class="btn btn-outline-success" href="{{ route('userinformations.sendmoney', $userinformation->id)}}">Send</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $userinformations->links() }}
</div>
@endsection