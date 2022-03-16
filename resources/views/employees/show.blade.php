@extends('adminlte::page')


@section('title')
    {{ $employee->fullname }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card mt-4">
                    <div class="card-header text-center font-weight-bold text-uppercase">
                        <h4>{{ $employee->fullname }}</h4>
                    </div>
                    <div class="text-center font-weight-bold text-uppercase mt-2">
                        <a href="{{ route('vacation.request', $employee->id) }}" class="btn btn-outline-secondary">Request
                            vacation</a>
                        <a href="" class="btn btn-outline-secondary">Work certificate</a>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for=" registration_number">Registration Number:</label>
                            <input id="registration_number" value="{{ $employee->registration_number }}"
                                class="form-control" type="text" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label for="fullname">Fullname:</label>
                            <input id="fullname" value="{{ $employee->fullname }}" class="form-control" type="text"
                                disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Email:</label>
                            <input id="email" value="{{ $employee->email }}" class="form-control" type="email" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label for="depart">Department:</label>
                            <input id="depart" value="{{ $employee->depart }}" class="form-control" type="text"
                                disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label for="hire-date">Hire Date:</label>
                            <input id="hire-date" value="{{ $employee->hire_date }}" class="form-control" type="date"
                                disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label for="phone">Phone Number:</label>
                            <input id="phone" value="{{ $employee->phone }}" class="form-control" type="tel" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label for="address">Address:</label>
                            <input id="address" value="{{ $employee->address }}" class="form-control" type="text"
                                disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label for="city">City:</label>
                            <input id="city" value="{{ $employee->city }}" class="form-control" type="text" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
