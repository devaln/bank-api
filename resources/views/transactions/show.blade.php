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
            <tbody>
                <tr>
                    <td>{{ $transaction->debit_ammount }}</td>
                    <td>{{ $transaction->credit_ammount }}</td>
                </tr>
            </tbody>
        </table>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <a class="btn btn-primary" href="{{ route('transactions.index') }}"> Back</a>
        </div>
    </div>
</div>
@endsection