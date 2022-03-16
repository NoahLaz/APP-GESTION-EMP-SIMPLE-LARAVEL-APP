@extends('adminlte::page')

@section('plugins.Datatables', true)

@section('title')
    Employees List
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 my-3 mx-auto">

                <div class="card mt-4">
                    <div class="card-header text-center font-weight-bold text-uppercase">
                        <h4>List Of Employees</h4>
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Registration Number</th>
                                    <th>Full name</th>
                                    <th>Department</th>
                                    <th>Hired</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $key => $employee)
                                    <tr>
                                        <td>{{ $employee->registration_number }}</td>
                                        <td>{{ $employee->fullname }}</td>
                                        <td>{{ $employee->depart }}</td>
                                        <td>{{ $employee->hire_date }}</td>
                                        <td class="d-flex justify-content-around">
                                            <a href="{{ route('employees.show', $employee->id) }}"
                                                class="btn btn-sm btn-primary">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('employees.edit', $employee->id) }}"
                                                class="btn btn-sm btn-warning">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form id="deleteForm" method="POST"
                                                action="{{ route('employees.destroy', $employee->id) }}">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <button onclick="deleteEmp()" type="submit" class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'excel', 'csv', 'pdf', 'print', 'colvis'
                ],
            });
        });

        function deleteEmp() {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#deleteForm').submit();
                }
            })
        }
    </script>
    @if (session()->has('success'))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: "{{ session()->get('success') }}",
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif
@endsection
