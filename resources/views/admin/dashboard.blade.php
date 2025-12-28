@extends('layouts.app')

@section('content')
<div class="space-y-6">

    <h1 class="text-2xl font-bold text-gray-800">
        Dashboard Admin
    </h1>

    {{-- Quick Actions --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <a href="{{ route('admin.produk.index') }}"
           class="bg-white rounded-xl shadow p-6 hover:shadow-lg transition">
            <h2 class="text-lg font-semibold mb-2">Kelola Produk</h2>
            <p class="text-gray-500 text-sm">
                Tambah, ubah, dan hapus produk Donlight
            </p>
        </a>

        <a href="{{ route('admin.order.index') }}"
           class="bg-white rounded-xl shadow p-6 hover:shadow-lg transition">
            <h2 class="text-lg font-semibold mb-2">Kelola Order</h2>
            <p class="text-gray-500 text-sm">
                Lihat dan kelola pesanan customer
            </p>
        </a>
    </div>

</div>
@endsection
