@extends('layouts.app')

@section('content')

{{-- HERO --}}
<div class="bg-gradient-to-r from-pink-500 to-teal-400 rounded-[32px] px-12 py-14 flex justify-between items-center text-white mb-10">

    <div class="max-w-xl">
        <span class="inline-block bg-white/25 px-4 py-1 rounded-full text-sm mb-5">
            New Flavors Available!
        </span>

        <h1 class="text-5xl font-bold leading-tight mb-6">
            Sweet Moments,<br>Delivered Fresh
        </h1>

        <p class="opacity-90 mb-8">
            Order your favorite donuts and drinks, delivered hot
            to your doorstep in 30 minutes or less!
        </p>

        <a href="{{ route('customer.products') }}"
           class="inline-block bg-white text-pink-500 font-bold px-8 py-3 rounded-full">
            ORDER NOW
        </a>
    </div>

    <img src="https://via.placeholder.com/320x260"
         class="rounded-2xl"
         alt="hero">
</div>

{{-- PROMO --}}
<div class="bg-gradient-to-r from-pink-500 to-cyan-400 rounded-[26px] px-10 py-6 flex justify-between items-center text-white mb-12">
    <div>
        <span class="inline-block bg-white/25 px-4 py-1 rounded-full text-sm mb-2">
            Limited Time Offer
        </span>
        <h2 class="text-2xl font-bold">
            Get 30% OFF on your first order!
        </h2>
    </div>

    <button class="bg-white text-pink-500 font-bold px-6 py-2 rounded-full">
        CLAIM OFFER
    </button>
</div>

{{-- CATEGORY --}}
<div>
    <h2 class="text-2xl font-bold mb-6">Shop by Category</h2>

    <div class="flex gap-8">
        <div class="w-[180px] h-[120px] rounded-[22px] bg-gradient-to-r from-pink-400 to-pink-500
                    text-white flex flex-col justify-center items-center gap-2 cursor-pointer">
            <i class="bi bi-circle text-3xl"></i>
            Donuts
        </div>

        <div class="w-[180px] h-[120px] rounded-[22px] bg-gradient-to-r from-teal-400 to-cyan-500
                    text-white flex flex-col justify-center items-center gap-2 cursor-pointer">
            <i class="bi bi-cup-straw text-3xl"></i>
            Drinks
        </div>

        <div class="w-[180px] h-[120px] rounded-[22px] bg-gradient-to-r from-purple-400 to-pink-400
                    text-white flex flex-col justify-center items-center gap-2 cursor-pointer">
            <i class="bi bi-box text-3xl"></i>
            Bundles
        </div>
    </div>
</div>

@endsection
