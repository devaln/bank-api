@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit userinformation :-</h2>
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
    <form action="{{ route('userinformations.update',$userinformation->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
    <div class="row">
            <div class="mb-3">
                <label class="col-md-4 col-form-label text-md-end">First Name :</label>
                <div class="col-md-5">
                    <input type="text" name="first_name" value="{{$userinformation->first_name}}" class="form-control" placeholder="">
                </div>
            </div>
            <div class="mb-3">
                <label class="col-md-4 col-form-label text-md-end">Middle Name :</label>
                <div class="col-md-5">
                    <input type="text" name="middle_name" value="{{$userinformation->middle_name}}" class="form-control" placeholder="">
                </div>
            </div>
            <div class="mb-3">
                <label class="col-md-4 col-form-label text-md-end">Last Name :</label>
                <div class="col-md-5">
                    <input type="text" name="last_name" value="{{$userinformation->last_name}}" class="form-control" placeholder="">
                </div>
            </div>
            <div class="mb-3">
                <label class="col-md-4 col-form-label text-md-end">Contact :</label>
                <div class="col-md-5">
                    <input type="integer" name="contact" value="{{$userinformation->contact}}" class="form-control" placeholder="">
                </div>
            </div>
            <div class="mb-3">
                <label class="col-md-4 col-form-label text-md-end">Birth Date :</label>
                <div class="col-md-5">
                    <input type="date" name="date_of_birth" value="{{$userinformation->date_of_birth}}" class="form-control" placeholder="">
                </div>
            </div>
            <div class="mb-3">
                <label class="col-md-4 col-form-label text-md-end">Gender :</label>
                <div class="col-md-5">
                    <input type="radio" name="gender" value="{{$userinformation->gender}}" placeholder="">&nbsp;Male&nbsp;&nbsp;
                    <input type="radio" name="gender" value="{{$userinformation->gender}}" placeholder="">&nbsp;Female&nbsp;&nbsp;
                    <input type="radio" name="gender" value="{{$userinformation->gender}}" placeholder="">&nbsp;Other&nbsp;&nbsp;
                </div>
            </div>
            <div class="mb-3">
                <label class="col-md-4 col-form-label text-md-end">PAN Card No :</label>
                <div class="col-md-5">
                    <input type="integer" name="pan_card_number" value="{{$userinformation->pan_card_number}}" class="form-control" placeholder="">
                </div>
            </div>
            <div class="mb-3">
                <label class="col-md-4 col-form-label text-md-end">Adhaar Card Number :</label>
                <div class="col-md-5">
                    <input type="integer" name="adhaar_card_number"value="{{$userinformation->adhaar_card_number}}" class="form-control" placeholder="">
                </div>
            </div>
            <div class="mb-3">
                <label class="col-md-4 col-form-label text-md-end">Maritial Status :</label>
                <div class="col-md-5">
                    <input type="radio" name="maritial_status" value="{{$userinformation->maritial_status}}">&nbsp;Married&nbsp;&nbsp;
                    <input type="radio" name="maritial_status" value="{{$userinformation->maritial_status}}"e">&nbsp;Unmarried&nbsp;&nbsp;
                    <input type="radio" name="maritial_status" value="{{$userinformation->maritial_status}}"">&nbsp;Divorced&nbsp;&nbsp;
                </div>
            </div>
            <div class="mb-3">
                <label class="col-md-4 col-form-label text-md-end" for="inputImage">Image:</label>
                <div class="col-md-5">
                <input 
                    type="file" 
                    name="image" 
                    id="inputImage"
                    class="form-control @error('image') is-invalid @enderror">
  
                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
            </div>
        <div class="mb-3 text-center">
            <a class="btn btn-primary" href="{{ route('userinformations.index') }}"> Back</a>
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </div>
</form>
</div>
@endsection