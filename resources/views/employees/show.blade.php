@extends('layouts.app')
@section('content')
<div class="container">    
<br><br>
    <div class="row text-center">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1 class="text-left  text-danger"> Employee Detail : </h3>
            </div>
        </div>
    </div><br>
    <div class="row text-center">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Education</th>
                    <th>jioning Date</th>
                    <th>Designation</th>
                    <th>Official E-Mail</th>
                    
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <td>{{ $employee->education }}</td>
                    <td>{{ $employee->date_of_joining }}</td>
                    <td>{{ $employee->designation }}</td>
                    <td>{{ $employee->official_email }}</td>
                    
                </tr>
            </tbody>
        </table>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <a class="btn btn-primary" href="{{ route('employees.index') }}"> Back</a>
        </div>
    </div>
</div>
@endsection