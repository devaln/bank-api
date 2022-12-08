@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit managers :-</h2>
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
    <form action="{{ route('managers.update',$manager->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        
        <div class="row mb-3">
            <label class="col-md-4 col-form-label text-md-end">Designation :</label>
            <div class="col-md-5">
                <input type="text" name="designation" value="{{ $manager->designation }}" class="form-control" placeholder="">
            </div>
        </div>
        
        
        <div class="mb-3text-center">
            <a class="btn btn-primary" href="{{ route('managers.index') }}"> Back</a>
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </div>
</form>
</div>
@endsection