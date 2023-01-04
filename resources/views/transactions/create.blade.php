@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1 class="text-left text-danger col-lg-12">Create Transactions : </h1>
            </div>
        </div>
    </div>
    <div class="card mt-4 mb-4 ml-4 col-lg-7">
    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> something we are problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
    <form action="{{ route('transactions.store') }}" method="POST">
        <legend align="left" class="mt-4 mb-4 ml-2">Fill required detail below :-</legend>
        @csrf
        <div align="center">
            <div class="row">

                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-end">Enter The Ammount :</label>
                    <div class="col-md-5">
                        <input type="integer" name="ammount" value="{{ old('ammount')}}" class="form-control {{ $errors->has('ammount') ? 'is-invalid' : '' }}" placeholder="" >
                        @if($errors->has('ammount'))
                            <div class="invalid-feedback">{{ $errors->first('ammount') }}</div>
                        @endif
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-end">Description :</label>
                    <div class="col-md-5">
                        <input type="text" name="description" value="{{ old('description')}}" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" placeholder="" >
                        @if($errors->has('description'))
                            <div class="invalid-feedback">{{ $errors->first('description') }}</div>
                        @endif
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-end">sender_id :</label>
                    <div class="col-md-5">
                        <input type="integer" name="sender_id" value="{{Auth::user()->id}}" placeholder="{{Auth::user()->id}}" class="form-control {{ $errors->has('sender_id') ? 'is-invalid' : '' }}" >
                        @if($errors->has('sender_id'))
                            <div class="invalid-feedback">{{ $errors->first('sender_id') }}</div>
                        @endif
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="reciever_id" class="col-md-4 col-form-label text-md-end">{{ __('Reciever') }}</label>
                    <div class="col-md-4">
                        <select name="reciever_id" id="reciever_id" value="{{ old('reciever_id')}}" class="custom-select {{ $errors->has('reciever_id') ? 'is-invalid' : '' }}">
                            <option selected>Select user</option>
                            @foreach ($userinformations as $userinformation)
                                <option value="{{ $userinformation->id }}">{{ ucfirst(trans(strtolower($userinformation->first_name))) }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('reciever_id'))
                            <div class="invalid-feedback">{{ $errors->first('reciever_id') }}</div>
                        @endif
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
</div>
@endsection