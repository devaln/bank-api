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
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>First Name :</strong>
                    <input type="text" name="first_name" value="{{$userinformation->first_name}}" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Middle Name :</strong>
                    <input type="text" name="middle_name" value="{{$userinformation->middle_name}}" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Last Name :</strong>
                    <input type="text" name="last_name" value="{{$userinformation->last_name}}" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Contact :</strong>
                    <input type="integer" name="contact" value="{{$userinformation->contact}}" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Birth Date :</strong>
                    <input type="date" name="date_of_birth" value="{{$userinformation->date_of_birth}}" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gender :</strong>
                    <input type="radio" name="gender" value="{{$userinformation->gender}}" placeholder="">&nbsp;Male&nbsp;&nbsp;
                    <input type="radio" name="gender" value="{{$userinformation->gender}}" placeholder="">&nbsp;Female&nbsp;&nbsp;
                    <input type="radio" name="gender" value="{{$userinformation->gender}}" placeholder="">&nbsp;Other&nbsp;&nbsp;
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>PAN Card No :</strong>
                    <input type="integer" name="pan_card_number" value="{{$userinformation->pan_card_number}}" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Adhaar Card Number :</strong>
                    <input type="integer" name="adhaar_card_number"value="{{$userinformation->adhaar_card_number}}" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Maritial Status :</strong>
                    <input type="radio" name="maritial_status" value="{{$userinformation->maritial_status}}">&nbsp;Male&nbsp;&nbsp;
                    <input type="radio" name="maritial_status" value="{{$userinformation->maritial_status}}"e">&nbsp;Female&nbsp;&nbsp;
                    <input type="radio" name="maritial_status" value="{{$userinformation->maritial_status}}"">&nbsp;Other&nbsp;&nbsp;
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="inputImage">Image:</label>
                <input 
                    type="file" 
                    name="image" 
                    id="inputImage"
                    class="form-control @error('image') is-invalid @enderror">
  
                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <a class="btn btn-primary" href="{{ route('userinformations.index') }}"> Back</a>
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </div>
</form>
</div>
@endsection