@extends('layouts.app')
@section('content')
    
<br><br>
    <div class="row text-center">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1 class="text-center bg-dark text-danger"> Customer Detail : </h3>
            </div>
        </div>
    </div><br>
    <div class="row text-center">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Account Number</th>
                    <th>Account Limit/Day</th>
                    <th>Current Balance</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $customer->account_number }}</td>
                    <td>{{ $customer->account_limit }}</td>
                    <td>{{ $customer->current_balance }}</td>
                    
                </tr>
            </tbody>
        </table>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <a class="btn btn-primary" href="{{ route('customers.index') }}"> Back</a>
        </div>
    </div>
@endsection