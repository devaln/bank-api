@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1 class="text-center bg-dark text-danger col-lg-12">Create Transactions : </h1>
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
    <form action="{{ route('transactions.store') }}" method="POST">
        <legend align="left">Fill required detail below :-</legend>
        @csrf
        <div align="center">
            <div class="row">
            
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-end">Enter The Debit Ammount :</label>
                    <div class="col-md-5">
                        <input type="float" name="debit_ammount" class="form-control" placeholder="">
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-end">Enter The Credit Ammount :</label>
                    <div class="col-md-5">
                        <input type="float" name="credit_ammount" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="mb-3 text-center">
                    <a class="btn btn-primary" href="{{ route('transactions.index') }}"> Back</a>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection