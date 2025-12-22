<h1>Daftar Order</h1>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Total</th>
        <th>Status</th>
    </tr>
    @foreach($orders as $order)
    <tr>
        <td>{{ $order->id }}</td>
        <td>{{ $order->total }}</td>
        <td>{{ $order->status }}</td>
    </tr>
    @endforeach
</table>

<a href="{{ route('dashboard') }}">⬅ Kembali</a>
