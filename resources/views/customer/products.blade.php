@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-bold mb-6">Our Products</h1>

@if($produks->isEmpty())
    <p class="text-gray-500">Produk belum tersedia.</p>
@endif

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

@foreach($produks as $produk)
<div class="bg-white rounded-3xl shadow hover:shadow-lg transition p-5 flex flex-col">

    {{-- IMAGE --}}
    <img
        src="{{ $produk->image ?? 'https://via.placeholder.com/300x200' }}"
        class="w-full h-40 object-cover rounded-2xl mb-4"
        alt="{{ $produk->nama_produk }}"
    >

    {{-- INFO --}}
    <div class="flex-1">
        <h2 class="text-lg font-semibold">
            {{ $produk->nama_produk }}
        </h2>

        <p class="text-sm text-gray-500 mt-1">
            {{ $produk->deskripsi ?? 'Donat lembut dengan topping pilihan' }}
        </p>
    </div>

    {{-- PRICE + ACTION --}}
    <div class="flex items-center justify-between mt-5">
        <span class="text-pink-500 font-bold text-lg">
            Rp {{ number_format($produk->harga) }}
        </span>

        <form method="POST" action="{{ route('customer.cart.add') }}">
            @csrf
            <input type="hidden" name="id" value="{{ $produk->id }}">
            <input type="hidden" name="name" value="{{ $produk->nama_produk }}">
            <input type="hidden" name="price" value="{{ $produk->harga }}">

            <button
                class="bg-gradient-to-r from-pink-500 to-teal-400 text-white px-5 py-2 rounded-full text-sm font-semibold hover:opacity-90 transition">
                Add to Cart
            </button>
        </form>
    </div>

</div>
@endforeach

</div>

@endsection
