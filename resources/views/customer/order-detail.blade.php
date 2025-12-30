@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6">Detail Pesanan</h1>

<div class="bg-white p-6 rounded-xl shadow mb-6">
    <p><strong>Status:</strong> {{ ucfirst($order->status) }}</p>
    <p class="text-pink-500 font-bold">
        Total: Rp {{ number_format($order->total_price) }}
    </p>
</div>

<table class="w-full bg-white rounded-xl shadow overflow-hidden">
    <thead class="bg-gray-100">
        <tr>
            <th class="p-3 text-left">Produk</th>
            <th class="p-3 text-center">Harga</th>
            <th class="p-3 text-center">Qty</th>
            <th class="p-3 text-center">Subtotal</th>
        </tr>
    </thead>
    <tbody>
        @foreach($order->items as $item)
        <tr class="border-t">
            <td class="p-3">{{ $item->product_name }}</td>
            <td class="p-3 text-center">
                Rp {{ number_format($item->price) }}
            </td>
            <td class="p-3 text-center">{{ $item->qty }}</td>
            <td class="p-3 text-center font-semibold">
                Rp {{ number_format($item->price * $item->qty) }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('customer.orders') }}"
   class="inline-block mt-6 bg-gray-200 px-4 py-2 rounded">
   Kembali
</a>
@endsection
