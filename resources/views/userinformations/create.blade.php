@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1 class="text-left text-danger col-lg-12 mb-4">Create User : </h1>
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
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
    </div>
    <img src="images/{{ Session::get('image') }}">
    @endif
    <form action="{{ route('userinformations.store') }}" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="card col-md-6 mb-4"><br>
            <legend class="ml-4 mb-3" align="left">Fill required detail below :-</legend><br>
            <div class="text-center" align="center">
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-end" for="fname" >First Name :</label>
                    <div class="col-md-5">
                        <input type="text" id="fname" name="first_name" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-end" for="mname" >Middle Name :</label>
                    <div class="col-md-5">
                        <input type="text" id="mname" name="middle_name" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-end" for="lname" >Last Name :</label>
                    <div class="col-md-5">
                        <input type="text" id="lname" name="last_name" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-end" for="cont" >Contact :</label>
                    <div class="col-md-5">
                        <input type="integer" id="cont" name="contact" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-end" for="dob" >Birth Date :</label>
                    <div class="col-md-5">
                        <input type="date" id="dob" name="date_of_birth" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-end" class="col-md-4 col-form-label text-md-end" for="gend" >Gender :</label>
                    <div class="col-md-5">
                        <input type="radio" id="gend" name="gender" value="Male" placeholder="">&nbsp;Male&nbsp;&nbsp;
                        <input type="radio" id="gend" name="gender" value="Male" placeholder="">&nbsp;Female&nbsp;&nbsp;
                        <input type="radio" id="gend" name="gender" value="Male" placeholder="">&nbsp;Other&nbsp;&nbsp;
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-end" for="pan_no" class="col-md-4 col-form-label text-md-end">{{ __('PAN Card Number :') }}</label>

                    <div class="col-md-5">
                        <input id="pan_no" type="integer" class="form-control" name="pan_card_number" required autocomplete="">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-end" for="adhaar" >Adhaar Card Number :</label>
                    <div class="col-md-5">
                        <input type="integer" id="adhaar" name="adhaar_card_number" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-end" for="mstatus" >Maritial Status :</label>
                    <div class="col-md-5">
                        <input type="radio" id="mstatus" name="maritial_status" value="Married">&nbsp;Married&nbsp;&nbsp;
                        <input type="radio" id="mstatus" name="maritial_status" value="Unmarried">&nbsp;Unmarried&nbsp;&nbsp;
                        <input type="radio" id="mstatus" name="maritial_status" value="Divorced">&nbsp;Divorced&nbsp;&nbsp;
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-end" for="inputImage">Image:</label>
                    <div class="col-md-5">
                        <input type="file" name="image" id="inputImage" class="form-control @error('image') is-invalid @enderror">
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="userable_type" class="col-md-4 col-form-label text-md-end">{{ __('Reciever') }}</label>
                    <div class="col-md-4">
                        <select name="userable_type" id="userable_type" value="{{ old('userable_type')}}" class="custom-select {{ $errors->has('userable_type') ? 'is-invalid' : '' }}">
                            <option selected>Select user</option>
                            {{-- @foreach ($userinformations as $userinformation) --}}
                                <option value="Customer">Customer</option>
                                <option value="Employee">Employee</option>
                            {{-- @endforeach --}}
                        </select>
                        @if($errors->has('userable_type'))
                            <div class="invalid-feedback">{{ $errors->first('userable_type') }}</div>
                        @endif
                    </div>
                </div>

                <div>
                    <a class="btn btn-primary" href="{{ route('userinformations.index') }}"> Back</a>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection