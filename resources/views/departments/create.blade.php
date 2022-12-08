@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1 class="text-left text-danger col-lg-12">Create Department : </h1>
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
    <form action="{{ route('departments.store') }}" method="POST">
        <div class="card col-lg-6">
        <legend class="ml-4 mt-4 mb-4" align="left">Fill required detail below :-</legend>
        @csrf
        <div align="center">
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-end">Department Name :</label>
                    <div class="col-md-5">
                        <input type="text" name="name"  class="form-control" placeholder="">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-end">Employee Count :</label>
                    <div class="col-md-5">
                        <input type="integer" name="employee_count"  class="form-control" placeholder="">
                    </div>
                </div>
                
                <div class="col-xs-12 col-lg-12 col-md-12 text-center">
                    <a class="btn btn-primary" href="{{ route('departments.index') }}"> Back</a>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection