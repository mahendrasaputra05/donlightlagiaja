<h1>DASHBOARD ADMIN</h1>

<ul>
    <li><a href="{{ route('admin.produk.index') }}">Kelola Produk</a></li>
</ul>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
