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
                <th>Foto</th> <!-- Kolom Foto -->
                <th>Status Kerja</th> <!-- Kolom Status Kerja -->
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $employee->user_id }}</td>
                    <td>{{ $employee->department->name ?? 'N/A' }}</td> <!-- Menggunakan relasi untuk mendapatkan nama departemen -->
                    <td>{{ $employee->address }}</td>
                    <td>{{ $employee->place_of_birth }}</td>
                    <td>{{ $employee->dob }}</td>
                    <td>{{ $employee->religion }}</td>
                    <td>{{ $employee->sex }}</td>
                    <td>{{ $employee->phone }}</td>
                    <td>{{ number_format($employee->salary, 2) }}</td>
                    <td>
                        @if($employee->photo)
                            <img src="{{ asset($employee->photo) }}" alt="Foto Karyawan" style="width: 50px; height: auto;">
                        @else
                            No Photo
                        @endif
                    </td>
                    <td>{{ ucfirst($employee->employment_status) }}</td> <!-- Menampilkan status kerja dengan huruf kapital awal -->
                    <td>
                        <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin Data Ini Di Hapus?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
