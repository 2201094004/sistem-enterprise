@extends('admin.app')

@section('content')
<div class="container">
    <h3>Tambah Payroll</h3>

    <form action="{{ route('payroll.store') }}" method="POST">
        @csrf
        
        <div class="mb-3">
            <label for="user_id" class="form-label">Employee</label>
            <select name="user_id" id="user_id" class="form-control" required>
                <option value="">Select Employee</option>
                @foreach($employees as $employee)
                    <option value="{{ $employee->user_id }}">{{ $employee->user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="salary" class="form-label">Salary</label>
            <input type="number" name="salary" id="salary" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
