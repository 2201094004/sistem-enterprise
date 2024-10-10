<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmployeesController extends Controller
{
    /**
     * Display a listing of employees.
     */
    public function index()
    {
        $employees = Employees::all(); // Retrieve all employees from the database
        return view('admin.employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new employee.
     */
    public function create()
    {
        return view('admin.employees.create'); // Show the employee creation form
    }

    /**
     * Store a newly created employee in storage.
     */
    public function store(Request $request)
    {
        // Validate input fields
        $data = $request->validate([
            'user_id'        => 'required|exists:users,id', // Ensure the user exists in the users table
            'depart_id'      => 'required|exists:departments,id', // Ensure the department exists
            'address'        => 'required',
            'place_of_birth' => 'required',
            'dob'            => 'required|date',
            'religion'       => 'required',
            'sex'            => 'required',
            'phone'          => 'required|numeric',
            'salary'         => 'required|numeric',
            'photo'          => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate photo
            'employment_status' => 'required|in:active,inactive', // Validate employment status
        ]);

        // Handle photo upload
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('photos', 'public');
        }

        Employees::create($data); // Save the validated data to the database

        return redirect()->route('employees.index')->with('success', 'Employee created successfully!');
    }

    /**
     * Show the form for editing the specified employee.
     */
    public function edit($id)
    {
        $employee = Employees::findOrFail($id); // Find the employee by ID
        return view('admin.employees.edit', compact('employee')); // Show the employee edit form
    }

    /**
     * Update the specified employee in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate input fields
        $data = $request->validate([
            'user_id'        => 'required|exists:users,id',
            'depart_id'      => 'required|exists:departments,id',
            'address'        => 'required',
            'place_of_birth' => 'required',
            'dob'            => 'required|date',
            'religion'       => 'required',
            'sex'            => 'required',
            'phone'          => 'required|numeric',
            'salary'         => 'required|numeric',
            'photo'          => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate photo
            'employment_status' => 'required|in:active,inactive', // Validate employment status
        ]);

        $employee = Employees::findOrFail($id); // Find the employee by ID

        // Handle photo upload if exists
        if ($request->hasFile('photo')) {
            // Delete old photo if exists
            if ($employee->photo) {
                Storage::disk('public')->delete($employee->photo);
            }
            $data['photo'] = $request->file('photo')->store('photos', 'public');
        }

        $employee->update($data); // Update the employee data in the database

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully!');
    }

    /**
     * Remove the specified employee from storage.
     */
    public function destroy($id)
    {
        $employee = Employees::findOrFail($id); // Find the employee by ID

        // Delete photo if exists
        if ($employee->photo) {
            Storage::disk('public')->delete($employee->photo);
        }

        $employee->delete(); // Delete the employee from the database

        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully!');
    }
}
