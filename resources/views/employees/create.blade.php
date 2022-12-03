@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1 class="text-center bg-dark text-danger col-lg-12">Create Employee : </h1>
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
    <form action="{{ route('employees.store') }}" method="POST">
        <legend align="left">Fill required detail below :-</legend>
        @csrf
        <div align="center">
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Education :</strong>
                    <input type="text" name="education"  class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Joining Date :</strong>
                    <input type="date" name="date_of_joining"  class="form-control" placeholder="">
                </div>
            </div>
                <label for="logintype" class="col-md-4 col-form-label text-md-end">{{ __('Login Type :') }}</label>
                <div class="col-md-6">
                    <select class="form-select" id="logintype" aria-label="Default select example" required>
                        <option selected>Open this select menu</option>
                        <option name="work_status" value="Active">Active</option>
                        <option name="work_status" value="Logout">Logout</option>
                    </select>
                </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Designation :</strong>
                    <input type="text" name="designation"  class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Official Email :</strong>
                    <input type="email" name="official_email"  class="form-control" placeholder="">
                </div>
            </div>

                <div class="col-xs-12 col-lg-12 col-md-12 text-center">
                    <a class="btn btn-primary" href="{{ route('employees.index') }}"> Back</a>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection