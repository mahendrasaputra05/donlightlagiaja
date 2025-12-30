@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6">Riwayat Pesanan</h1>

<div class="space-y-4">
    @forelse($orders as $order)
        <div class="bg-white rounded-xl shadow p-4">
            <div class="flex justify-between mb-2">
                <span class="font-semibold">Order #{{ $order->id }}</span>
                <span class="text-sm text-gray-500">{{ $order->created_at->format('d M Y') }}</span>
            </div>

            <div class="text-sm mb-2">
                Status:
                <span class="font-semibold text-pink-500">{{ ucfirst($order->status) }}</span>
            </div>

            <div class="text-sm">
                Total:
                <span class="font-bold">Rp {{ number_format($order->total_price) }}</span>
            </div>
        </div>
    @empty
        <p class="text-gray-500">Belum ada pesanan.</p>
    @endforelse
</div>
@endsection
