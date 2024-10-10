@extends('admin.app')

@section('content')
<div class="container">
    <h3>Employees</h3>

    <a href="{{ route('employees.create') }}" class="btn btn-primary mb-3">Tambah Employee</a>

    <table class="table table-sm table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>User ID</th>
                <th>Departments</th>
                <th>Alamat</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Agama</th>
                <th>Gender</th>
                <th>Phone</th>
                <th>Gaji</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $employee->user_id }}</td>
                    <td>{{ $employee->depart_id }}</td>
                    <td>{{ $employee->address }}</td>
                    <td>{{ $employee->place_of_birth }}</td>
                    <td>{{ $employee->dob }}</td>
                    <td>{{ $employee->religion }}</td>
                    <td>{{ $employee->sex }}</td>
                    <td>{{ $employee->phone }}</td>
                    <td>{{ number_format($employee->salary) }}</td>
                    <td>
                        <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this employee?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
