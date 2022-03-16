@extends('adminlte::page')


@section('title')
    Create New Employee
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card mt-4">
                    <div class="card-header text-center font-weight-bold text-uppercase">
                        <h4>Create New Employee</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('employees.store') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <label for=" registration_number">Registration Number:</label>
                                <input id="registration_number" maxlength="8" value="{{ old('registration_number') }}"
                                    class="form-control" type="text" name="registration_number"
                                    placeholder="Registration Number">
                                {!! $errors->first('registration_number', '<p class="text-danger">:message</p>') !!}
                            </div>
                            <div class="form-group mb-3">
                                <label for="fullname">Fullname:</label>
                                <input id="fullname" value="{{ old('fullname') }}" class="form-control" type="text"
                                    name="fullname" placeholder="Fullname">
                                {!! $errors->first('fullname', '<p class="text-danger">:message</p>') !!}
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email:</label>
                                <input id="email" value="{{ old('email') }}" class="form-control" type="email"
                                    name="email" placeholder="Email">
                                {!! $errors->first('email', '<p class="text-danger">:message</p>') !!}
                            </div>
                            <div class="form-group mb-3">
                                <label for="depart">Department:</label>
                                <input id="depart" value="{{ old('depart') }}" class="form-control" type="text"
                                    name="depart" placeholder="Department">
                                {!! $errors->first('depart', '<p class="text-danger">:message</p>') !!}
                            </div>
                            <div class="form-group mb-3">
                                <label for="hire-date">Hire Date:</label>
                                <input id="hire-date" value="{{ old('hire_date') }}" class="form-control" type="date"
                                    name="hire_date">
                                {!! $errors->first('hire_date', '<p class="text-danger">:message</p>') !!}
                            </div>
                            <div class="form-group mb-3">
                                <label for="phone">Phone Number:</label>
                                <input id="phone" value="{{ old('phone') }}" class="form-control" type="tel"
                                    name="phone" placeholder="Phone Number">
                                {!! $errors->first('phone', '<p class="text-danger">:message</p>') !!}
                            </div>
                            <div class="form-group mb-3">
                                <label for="address">Address:</label>
                                <input id="address" value="{{ old('address') }}" class="form-control" type="text"
                                    name="address" placeholder="Address">
                                {!! $errors->first('address', '<p class="text-danger">:message</p>') !!}
                            </div>
                            <div class="form-group mb-3">
                                <label for="city">City:</label>
                                <input id="city" value="{{ old('city') }}" class="form-control" type="text" name="city"
                                    placeholder="City">
                                {!! $errors->first('city', '<p class="text-danger">:message</p>') !!}
                            </div>

                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
