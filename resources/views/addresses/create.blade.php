@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1 class="text-left text-danger col-lg-12">Create Employee : </h1>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <label class="col-md-4 col-form-label text-md-end">Whoops!</label> something we are problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('addresses.store') }}" method="POST">
        @csrf
        <div  class="card" align="center">
            <div class="card-body">
                <legend align="left">Fill required detail below :-</legend><br>
                {{-- City Name --}}
                <div class="col-6">
                    <label class="form-label">City Name:</label>
                    <input type="text" name="city_name" value="{{ old('city_name')}}"  class="form-control {{ $errors->has('city_name') ? 'is-invalid' : '' }}" required />
                    @if($errors->has('city_name'))
                    <div class="invalid-feedback">
                    {{ $errors->first('city_name') }}
                    </div>
                    @endif
                </div>
                {{-- Lanmark --}}
                <label class="col-md-4 col-form-label text-md-end">Landmark :</label>
                <div class="col-md-6">
                    <input type="text" name="landmark" value="{{ old('landmark')}}"  class="form-control {{ $errors->has('landmark') ? 'is-invalid' : '' }}" required />
                    @if($errors->has('landmark'))
                    <div class="invalid-feedback">
                    {{ $errors->first('landmark') }}
                    </div>
                    @endif
                </div>
                {{-- Taluka --}}
                <label class="col-md-4 col-form-label text-md-end">Taluka :</label>
                <div class="col-md-6">
                    <input type="text" name="taluka" value="{{ old('taluka')}}"  class="form-control {{ $errors->has('taluka') ? 'is-invalid' : '' }}" required />
                    @if($errors->has('taluka'))
                    <div class="invalid-feedback">
                    {{ $errors->first('taluka') }}
                    </div>
                    @endif
                </div>
                {{-- District --}}
                <label class="col-md-4 col-form-label text-md-end">District :</label>
                <div class="col-md-6">
                    <input type="text" name="district" value="{{ old('district')}}"  class="form-control {{ $errors->has('district') ? 'is-invalid' : '' }}" required />
                    @if($errors->has('district'))
                    <div class="invalid-feedback">
                    {{ $errors->first('district') }}
                    </div>
                    @endif
                </div>
                {{-- State --}}
                <label for="ab" class="col-md-4 col-form-label text-md-end">{{ __('State :') }}</label>
                <div class="col-md-6">
                    <select class="form-select {{ $errors->has('state') ? 'is-invalid' : '' }}" id="ab" name="state" aria-label="Default select example" required>
                        <option selected>Open this select menu</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                        <option value="Daman and Diu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Lakshadweep">Lakshadweep</option>
                        <option value="Puducherry">Puducherry</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="West Bengal">West Bengal</option>
                    </select>
                    @if($errors->has('state'))
                    <div class="invalid-feedback">
                    {{ $errors->first('state') }}
                    </div>
                    @endif
                </div>
                {{-- Cuntry --}}
                <label class="col-md-4 col-form-label text-md-end">cuntry :</label>
                <div class="col-md-6">
                    <input type="text" name="cuntry" value="{{ old('cuntry')}}"  class="form-control {{ $errors->has('cuntry') ? 'is-invalid' : '' }}" required />
                    @if($errors->has('cuntry'))
                    <div class="invalid-feedback">
                        {{ $errors->first('cuntry') }}
                    </div>
                    @endif
                </div>
                {{-- Pin Code --}}
                <label class="col-md-4 col-form-label text-md-end">Pin-Code :</label>
                <div class="col-md-6">
                    <input type="text" name="pin_code" value="{{ old('pin_code')}}"  class="form-control {{ $errors->has('pin_code') ? 'is-invalid' : '' }}" required />
                    @if($errors->has('pin_code'))
                    <div class="invalid-feedback">
                    {{ $errors->first('pin_code') }}
                    </div>
                    @endif
                </div>
                {{-- Submit Button --}}
                <div class="col-xs-12 col-lg-12 col-md-12 text-center">
                    <a class="btn btn-primary" href="{{ route('addresses.index') }}"> Back</a>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection