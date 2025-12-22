@extends('layouts.main')

@section('title', 'Produk')

@section('content')
<h1 class="text-2xl font-bold mb-4">Daftar Produk</h1>

<table class="w-full bg-white rounded shadow">
    <thead class="bg-gray-200">
        <tr>
            <th class="p-2 text-left">Nama</th>
            <th class="p-2">Harga</th>
            <th class="p-2">Stok</th>
        </tr>
    </thead>
    <tbody>
        @foreach($produks as $produk)
        <tr class="border-t">
            <td class="p-2">{{ $produk->nama_produk }}</td>
            <td class="p-2 text-center">Rp {{ number_format($produk->harga) }}</td>
            <td class="p-2 text-center">{{ $produk->stok }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
