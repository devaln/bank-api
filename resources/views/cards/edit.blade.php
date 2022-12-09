@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit cards :-</h2>
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
    <form action="{{ route('cards.update',$card->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        
        <div class="row mb-3">
            <label class="col-md-4 col-form-label text-md-end">Title :</label>
            <div class="col-md-5">
                <input type="radio" name="title" value="{{ $card->title }}" class="form-control" value="Debit-card" placeholder="">&nbsp;Debit-card&nbsp;&nbsp;
                <input type="radio" name="title" value="{{ $card->title }}" class="form-control" value="Credit-card" placeholder="">&nbsp;Debit-card&nbsp;&nbsp;
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-4 col-form-label text-md-end">Number :</label>
            <div class="col-md-5">
                <input type="text" name="number" value="{{ $card->number }}" class="form-control" placeholder="">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-4 col-form-label text-md-end">Expiry Date :</label>
            <div class="col-md-5">
                <input type="text" name="expiry_date" value="{{ $card->expiry_date }}" class="form-control" placeholder="">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-4 col-form-label text-md-end">CVV Code :</label>
            <div class="col-md-5">
                <input type="text" name="cvv_code" value="{{ $card->cvv_code }}" class="form-control" placeholder="">
            </div>
        </div>
        
        
        <div class="mb-3text-center">
            <a class="btn btn-primary" href="{{ route('cards.index') }}"> Back</a>
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </div>
</form>
</div>
@endsection