@extends('layouts.app')
@section('content')
<div class="container">
<br><br>
    <div class="row text-center">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1 class="text-center bg-dark text-danger"> User Detail : </h3>
            </div>
        </div>
    </div><br>
    <div class="row text-center">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>last Name</th>
                    <th>User Email</th>
                    <th>Contact</th>
                    <th>Birth Date</th>
                    <th>gender</th>
                    <th>Pan Card Number</th>
                    <th>Adhaar Card Number</th>
                    <th>Maritial Status</th>
                    <th>Profile Image</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $userinformation->first_name }}</td>
                    <td>{{ $userinformation->middle_name }}</td>
                    <td>{{ $userinformation->last_name }}</td>
                    <td>{{ $userinformation->$user_role->email }}</td>
                    <td>{{ $userinformation->contact }}</td>
                    <td>{{ $userinformation->date_of_birth }}</td>
                    <td>{{ $userinformation->gender }}</td>
                    <td>{{ $userinformation->pan_card_number }}</td>
                    <td>{{ $userinformation->adhaar_card_number }}</td>
                    <td>{{ $userinformation->maritial_status }}</td>
                    <td><img src="images/{{ Session::get('image') }}" height="50px" width="50px"></td>
                </tr>
            </tbody>
        </table>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <a class="btn btn-primary" href="{{ route('userinformations.index') }}"> Back</a>
        </div>
    </div>
</div>
@endsection