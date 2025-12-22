<h1>Order Donat 🍩</h1>

<p>Login sebagai Customer</p>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="8">
    <tr>
        <th>Nama</th>
        <th>Harga</th>
        <th>Pesan</th>
    </tr>

    @foreach($produks as $produk)
    <tr>
        <td>{{ $produk->nama_produk }}</td>
        <td>Rp {{ number_format($produk->harga) }}</td>
        <td>
            <form method="POST" action="{{ route('customer.order.store') }}">
                @csrf
                <input type="hidden" name="produk_id" value="{{ $produk->id }}">
                <input type="number" name="qty" value="1" min="1">
                <button type="submit">Pesan</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
