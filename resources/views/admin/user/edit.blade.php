@extends('layouts.app')

@section('content')
<h1 class="text-xl font-bold mb-4">Edit User</h1>

<form action="{{ route('admin.user.update', $user) }}" method="POST">
@csrf @method('PUT')

<input name="name" value="{{ $user->name }}" class="border w-full p-2 mb-3">
<input name="email" value="{{ $user->email }}" class="border w-full p-2 mb-3">

<select name="role" class="border w-full p-2 mb-3">
    <option value="owner" {{ $user->role == 'owner' ? 'selected' : '' }}>Owner</option>
    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
    <option value="kasir" {{ $user->role == 'kasir' ? 'selected' : '' }}>Kasir</option>
</select>

<input name="password" type="password" placeholder="Password (opsional)" class="border w-full p-2 mb-3">

<textarea name="alamat" class="border w-full p-2 mb-3">{{ $user->alamat }}</textarea>

<button class="bg-pink-500 text-white px-4 py-2 rounded">Update</button>
</form>
@endsection
