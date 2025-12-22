<h1>Tambah Produk</h1>

<form method="POST" action="{{ route('admin.produk.store') }}">
    @csrf

    <p>Nama Produk</p>
    <input type="text" name="nama_produk">

    <p>Harga</p>
    <input type="number" name="harga">

    <p>Stok</p>
    <input type="number" name="stok">

    <br><br>
    <button type="submit">Simpan</button>
</form>

<a href="{{ route('admin.produk.index') }}">Kembali</a>
