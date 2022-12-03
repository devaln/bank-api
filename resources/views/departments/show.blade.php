@extends('layouts.app')
@section('content')
    
<br><br>
    <div class="row text-center">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1 class="text-center bg-dark text-danger"> Department Detail : </h3>
            </div>
        </div>
    </div><br>
    <div class="row text-center">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Department Name</th>
                    <th>Employee Count</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $department->name }}</td>
                    <td>{{ $department->employee_count }}</td>
                </tr>
            </tbody>
        </table>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <a class="btn btn-primary" href="{{ route('departments.index') }}"> Back</a>
        </div>
    </div>
@endsection