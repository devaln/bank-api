@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Address :-</h2>
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
    <form action="{{ route('addresses.update',$address->id) }}" method="POST">
    @csrf
    @method('PUT')
    <!-- <div class=""> -->
        <div class="row mb-3 mt-4">
            <label class="col-md-4 col-form-label text-md-end">CityName :</label>
            <div class="col-md-5">
                <input type="text" name="city_name" value="{{ $address->city_name }}" class="form-control" placeholder="">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-4 col-form-label text-md-end">Landmark :</label>
            <div class="col-md-5">
                <input type="text" name="landmark" value="{{ $address->landmark }}" class="form-control" placeholder="">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-4 col-form-label text-md-end">Taluka :</label>
            <div class="col-md-5">
                <input type="text" name="taluka" value="{{ $address->taluka }}" class="form-control" placeholder="">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-4 col-form-label text-md-end">District :</label>
            <div class="col-md-5">
                <input type="text" name="district" value="{{ $address->district }}" class="form-control" placeholder="">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-4 col-form-label text-md-end">State :</label>
            <div class="col-md-5">
                <input type="text" name="state" value="{{ $address->state }}" class="form-control" placeholder="">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-4 col-form-label text-md-end">Country :</label>
            <div class="col-md-5">
                <input type="text" name="country" value="{{ $address->country }}" class="form-control" placeholder="">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-4 col-form-label text-md-end">Pin-code :</label>
            <div class="col-md-5">
                <input type="integer" name="pin_code" value="{{ $address->pin_code }}" class="form-control" placeholder="">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <a class="btn btn-primary" href="{{ route('addresses.index') }}"> Back</a>
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    <!-- </div> -->
</form>
</div>
@endsection