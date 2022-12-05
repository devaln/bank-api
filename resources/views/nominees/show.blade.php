@extends('layouts.app')
@section('content')
<div class="container">    
<br><br>
    <div class="row text-center">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1 class="text-center bg-dark text-danger"> Nominee Detail : </h3>
            </div>
        </div>
    </div><br>
    <div class="row text-center">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Birthdate</th>
                    <th>Contact</th>
                    <th>Gender</th>
                    <th>Relation</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $nominee->first_name }}</td>
                    <td>{{ $nominee->middle_name }}</td>
                    <td>{{ $nominee->last_name }}</td>
                    <td>{{ $nominee->date_of_birth }}</td>
                    <td>{{ $nominee->contact }}</td>
                    <td>{{ $nominee->gender }}</td>
                    <td>{{ $nominee->relation }}</td>
                    
                </tr>
            </tbody>
        </table>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <a class="btn btn-primary" href="{{ route('nominees.index') }}"> Back</a>
        </div>
    </div>
</div>
@endsection