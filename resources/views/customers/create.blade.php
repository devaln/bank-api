@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1 class="text-left text-danger col-lg-12 mt-4">Create Customer : </h1>
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
    <form action="{{ route('customers.store') }}" method="POST">
        <div class="card col-lg-6">
        <legend class="mt-4 mb-4 ml-4" align="left">Fill required detail below :-</legend>
        @csrf
        <div align="center">
            <div class="row mb-3">
                <label class="col-md-4 col-form-label text-md-end">Account Number :</label>
                <div class="col-md-5">
                    <input type="integer" name="account_number" class="form-control" placeholder="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-md-4 col-form-label text-md-end">Account Limit :</label>
                <div class="col-md-5">
                    <input type="integer" name="account_limit" class="form-control" placeholder="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-md-4 col-form-label text-md-end">Current Balance :</label>
                <div class="col-md-5">
                    <input type="integer" name="current_balance" class="form-control" placeholder="">
                </div>
            </div>
                <div class="col-xs-12 col-lg-12 col-md-12 text-center">
                    <a class="btn btn-primary" href="{{ route('customers.index') }}"> Back</a>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection