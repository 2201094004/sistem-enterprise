@extends('admin.app')

@section('content')
<div class="container">
    <h3>Tambah Customer</h3>

    <form action="{{ route('customers.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3"> <!-- Menambahkan mb-3 untuk margin bawah -->
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group mb-3"> <!-- Menambahkan mb-3 untuk margin bawah -->
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group mb-3"> <!-- Menambahkan mb-3 untuk margin bawah -->
            <label for="phone">Telepon</label>
            <input type="text" name="phone" id="phone" class="form-control">
        </div>
        <div class="form-group mb-3"> <!-- Menambahkan mb-3 untuk margin bawah -->
            <label for="address">Alamat</label>
            <textarea name="address" id="address" class="form-control" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
