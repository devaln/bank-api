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
                <label class="col-md-4 col-form-label text-md-end">City Name:</label>
                <div class="col-md-6">
                    <input type="text" name="city_name"  class="form-control" placeholder="eg:'pune'">
                </div>

                <label class="col-md-4 col-form-label text-md-end">Landmark :</label>
                <div class="col-md-6">
                    <input type="text" name="landmark"  class="form-control" placeholder="nearbylocation">
                </div> 
                
                <label class="col-md-4 col-form-label text-md-end">Taluka :</label>
                <div class="col-md-6">
                    <input type="text" name="taluka"  class="form-control" placeholder="">
                </div>
                
                <label class="col-md-4 col-form-label text-md-end">District :</label>
                <div class="col-md-6">
                    <input type="text" name="district"  class="form-control" placeholder="">
                </div>

                <label for="ab" class="col-md-4 col-form-label text-md-end">{{ __('State :') }}</label>
                <div class="col-md-6">
                    <select class="form-select" id="ab" name="state" aria-label="Default select example" required>
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
                </div>

                <label class="col-md-4 col-form-label text-md-end">Pin-Code :</label>
                <div class="col-md-6">
                    <input type="integer" name="pincode"  class="form-control" placeholder="">
                </div>  

                <div class="col-xs-12 col-lg-12 col-md-12 text-center">
                    <a class="btn btn-primary" href="{{ route('addresses.index') }}"> Back</a>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection