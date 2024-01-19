@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Employee Listing</h2>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>DOB</th>
                    <th>Salary</th>
                    <th>Joining Date</th>
                    <th>Relieving Date</th>
                    <th>Contact Number</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Loop through each employee and display their information -->
                @foreach($employees as $employee)
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->dob }}</td>
                        <td>{{ $employee->salary }}</td>
                        <td>{{ $employee->joining_date }}</td>
                        <td>{{ $employee->relieving_date }}</td>
                        <td>{{ $employee->contact_number }}</td>
                        <td>{{ $employee->status }}</td>
                        <td>

                                <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary">Edit</a>

                            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
