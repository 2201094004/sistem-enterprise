@extends('admin.app')

@section('content')
<div class="container">
    <h3>Payroll</h3>

    <a href="{{ route('payroll.create') }}" class="btn btn-primary mb-3">Tambah Payroll</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-sm table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>User</th>
                <th>Salary</th>
                {{-- <th>Created At</th> --}}
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($payrolls as $payroll)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $payroll->employee->user->name ?? 'N/A' }}</td> <!-- Menampilkan nama user -->
                    <td>{{ number_format($payroll->salary) }}</td>
                    <td>{{ $payroll->created_at->format('Y-m-d') }}</td> <!-- Format tanggal -->
                    <td>
                        <a href="{{ route('payroll.edit', $payroll->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('payroll.destroy', $payroll->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this payroll?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
