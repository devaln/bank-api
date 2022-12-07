@extends('layouts.app')
@section('content')
<div class="container">
<br><br>
    <div class="row text-center">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1 class="text-center bg-dark text-danger"> address Detail : </h3>
            </div>
        </div>
    </div><br>
    <div class="row text-center">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>City Name</th>
                    <th>Landmark</th>
                    <th>Taluka</th>
                    <th>District</th>
                    <th>State</th>
                    <th>Country</th>
                    <th>Pin Code</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $address->city_name }}</td>
                    <td>{{ $address->landmark }}</td>
                    <td>{{ $address->taluka }}</td>
                    <td>{{ $address->district }}</td>
                    <td>{{ $address->state }}</td>
                    <td>{{ $address->country }}</td>
                    <td>{{ $address->pin_code }}</td>
                </tr>
            </tbody>
        </table>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <a class="btn btn-primary" href="{{ route('addresses.index') }}"> Back</a>
        </div>
    </div>
</div>
@endsection