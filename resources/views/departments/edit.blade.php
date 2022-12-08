@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Department :-</h2>
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
    <form action="{{ route('departments.update',$department->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="">
        <div class="row mb-3">
            <label class="col-md-4 col-form-label text-md-end">Department Name :</label>
            <div class="col-md-5">
                <input type="text" name="name" value="{{ $department->name }}" class="form-control" placeholder="">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-4 col-form-label text-md-end">Employee Count :</label>
            <div class="col-md-5">
                <input type="integer" name="employee_count" value="{{ $department->employee_count }}" class="form-control" placeholder="">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <a class="btn btn-primary" href="{{ route('departments.index') }}"> Back</a>
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </div>
</form>
</div>
@endsection