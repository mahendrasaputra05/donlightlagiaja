<h1>Order Masuk (Admin)</h1>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="8">
    <tr>
        <th>User</th>
        <th>Total</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>

    @foreach($orders as $order)
    <tr>
        <td>{{ $order->user->name }}</td>
        <td>Rp {{ number_format($order->total) }}</td>
        <td>{{ $order->status }}</td>
        <td>
            @if($order->status === 'pending')
                <form method="POST" action="{{ route('admin.order.updateStatus', $order->id) }}">
                    @csrf
                    <button type="submit">Selesaikan</button>
                </form>
            @else
                ✔ Selesai
            @endif
        </td>
    </tr>
    @endforeach
</table>

<a href="{{ route('admin.dashboard') }}">← Kembali ke Dashboard</a>
