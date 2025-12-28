@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6">Daftar Order</h1>

@if(session('success'))
<div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
    {{ session('success') }}
</div>
@endif

<table class="w-full bg-white rounded-xl shadow overflow-hidden">
    <thead class="bg-gray-100 text-left">
        <tr>
            <th class="p-3">User</th>
            <th class="p-3">Total</th>
            <th class="p-3">Status</th>
            <th class="p-3">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($orders as $order)
        <tr class="border-t">
            <td class="p-3">
                {{ $order->user->name ?? '-' }}
            </td>

            <td class="p-3 text-pink-500 font-semibold">
                Rp {{ number_format($order->total_price) }}
            </td>

            <td class="p-3">
                <span class="px-3 py-1 rounded-full text-sm
                    {{ $order->status == 'pending' ? 'bg-yellow-100 text-yellow-700' : '' }}
                    {{ $order->status == 'diproses' ? 'bg-blue-100 text-blue-700' : '' }}
                    {{ $order->status == 'selesai' ? 'bg-green-100 text-green-700' : '' }}
                ">
                    {{ ucfirst($order->status) }}
                </span>
            </td>

            <td class="p-3">
                <form method="POST" action="{{ route('admin.order.status', $order) }}" class="flex gap-2">
                    @csrf
                    <select name="status" class="border rounded px-2 py-1 text-sm">
                        <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="diproses" {{ $order->status == 'diproses' ? 'selected' : '' }}>Diproses</option>
                        <option value="selesai" {{ $order->status == 'selesai' ? 'selected' : '' }}>Selesai</option>
                    </select>

                    <button class="bg-pink-500 hover:bg-pink-600 text-white px-3 py-1 rounded text-sm">
                        Update
                    </button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="4" class="p-6 text-center text-gray-500">
                Belum ada order
            </td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
