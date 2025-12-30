@extends('layouts.app')

@section('content')
<div class="space-y-10 pb-20">

    <!-- HERO -->
    <section class="rounded-3xl p-10 bg-gradient-to-r from-pink-400 via-purple-300 to-teal-300 shadow-lg flex flex-col md:flex-row items-center gap-8">
        <div class="flex-1 text-white">
            <span class="inline-block bg-white/30 px-4 py-1 rounded-full text-sm mb-4">
                New Flavors Available!
            </span>

            <h1 class="text-4xl font-bold leading-tight mb-4">
                Sweet Moments,<br>Delivered Fresh
            </h1>

            <p class="opacity-90 mb-6">
                Order your favorite donuts and drinks, delivered hot to your doorstep in 30 minutes or less!
            </p>

            <a href="{{ route('customer.products') }}"
               class="inline-flex items-center gap-2 bg-white text-pink-500 font-semibold px-6 py-3 rounded-full shadow hover:scale-105 transition">
                ORDER NOW →
            </a>
        </div>

        <div class="flex-1">
            <img src="/images/hero-donlight.png"
                 class="rounded-2xl w-full object-cover"
                 alt="Donlight">
        </div>
    </section>

    <!-- PROMO -->
    <section class="rounded-3xl p-6 bg-gradient-to-r from-pink-400 to-teal-300 text-white flex justify-between items-center shadow">
        <div>
            <span class="text-sm opacity-80">Limited Time Offer</span>
            <h2 class="text-2xl font-bold">Get 30% OFF on your first order!</h2>
        </div>
        <button class="bg-white text-pink-500 px-6 py-2 rounded-full font-semibold hover:scale-105 transition">
            CLAIM OFFER →
        </button>
    </section>

    <!-- CATEGORY -->
    <section>
        <h2 class="text-2xl font-bold mb-4">Shop by Category</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach (['Donuts', 'Drinks', 'Bundles'] as $cat)
            <div class="rounded-2xl bg-pink-400 text-white p-8 flex flex-col items-center justify-center shadow hover:scale-105 transition cursor-pointer">
                <span class="text-xl font-semibold">{{ $cat }}</span>
            </div>
            @endforeach
        </div>
    </section>

    <!-- POPULAR ITEMS -->
    <section>
        <h2 class="text-2xl font-bold mb-6">Popular Items</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            @foreach(\App\Models\Produk::take(6)->get() as $produk)
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:scale-105 transition">

                <img src="{{ $produk->image ?? '/images/donut.jpg' }}"
                     class="h-48 w-full object-cover">

                <div class="p-5 space-y-2">
                    <h3 class="font-semibold text-lg">{{ $produk->nama_produk }}</h3>
                    <p class="text-sm text-gray-500">
                        Donat lembut dengan topping pilihan
                    </p>

                    <div class="flex justify-between items-center mt-4">
                        <span class="text-pink-500 font-bold">
                            Rp {{ number_format($produk->harga) }}
                        </span>

                        <form action="{{ route('customer.cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $produk->id }}">
                            <input type="hidden" name="name" value="{{ $produk->nama_produk }}">
                            <input type="hidden" name="price" value="{{ $produk->harga }}">
                            <button class="text-pink-500 text-sm font-semibold">
                                ADD TO CART 🛒
                            </button>
                        </form>
                    </div>
                </div>

            </div>
            @endforeach
        </div>
    </section>

</div>
@endsection
