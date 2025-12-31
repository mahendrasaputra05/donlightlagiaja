@extends('layouts.app')

@section('content')
<h1 class="text-xl font-bold mb-4">Edit Customer</h1>

<form action="{{ route('admin.customer.update', $customer) }}" method="POST">
    @csrf @method('PUT')

    <input name="nama" value="{{ $customer->nama }}" class="border w-full p-2 mb-3">
    <input name="email" value="{{ $customer->email }}" class="border w-full p-2 mb-3">
    <textarea name="alamat" class="border w-full p-2 mb-3">{{ $customer->alamat }}</textarea>

    <button class="bg-pink-500 text-white px-4 py-2 rounded">Update</button>
</form>
@endsection
