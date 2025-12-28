@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6">Your Cart</h1>

@if(session('success'))
    <div class="mb-4 text-green-600">
        {{ session('success') }}
    </div>
@endif

@if(empty($cart))
    <p class="text-gray-500">Cart kamu masih kosong.</p>
@else
<div class="bg-white rounded-xl shadow p-6">
    @foreach($cart as $id => $item)
    <div class="flex justify-between items-center border-b py-4">
        <div>
            <h2 class="font-semibold">{{ $item['name'] }}</h2>
            <p class="text-gray-500 text-sm">
                Rp {{ number_format($item['price']) }} x {{ $item['qty'] }}
            </p>
        </div>

        <div class="flex items-center gap-4">
            <span class="font-bold">
                Rp {{ number_format($item['price'] * $item['qty']) }}
            </span>

            <form method="POST" action="{{ route('customer.cart.remove', $id) }}">
                @csrf
                <button class="text-red-500">✕</button>
            </form>
        </div>
    </div>
    @endforeach

    <div class="flex justify-between mt-6 text-lg font-bold">
        <span>Total</span>
        <span>Rp {{ number_format($total) }}</span>
    </div>

    <form method="POST" action="{{ route('customer.checkout') }}" class="mt-6">
        @csrf
        <button
            class="w-full bg-gradient-to-r from-pink-500 to-teal-400 text-white py-3 rounded-full text-lg">
            Checkout
        </button>
    </form>
</div>
@endif
@endsection
