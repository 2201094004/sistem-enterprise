@extends('admin.app')

@section('content')
<div class="container">
    <h3>Edit Department</h3>

    <form action="{{ route('departments.update', $department->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nama Departemen</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $department->name) }}" required>
        </div>
        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea name="description" id="description" class="form-control" rows="4" required>{{ old('description', $department->description) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('departments.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
