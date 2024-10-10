@extends('admin.app')

@section('content')
<div class="container">
    <h3>Departments</h3>

    <a href="{{ route('departments.create') }}" class="btn btn-primary mb-3">Tambah Department</a>

    <table class="table table-sm table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Departemen</th>
                <th>Deskripsi</th>
                <th>Actions</th> 
            </tr>
        </thead>
        <tbody>
            @foreach($departments as $department)
                <tr>
                    <td>{{ $loop->iteration }}</td> 
                    <td>{{ $department->name }}</td> 
                    <td>{{ $department->description }}</td> 
                    <td>

                        <a href="{{ route('departments.edit', $department->id) }}" class="btn btn-warning">Edit</a>

                        <form action="{{ route('departments.destroy', $department->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Anda Yakin Data Ini Di Hapus?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
