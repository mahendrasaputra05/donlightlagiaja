<h1>Edit Produk</h1>

<form method="POST" action="{{ route('produk.update', $produk->id) }}">
    @csrf
    @method('PUT')

    <input name="nama_produk" value="{{ $produk->nama_produk }}"><br>
    <input name="harga" value="{{ $produk->harga }}"><br>
    <input name="stok" value="{{ $produk->stok }}"><br>

    <button>Update</button>
</form>

<a href="{{ route('produk.index') }}">Kembali</a>
