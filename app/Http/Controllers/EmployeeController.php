<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    // Store a newly created employee in the database
    public function store(EmployeeRequest $request)
    {
        // Validated data
        $data = $request->validated();

        // Create a new employee with the validated data
        $employee = Employee::create($data);

        return redirect()->route('employees.index')->with('success', 'Employee added successfully.');
    }

    // Display the specified employee
    public function show($id)
    {
        $employee = Employee::find($id);
        return response()->json($employee);
    }

    // Update the specified employee in the database
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.edit', compact('employee'));
    }

    public function update(EmployeeRequest $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->update($request->validated());

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }

    // Remove the specified employee from the database
    public function destroy($id)
    {
        $employee = Employee::find($id);
        if (!$employee) {
            return redirect()->route('employees.index')->with('error', 'Employee not found.');
        }

        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }
}
