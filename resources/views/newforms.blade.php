@extends('layouts.app')
@section('content')
<div class="container"><br><br>
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
  <h1 class="text-left text-danger ml-4 mb-4 mt-4"> Ready to create account in our Bank </h1>
  <div class="card" align="ceneter">
    <div class="body text-left">
    {{-- User Information Form --}}
      <form action="{{ route('userinformations.store') }}" method="POST" enctype="multipart/form-data" >
      @csrf
      <legend class="ml-4 mb-3 mt-4 text-success text-left"><b><u>Fill up the requirements </u></b>:-</legend><hr><br>
      <div class="text-center ml-4" align="center">
        <div class="row mb-3">
            <label for="fname" class="col-md-4 col-form-label text-md-end"> First Name :</label>
            <div class="col-md-4">
                <input type="text" class="form-control" id="fname" name="first_name" placeholder="" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="mname" class="col-md-4 col-form-label text-md-end">Middle Name :</label>
            <div class="col-md-4">
                <input type="text" class="form-control" id="mname" name="middle_name" placeholder="" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="lname" class="col-md-4 col-form-label text-md-end">Last Name :</label>
            <div class="col-md-4">
                <input type="text" class="form-control" id="lname" name="last_name" placeholder="" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="fname" class="col-md-4 col-form-label text-md-end">Contact :</label>
            <div class="col-md-4">
                <input type="integer" maxlength="10" class="form-control" id="fname" name="contact" placeholder="" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="gender" class="col-md-4 col-form-label text-md-end">Gender :</label>
            <div class="col-md-4">
                <input type="radio" class="" id="gender" name="gender" value="Male" placeholder="" required>&nbsp; Male &nbsp;&nbsp;
                <input type="radio" class="" id="gender" name="gender" value="Female" placeholder="" required>&nbsp; Female &nbsp;&nbsp;
                <input type="radio" class="" id="gender" name="gender" value="Other" placeholder="" required>&nbsp; Other &nbsp;&nbsp;
            </div>
        </div>
        <div class="row mb-3">
            <label for="dob" class="col-md-4 col-form-label text-md-end">Birth Date :</label>
            <div class="col-md-4">
                <input type="date" class="form-control" id="dob" name="date_of_birth" placeholder="" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="adhaarno" class="col-md-4 col-form-label text-md-end">Adhaar Card Number :</label>
            <div class="col-md-4">
                <input type="integer" maxlength="12" class="form-control" id="adhaarno" name="adhaar_card_number" placeholder="" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="panno" class="col-md-4 col-form-label text-md-end">PAN Card Number :</label>
            <div class="col-md-4">
                <input type="integer" maxlength="10" class="form-control" id="panno" name="pan_card_number" placeholder="" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="maritial_status" class="col-md-4 col-form-label text-md-end">Maritial Status :</label>
            <div class="col-md-4">
                <input type="radio" class="" id="maritial_status" name="maritial_status" value="Unmarried" placeholder="" required>&nbsp; Unmarried &nbsp;&nbsp;
                <input type="radio" class="" id="maritial_status" name="maritial_status" value="Married" placeholder="" required>&nbsp; Married &nbsp;&nbsp;
                <input type="radio" class="" id="maritial_status" name="maritial_status" value="Divorced" placeholder="" required>&nbsp; Divorced &nbsp;&nbsp;
            </div>
        </div>
        {{-- <div class="row mb-3">
            <label for="image" class="col-md-4 col-form-label text-md-end"> Profile Image :</label>
            <div class="col-md-4">
                <input type="file" class="" id="image" name="image" placeholder="" required>
            </div>
        </div> --}}
        <div class="card-body">
          <form action="" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="file" name="image">
              <input type="submit" value="Upload">
          </form>
        </div>
        </div><hr>
          <form action="{{ route('addresses.store') }}" method="POST">
            <div class="text-center ml-4" align="center">
            @csrf
              <div class="card-body">
                <legend class="text-success text-left ml-4 mt-4 mb-4"><b><u>Address </u></b>:-</legend><hr><br>
                <div class="row mb-3">
                  <label class="col-md-4 col-form-label text-md-end">City Name:</label>
                  <div class="col-md-6">
                    <input type="text" name="city_name"  class="form-control" placeholder="eg:'pune'">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-md-4 col-form-label text-md-end">Landmark :</label>
                  <div class="col-md-6">
                    <input type="text" name="landmark"  class="form-control" placeholder="nearbylocation">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-md-4 col-form-label text-md-end">Taluka :</label>
                  <div class="col-md-6">
                    <input type="text" name="taluka"  class="form-control" placeholder="">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-md-4 col-form-label text-md-end">District :</label>
                  <div class="col-md-6">
                    <input type="text" name="district"  class="form-control" placeholder="">
                  </div>
                </div>
                <div class="row mb-3">
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
                </div>
                <div class="row mb-3">
                  <label class="col-md-4 col-form-label text-md-end">Pin-Code :</label>
                  <div class="col-md-6">
                    <input type="integer" name="pincode"  class="form-control" placeholder="">
                  </div>
                </div>
            </div><hr>
          {{-- </div> --}}
            <form action="{{ route('nominees.store') }}" method="POST">
              <div class="text-center ml-4" align="center">
                @csrf
                    <legend class="text-left text-success mt-4 mb-4 ml-3"><b><u>Nominee Details </u></b>:-</legend><hr><br>
                    <!-- First Name -->
                    <div class="row mb-3">
                      <label class="col-md-4 col-form-label text-md-end" for="fname" >First Name :</label>
                      <div class="col-md-5">
                        <input type="text" id="fname" name="first_name" class="form-control" placeholder="" required>
                      </div>
                    </div>
                    <!-- Middle Name -->
                    <div class="row mb-3">
                      <label class="col-md-4 col-form-label text-md-end" for="mname" >Middle Name :</label>
                      <div class="col-md-5">
                        <input type="text" id="mname" name="middle_name" class="form-control" placeholder="" required>
                      </div>
                    </div>
                    <!-- Last Name -->
                    <div class="row mb-3">
                      <label class="col-md-4 col-form-label text-md-end" for="lname" >Last Name :</label>
                      <div class="col-md-5">
                        <input type="text" id="lname" name="last_name" class="form-control" placeholder="" required>
                      </div>
                    </div>
                    <!-- Contact -->
                    <div class="row mb-3">
                      <label class="col-md-4 col-form-label text-md-end" for="cont" >Contact :</label>
                      <div class="col-md-5">
                        <input type="integer" id="cont" name="contact" class="form-control" placeholder="" required>
                      </div>
                    </div>
                    <!-- Date Of Birth -->
                    <div class="row mb-3">
                      <label class="col-md-4 col-form-label text-md-end" for="dob" >Birth Date :</label>
                      <div class="col-md-5">
                        <input type="date" id="dob" name="date_of_birth" class="form-control" placeholder="" required>
                      </div>
                    </div>
                    <!-- Gender -->
                    <div class="row mb-3">
                      <label class="col-md-4 col-form-label text-md-end" class="col-md-4 col-form-label text-md-end" for="gend" >Gender :</label>
                      <div class="col-md-5">
                        <input type="radio" id="gend" name="gender" value="Male" placeholder="" required>&nbsp;Male&nbsp;&nbsp;
                        <input type="radio" id="gend" name="gender" value="Male" placeholder="" required>&nbsp;Female&nbsp;&nbsp;
                        <input type="radio" id="gend" name="gender" value="Male" placeholder="" required>&nbsp;Other&nbsp;&nbsp;
                      </div>
                    </div>
                    <!-- Relation -->
                    <div class="row mb-3">
                      <label class="col-md-4 col-form-label text-md-end" for="mstatus" > Relations Type :</label>
                      <div class="col-md-5">
                        <input type="radio" id="mstatus" name="relation" value="Father" required>&nbsp;Father&nbsp;&nbsp;
                        <input type="radio" id="mstatus" name="relation" value="Mother" required>&nbsp;Mother&nbsp;&nbsp;
                      </div>
                    </div>
                  </div>
                </div>
              </div><hr>
              <form action="{{ route('addresses.store') }}" method="POST">
                <div class="text-center ml-4" align="center">
                  @csrf
                    <legend class="text-left text-success mt-4 mb-4 ml-4"><b><u>Nominee Address</u></b> :-</legend><hr><br>
                      <div class="row mb-3">
                        <label class="col-md-4 col-form-label text-md-end">City Name:</label>
                        <div class="col-md-6">
                          <input type="text" name="city_name"  class="form-control" placeholder="eg:'pune'">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-md-4 col-form-label text-md-end">Landmark :</label>
                        <div class="col-md-6">
                          <input type="text" name="landmark"  class="form-control" placeholder="nearbylocation">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-md-4 col-form-label text-md-end">Taluka :</label>
                        <div class="col-md-6">
                          <input type="text" name="taluka"  class="form-control" placeholder="">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-md-4 col-form-label text-md-end">District :</label>
                        <div class="col-md-6">
                          <input type="text" name="district"  class="form-control" placeholder="">
                        </div>
                      </div>
                      <div class="row mb-3">
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
                      </div>
                      <div class="row mb-3">
                        <label class="col-md-4 col-form-label text-md-end">Pin-Code :</label>
                        <div class="col-md-6">
                          <input type="integer" name="pincode"  class="form-control" placeholder="">
                        </div>
                      </div>
                  </div>
                  <div class="mb-3 text-center">
                      <a class="btn btn-primary" href="{{ route('nominees.index') }}"> Back</a>
                      <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
              </form>{{-- Nominee Address --}}
          </form>{{-- Nominee  --}}
        </form>{{-- User Address --}}
      </form><!-- User Information -->
    </div>
  </div>

</div>
@endsection