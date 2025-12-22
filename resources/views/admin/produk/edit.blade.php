<h1>Edit Produk</h1>

<form method="POST" action="{{ route('admin.produk.update', $produk) }}">
    @csrf
    @method('PUT')

    <p>Nama Produk</p>
    <input type="text" name="nama_produk" value="{{ $produk->nama_produk }}">

    <p>Harga</p>
    <input type="number" name="harga" value="{{ $produk->harga }}">

    <p>Stok</p>
    <input type="number" name="stok" value="{{ $produk->stok }}">

    <br><br>
    <button type="submit">Update</button>
</form>

<a href="{{ route('admin.produk.index') }}">Kembali</a>
