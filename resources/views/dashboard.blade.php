<h1>DASHBOARD</h1>

<p>Login berhasil 🎉</p>

<ul>
    <li><a href="{{ route('produk.index') }}">Produk</a></li>
    <li><a href="{{ route('order.index') }}">Order</a></li>
</ul>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
