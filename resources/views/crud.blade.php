


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crud Operation - Bank-API</title>
  <!-- Bootstrap Script -->
<!--   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script> -->
    <!-- tailwind Script -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
@include('layouts.app')
<div class="container-storage" align="center">
    <h1 class="text-center text-dark mb-10">You can Operate following these operation : </h1>
    <div class="col-lg-4">
        <div class="card border-5px mt-30 w- h-90 mx-auto border-2 drop-shadow-2xl border-gray-700 rounded-lg bg-white px-4 py-8" align="center">
            <div class="card-header text-danger"><legend>{{ __('Crud Operations :-') }}</legend></div>
                <div class="card-body">
                <div class="row mb-3">
                        <a class="col-form-label btn-outline-info" href="{{url('/userinformations')}}">User-Information </a>
                    </div>
                    <div class="row mb-3">
                        <a class="col-form-label btn-outline-info" href="{{url('/customers')}}">Customer </a>
                    </div>
                    <div class="row mb-3">
                        <a class="col-form-label btn-outline-info" href="{{url('/employees')}}">Employee </a>
                    </div>
                    <div class="row mb-3">
                        <a class="col-form-label btn-outline-info" href="{{url('/managers')}}">Manager </a>
                    </div>
                    <div class="row mb-3">
                        <a class="col-form-label btn-outline-info" href="{{url('/departments')}}">Department </a>
                    </div>
                    <div class="row mb-3">
                        <a class="col-form-label btn-outline-info" href="{{url('/nominees')}}">Nominee </a>
                    </div>
                    <div class="row mb-3">
                        <a class="col-form-label btn-outline-info" href="{{url('/addresses')}}">Address </a>
                    </div>
                    <div class="row mb-3">
                        <a class="col-form-label btn-outline-info" href="{{url('/cards')}}"> Cards</a>
                    </div>
                    <div class="row mb-3">
                        <a class="col-form-label btn-outline-info" href="{{url('/transactions')}}"> Transactions</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</body>
</html>