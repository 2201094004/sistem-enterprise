@extends('admin.app')

@section('content')
<div class="container">
    <h3>Edit Employee: {{ $employee->user_id }}</h3>

    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="user_id" class="form-label">User ID</label>
            <input type="text" name="user_id" id="user_id" class="form-control" value="{{ $employee->user_id }}" required>
        </div>

        <div class="mb-3">
            <label for="depart_id" class="form-label">Department ID</label>
            <input type="text" name="depart_id" id="depart_id" class="form-control" value="{{ $employee->depart_id }}" required>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea name="address" id="address" class="form-control" rows="2" required>{{ $employee->address }}</textarea>
        </div>

        <div class="mb-3">
            <label for="place_of_birth" class="form-label">Place of Birth</label>
            <input type="text" name="place_of_birth" id="place_of_birth" class="form-control" value="{{ $employee->place_of_birth }}" required>
        </div>

        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" name="dob" id="dob" class="form-control" value="{{ $employee->dob }}" required>
        </div>

        <div class="mb-3">
            <label for="religion" class="form-label">Religion</label>
            <input type="text" name="religion" id="religion" class="form-control" value="{{ $employee->religion }}" required>
        </div>

        <div class="mb-3">
            <label for="sex" class="form-label">Sex</label>
            <select name="sex" id="sex" class="form-control" required>
                <option value="Male" {{ $employee->sex == 'Male' ? 'selected' : '' }}>Male</option>
                <option value="Female" {{ $employee->sex == 'Female' ? 'selected' : '' }}>Female</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ $employee->phone }}" required>
        </div>

        <div class="mb-3">
            <label for="salary" class="form-label">Salary</label>
            <input type="number" name="salary" id="salary" class="form-control" value="{{ $employee->salary }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
