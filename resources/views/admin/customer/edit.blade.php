@extends('admin.app')

@section('content')
<div class="container">
    <h3>Edit Customer</h3>

    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $customer->name) }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $customer->email) }}" required>
        </div>
        <div class="form-group">
            <label for="phone">Telepon</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone', $customer->phone) }}">
        </div>
        <div class="form-group">
            <label for="address">Alamat</label>
            <textarea name="address" id="address" class="form-control" rows="4">{{ old('address', $customer->address) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('customers.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
