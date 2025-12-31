@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Data Customer</h1>

<a href="{{ route('admin.customer.create') }}" class="bg-pink-500 text-white px-4 py-2 rounded">
    + Tambah Customer
</a>

<table class="w-full mt-4 bg-white rounded shadow">
    <thead>
        <tr class="border-b">
            <th class="p-2">Nama</th>
            <th class="p-2">Email</th>
            <th class="p-2">Alamat</th>
            <th class="p-2">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($customers as $customer)
        <tr class="border-b">
            <td class="p-2">{{ $customer->nama }}</td>
            <td class="p-2">{{ $customer->email }}</td>
            <td class="p-2">{{ $customer->alamat }}</td>
            <td class="p-2 flex gap-2">
                <a href="{{ route('admin.customer.edit', $customer) }}" class="text-blue-500">Edit</a>
                <form action="{{ route('admin.customer.destroy', $customer) }}" method="POST">
                    @csrf @method('DELETE')
                    <button class="text-red-500">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
