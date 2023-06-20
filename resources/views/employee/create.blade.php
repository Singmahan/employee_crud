@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-md-6 col-lg-4">
            <form action="{{ route('employees.store') }}" method="POST">
                @csrf
                <div class="card-header">
                    <h5>Create new Employee</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="" class="form-label">Full Name</label>
                        <input type="text" name="fullname" value="{{ old('fullname') }}"
                            class="form-control @error('fullname')is-invalid @enderror">
                        @error('fullname')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Phone Number</label>
                        <input type="text" name="phone_number" value="{{ old('phone_number') }}" class="form-control
                        @error('phone_number')is-invalid @enderror">
                        @error('phone_number')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Job title</label>
                        <input type="text" name="jobtitle" value="{{ old('jobtitle') }}" class="form-control
                        @error('jobtitle')is-invalid @enderror">
                        @error('jobtitle')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary form-control">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
