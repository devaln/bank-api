@extends('layouts.app')
@section('content')
<div class="container">
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
    <form action="{{ route('nominees.store') }}" method="POST">
    <form action="{{ route('userinformations.store') }}" method="POST">
        @csrf
        <div class="card col-md-6"><br>
            <legend class="ml-3" align="left">Fill required detail below :-</legend><br>
            <!-- First Name -->
            <div class="tect-center" align="center">
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-end" for="fname" >First Name :</label>
                    <div class="col-md-5">
                        <input type="text" id="fname" name="first_name" class="form-control" placeholder="">
                    </div>
                </div>
                <!-- Middle Name -->
                <div class="row mb-3">
                        <label class="col-md-4 col-form-label text-md-end" for="mname" >Middle Name :</label>
                        <div class="col-md-5">
                            <input type="text" id="mname" name="middle_name" class="form-control" placeholder="">
                        </div>
                    </div>
                <!-- Last Name -->
                <div class="row mb-3">
                        <label class="col-md-4 col-form-label text-md-end" for="lname" >Last Name :</label>
                        <div class="col-md-5">
                            <input type="text" id="lname" name="last_name" class="form-control" placeholder="">
                        </div>
                    </div>
                <!-- Contact -->
                <div class="row mb-3">
                        <label class="col-md-4 col-form-label text-md-end" for="cont" >Contact :</label>
                        <div class="col-md-5">
                            <input type="integer" id="cont" name="contact" class="form-control" placeholder="">
                        </div>
                    </div>
                <!-- Date Of Birth -->
                <div class="row mb-3">
                        <label class="col-md-4 col-form-label text-md-end" for="dob" >Birth Date :</label>
                        <div class="col-md-5">
                            <input type="date" id="dob" name="date_of_birth" class="form-control" placeholder="">
                        </div>
                    </div>
                <!-- Gender -->
                <div class="row mb-3">
                        <label class="col-md-4 col-form-label text-md-end" class="col-md-4 col-form-label text-md-end" for="gend" >Gender :</label>
                        <div class="col-md-5">
                            <input type="radio" id="gend" name="gender" value="Male" placeholder="">&nbsp;Male&nbsp;&nbsp;
                            <input type="radio" id="gend" name="gender" value="Male" placeholder="">&nbsp;Female&nbsp;&nbsp;
                            <input type="radio" id="gend" name="gender" value="Male" placeholder="">&nbsp;Other&nbsp;&nbsp;
                        </div>
                    </div>
                <!-- Relation -->
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-end" for="mstatus" > Relations Type :</label>
                    <div class="col-md-5">
                        <input type="radio" id="mstatus" name="relation" value="Father">&nbsp;Father&nbsp;&nbsp;
                        <input type="radio" id="mstatus" name="relation" value="Mother">&nbsp;Mother&nbsp;&nbsp;
                    </div>
                </div>
                    <a class="btn btn-primary" href="{{ route('userinformations.index') }}"> Back</a>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection