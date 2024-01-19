<!-- resources/views/employees/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add Employee</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('employees.store') }}" method="POST">
            @csrf

            <!-- Display validation errors -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-group">
                <label for="name">Name (mandatory)</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
            </div>

            <div class="form-group">
                <label for="dob">DOB</label>
                <input type="date" name="dob" id="dob" class="form-control" value="{{ old('dob') }}">
            </div>

            <div class="form-group">
                <label for="salary">Salary</label>
                <input type="number" name="salary" id="salary" class="form-control" value="{{ old('salary') }}" required>
            </div>

            <div class="form-group">
                <label for="joining_date">Joining Date</label>
                <input type="date" name="joining_date" id="joining_date" class="form-control" value="{{ old('joining_date') }}">
            </div>

            <div class="form-group">
                <label for="relieving_date">Relieving Date</label>
                <input type="date" name="relieving_date" id="relieving_date" class="form-control" value="{{ old('relieving_date') }}">
            </div>

            <div class="form-group">
                <label for="contact_number">Contact Number</label>
                <input type="text" name="contact_number" id="contact_number" class="form-control" value="{{ old('contact_number') }}">
            </div>

            <div class="form-group">
                <label for="status">Status (active/inactive)</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Add Employee</button>
        </form>
    </div>
@endsection
