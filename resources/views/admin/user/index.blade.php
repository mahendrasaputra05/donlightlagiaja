@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Data User</h1>

<a href="{{ route('admin.user.create') }}"
   class="bg-pink-500 text-white px-4 py-2 rounded">
    + Tambah User
</a>

<table class="w-full mt-4 bg-white shadow rounded">
    <thead>
        <tr class="border-b">
            <th class="p-2">Nama</th>
            <th class="p-2">Email</th>
            <th class="p-2">Role</th>
            <th class="p-2">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr class="border-b">
            <td class="p-2">{{ $user->name }}</td>
            <td class="p-2">{{ $user->email }}</td>
            <td class="p-2">{{ ucfirst($user->role) }}</td>
            <td class="p-2 flex gap-2">
                <a href="{{ route('admin.user.edit', $user) }}" class="text-blue-500">Edit</a>
                <form action="{{ route('admin.user.destroy', $user) }}" method="POST">
                    @csrf @method('DELETE')
                    <button class="text-red-500">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
