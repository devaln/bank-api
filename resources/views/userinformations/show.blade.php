@extends('layouts.app')
@section('content')
    
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
                    <th>Contact</th>
                    <th>Birth Date</th>
                    <th>gender</th>
                    <th>pan_card_number</th>
                    <th>adhaar_card_number</th>
                    <th>mirital_status</th>
                </tr>
            </thead>
            <tbody>
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
                </tr>
            </tbody>
        </table>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <a class="btn btn-primary" href="{{ route('userinformations.index') }}"> Back</a>
        </div>
    </div>
@endsection