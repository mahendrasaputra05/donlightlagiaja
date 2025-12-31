@extends('layouts.app')

@section('content')
<h1 class="text-xl font-bold mb-4">Tambah User</h1>

<form action="{{ route('admin.user.store') }}" method="POST">
@csrf

<input name="name" placeholder="Nama" class="border w-full p-2 mb-3">
<input name="email" placeholder="Email" class="border w-full p-2 mb-3">
<input name="password" type="password" placeholder="Password" class="border w-full p-2 mb-3">

<select name="role" class="border w-full p-2 mb-3">
    <option value="owner">Owner</option>
    <option value="admin">Admin</option>
    <option value="kasir">Kasir</option>
</select>

<textarea name="alamat" placeholder="Alamat" class="border w-full p-2 mb-3"></textarea>

<button class="bg-pink-500 text-white px-4 py-2 rounded">Simpan</button>
</form>
@endsection
