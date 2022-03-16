@extends('adminlte::page')

@section('plugins.Datatables', true)

@section('title')
    Vacation Request
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 my-3 mx-auto">
                <div class="card mt-4">
                    <div class="card-header text-center font-weight-bold text-uppercase">
                        <h4>Vacation Request</h4>
                    </div>
                    <div class="card-body">
                        <p class="lead">
                            <b>{{ $employee->fullname }}</b> is currently employed at CompName in the
                            <b>{{ $employee->depart }}</b> department.
                        </p>
                        <p class="lead">
                            He is requesting a vacation starting from <b><input class="border-0" type="date"></b> and
                            ends on <b><input class="border-0" type="date"></b>
                        </p>
                        <p class="m-5">
                            ________
                            ________
                        </p>

                        <div class="my-4">
                            <a id="printIcon" href="#" onclick="print()" class="btn btn-primary">
                                <i class="fas fa-print"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        const print = () => {
            document.getElementById('printIcon').style.display = 'none';
            setTimeout(() => {
                document.getElementById('printIcon').style.display = 'inline-block';
            }, 2000);
            window.print();
        };
    </script>
@endsection
