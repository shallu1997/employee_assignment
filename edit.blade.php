@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Employee</h2>

        <!-- Your update form goes here -->
        <form action="{{ route('employees.update', $employee->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name (mandatory)</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $employee->name) }}" required>
            </div>

            <div class="form-group">
                <label for="dob">DOB</label>
                <input type="date" name="dob" id="dob" class="form-control"  value="{{ old('name', $employee->dob) }}"">
            </div>

            <div class="form-group">
                <label for="salary">Salary</label>
                <input type="number" name="salary" id="salary" class="form-control"  value="{{ old('name', $employee->salary) }}"required>
            </div>

            <div class="form-group">
                <label for="joining_date">Joining Date</label>
                <input type="date" name="joining_date" id="joining_date" class="form-control"  value="{{ old('name', $employee->joining_date) }}"">
            </div>

            <div class="form-group">
                <label for="relieving_date">Relieving Date</label>
                <input type="date" name="relieving_date" id="relieving_date" class="form-control"  value="{{ old('name', $employee->relieving_date) }}"">
            </div>

            <div class="form-group">
                <label for="contact_number">Contact Number</label>
                <input type="text" name="contact_number" id="contact_number" class="form-control"  value="{{ old('name', $employee->contact_number) }}"">
            </div>

            <div class="form-group">
                <label for="status">Status (active/inactive)</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>
            <!-- Your form fields go here -->

            <button type="submit" class="btn btn-primary">Update Employee</button>
        </form>
    </div>
@endsection
