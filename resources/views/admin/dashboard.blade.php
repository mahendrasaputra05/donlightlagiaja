@extends('layouts.admin')

@section('content')
<h1 class="text-2xl font-bold mb-6">Dashboard Admin</h1>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6">

    <a href="{{ route('admin.order.index') }}"
       class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
        <h2 class="text-lg font-semibold mb-2">Kelola Order</h2>
        <p class="text-gray-500">Lihat dan kelola pesanan customer</p>
    </a>

    <a href="{{ route('admin.produk.index') }}"
       class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
        <h2 class="text-lg font-semibold mb-2">Kelola Produk</h2>
        <p class="text-gray-500">Tambah, ubah, dan hapus produk Donlight</p>
    </a>

</div>
@endsection
