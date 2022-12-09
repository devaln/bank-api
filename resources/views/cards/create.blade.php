@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1 class="text-center bg-dark text-danger col-lg-12">Create Card : </h1>
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
    <form action="{{ route('cards.store') }}" method="POST">
        <legend align="left">Fill required detail below :-</legend>
        @csrf
        <div align="center">
            <div class="row">
            
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-end">Title :</label>
                    <div class="col-md-5">
                        <input type="radio" name="title" value="Debit-card" placeholder="">&nbsp;Debit-Card&nbsp;&nbsp;
                        <input type="radio" name="title" value="Credit-card" placeholder="">&nbsp;credit-Card&nbsp;&nbsp;
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-end">Number :</label>
                    <div class="col-md-5">
                        <input type="integer" name="number" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-end">Expiry Date :</label>
                    <div class="col-md-5">
                        <input type="date" name="expiry_date" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-end">CVV Code :</label>
                    <div class="col-md-5">
                        <input type="integer" name="cvv_code" class="form-control" placeholder="">
                    </div>
                </div>

                <div class="mb-3 text-center">
                    <a class="btn btn-primary" href="{{ route('cards.index') }}"> Back</a>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection