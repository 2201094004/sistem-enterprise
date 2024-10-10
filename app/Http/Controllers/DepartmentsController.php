<?php

namespace App\Http\Controllers;

use App\Models\Department; 
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{

    public function index()
    {
        $departments = Department::all();
        return view('admin.departments.index', compact('departments'));
    }

    public function create()
    {
        return view('admin.departments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Department::create($request->all());
        return redirect()->route('departments.index')->with('success', 'Department created successfully.');
    }

    // Show the form for editing the specified department
    public function edit($id)
    {
        $department = Department::findOrFail($id);
        return view('admin.departments.edit', compact('department'));
    }

    // Update the specified department in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $department = Department::findOrFail($id);
        $department->update($request->all());

        return redirect()->route('departments.index')->with('success', 'Department updated successfully.');
    }

    public function destroy($id)
    {
        $department = Department::findOrFail($id);
        $department->delete();

        return redirect()->route('departments.index')->with('success', 'Department deleted successfully.');
    }
}
