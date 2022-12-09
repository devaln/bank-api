@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit transactions :-</h2>
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
    <form action="{{ route('transactions.update',$transaction->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        
        <div class="row mb-3">
            <label class="col-md-4 col-form-label text-md-end">Debit Ammount :</label>
            <div class="col-md-5">
                <input type="text" name="debit_ammount" value="{{ $transaction->debit_ammount }}" class="form-control" placeholder="">
            </div>
        </div>
        
        <div class="row mb-3">
            <label class="col-md-4 col-form-label text-md-end">Credit Ammount :</label>
            <div class="col-md-5">
                <input type="text" name="credit_ammount" value="{{ $transaction->credit_ammount }}" class="form-control" placeholder="">
            </div>
        </div>
        
        <div class="mb-3text-center">
            <a class="btn btn-primary" href="{{ route('transactions.index') }}"> Back</a>
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </div>
</form>
</div>
@endsection