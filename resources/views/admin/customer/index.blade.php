@extends('admin.app')

@section('content')
<div class="container">
    <h3>Customers</h3>

    <a href="{{ route('customers.create') }}" class="btn btn-primary mb-3">Tambah Customer</a>

    <table class="table table-sm table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>{{ $customer->address }}</td>
                    <td>
                        <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-warning">Edit</a>

                        <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" style="display:inline-block;">
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
