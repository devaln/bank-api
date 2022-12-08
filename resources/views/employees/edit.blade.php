@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="text-left text-danger">Edit Employees :-</h2>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> something we are problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('employees.update',$employee->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="">
        <div class="row mb-3">
            <label class="col-md-4 col-form-label text-md-end">Education :</label>
            <div class="col-md-5">
                <input type="text" name="education" value="{{ $employee->education }}" class="form-control" placeholder="">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-4 col-form-label text-md-end">Joining Date :</label>
            <div class="col-md-5">
                <input type="date" name="date_of_joining" value="{{ $employee->date_of_joining }}" class="form-control" placeholder="">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-4 col-form-label text-md-end">Designation :</label>
            <div class="col-md-5">
                <input type="text" name="designation" value="{{ $employee->designation }}" class="form-control" placeholder="">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-4 col-form-label text-md-end">Official E-Mail :</label>
            <div class="col-md-5">
                <input type="email" name="official_email" value="{{ $employee->official_email }}" class="form-control" placeholder="">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <a class="btn btn-primary" href="{{ route('employees.index') }}"> Back</a>
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </div>
</form>
</div>
@endsection