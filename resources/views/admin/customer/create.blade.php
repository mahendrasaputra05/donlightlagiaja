@extends('layouts.app')

@section('content')
<h1 class="text-xl font-bold mb-4">Tambah Customer</h1>

<form action="{{ route('admin.customer.store') }}" method="POST">
    @csrf

    <input name="nama" placeholder="Nama" class="border w-full p-2 mb-3">
    <input name="email" placeholder="Email" class="border w-full p-2 mb-3">
    <textarea name="alamat" placeholder="Alamat" class="border w-full p-2 mb-3"></textarea>

    <button class="bg-pink-500 text-white px-4 py-2 rounded">Simpan</button>
</form>
@endsection
