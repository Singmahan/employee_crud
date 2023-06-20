@extends('layout.main')
@section('content')
    <div class="card mb-5">
        <div class="card-body p-0">
            <div class="card-body">
                <div class="row">
                    <div class="col-auto">
                        <a href="{{ route('employees.create') }}" class="btn btn-primary btn-sm">Add Employee</a>
                    </div>
                    <form action="?" class="col-auto ms-auto">
                        <div class="input-group">
                            <input type="text" name="search" value="{{ request()->search }}" placeholder="search" class="form-control">
                            <button type="submit" class="btn btn-primary btn-sm">Search</button>
                        </div>
                    </form>
                    {{-- alert  --}}
                    @if (session('store'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Saved Successfully !</strong>Employee has been successfully saved.
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif
                </div>
            </div>
            <table class="table m-0">
                <thead class="table-dark">
                    <tr align="center">
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Phone Number</th>
                        <th>Job title</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                        <tr>
                            <td align="center">{{ $employee->id }}</td>
                            <td>{{ $employee->fullname }}</td>
                            <td align="center">{{ $employee->phone_number }}</td>
                            <td>{{ $employee->jobtitle }}</td>
                            <td align="center">
                                <a href="#" class="btn btn-success btn-sm">edit</a>
                                <a href="#" class="btn btn-danger btn-sm">delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-body pb-0">
            {{ $employees->links('pagination::bootstrap-5'); }}
        </div>
    </div>

@endsection
