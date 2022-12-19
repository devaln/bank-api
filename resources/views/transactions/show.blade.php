@extends('layouts.app')
@section('content')
<div class="container">
<br><br>
    <div class="row text-center">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1 class="text-left  text-danger"> Transaction Detail : </h3>
            </div>
        </div>
    </div><br>
    <div class="row text-center">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Debit Ammount</th>
                    <th>Credit Ammount</th>
                </tr>
            </thead>
            {{-- @foreach ($transactions as $transaction) --}}
            <tbody>
                <tr>
                    <td>{{ $transaction->ammount }}</td>
                    <td>{{ $transaction->description }}</td>
                </tr>
            </tbody>
            {{-- @endforeach --}}
        </table>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <a class="btn btn-primary" href="{{ route('transactions.index') }}"> Back</a>
        </div>
    </div>
</div>
@endsection