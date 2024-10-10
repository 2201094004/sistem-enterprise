@extends('admin.app')

@section('content')
<div class="container">
    <h3>Tambah Employee</h3>

    <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="user_id" class="form-label">User ID</label>
            <input type="text" name="user_id" id="user_id" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="depart_id" class="form-label">Department ID</label>
            <input type="text" name="depart_id" id="depart_id" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea name="address" id="address" class="form-control" rows="2" required></textarea>
        </div>

        <div class="mb-3">
            <label for="place_of_birth" class="form-label">Place of Birth</label>
            <input type="text" name="place_of_birth" id="place_of_birth" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" name="dob" id="dob" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="religion" class="form-label">Religion</label>
            <input type="text" name="religion" id="religion" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="sex" class="form-label">Sex</label>
            <select name="sex" id="sex" class="form-control" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="salary" class="form-label">Salary</label>
            <input type="number" name="salary" id="salary" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
