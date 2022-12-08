@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="text-left text-danger">Edit Nominees :-</h2>
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
    <form action="{{ route('nominees.update',$nominee->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="card">
        <legend class=" ml-4 text-left mt-2 mb-3">Fill the detail you want to update : </legend>
        <div class="row mb-3">
            <label class="col-md-4 col-form-label text-md-end">First Name :</label>
            <div class="col-md-5">
                <input type="text" name="first_name" value="{{ $nominee->first_name }}" class="form-control" placeholder="">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-4 col-form-label text-md-end">Middle Name :</label>
            <div class="col-md-5">
                <input type="text" name="middle_name" value="{{ $nominee->middle_name }}" class="form-control" placeholder="">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-4 col-form-label text-md-end">Last Name :</label>
            <div class="col-md-5">
                <input type="text" name="last_name" value="{{ $nominee->last_name }}" class="form-control" placeholder="">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-4 col-form-label text-md-end">Birth Date :</label>
            <div class="col-md-5">
                <input type="date" name="date_of_birth" value="{{ $nominee->date_of_birth }}" class="form-control" placeholder="">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-4 col-form-label text-md-end">Contact :</label>
            <div class="col-md-5">
                <input type="text" name="contact" value="{{ $nominee->contact }}" class="form-control" placeholder="">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-4 col-form-label text-md-end">Gender :</label>
            <div class="col-md-5">
                <input type="email" name="gender" value="{{ $nominee->gender }}" class="form-control" placeholder="">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-4 col-form-label text-md-end">Relationship :</label>
            <div class="col-md-5">
                <input type="email" name="relation" value="{{ $nominee->relation }}" class="form-control" placeholder="">
            </div>
        </div>
        <div class="mb-3 text-center">
            <a class="btn btn-primary" href="{{ route('nominees.index') }}"> Back</a>
            <button type="submit" class="btn btn-success">Update</button> 
        </div>
    </div>
</form>
</div>
@endsection