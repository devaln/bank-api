@extends('layouts.app')
@section('content')
<div class="container">
<br><br>
    <div class="row text-center">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1 class="text-left  text-danger"> card Detail : </h3>
            </div>
        </div>
    </div><br>
    <div class="row text-center">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>title</th>
                    <th>Card Number</th>
                    <th>Expiry Date</th>
                    <th>CVV Code</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $card->title }}</td>
                    <td>{{ $card->number }}</td>
                    <td>{{ $card->expiry_date }}</td>
                    <td>{{ $card->cvv_code }}</td>
                </tr>
            </tbody>
        </table>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <a class="btn btn-primary" href="{{ route('cards.index') }}"> Back</a>
        </div>
    </div>
</div>
@endsection