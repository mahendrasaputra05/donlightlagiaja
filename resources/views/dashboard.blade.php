@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6">Dashboard Admin</h1>

<!-- SATU GRID SAJA (INI KUNCI) -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-stretch">

    <!-- CARD ORDER -->
    <a href="{{ route('admin.order.index') }}"
       class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition flex flex-col justify-between">
        <div>
            <h2 class="text-lg font-semibold mb-2">Kelola Order</h2>
            <p class="text-gray-500">Lihat dan kelola pesanan customer</p>
        </div>
    </a>

    <!-- CARD PRODUK -->
    <a href="{{ route('admin.produk.index') }}"
       class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition flex flex-col justify-between">
        <div>
            <h2 class="text-lg font-semibold mb-2">Kelola Produk</h2>
            <p class="text-gray-500">Tambah, ubah, dan hapus produk Donlight</p>
        </div>
    </a>

</div>
@endsection
