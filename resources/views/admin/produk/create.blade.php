<h1>Tambah Produk</h1>

<form action="{{ route('admin.produk.store') }}" method="POST">
    @csrf

    <label>Nama Produk</label><br>
    <input type="text" name="nama_produk" required><br><br>

    <label>Harga</label><br>
    <input type="number" name="harga" required><br><br>

    <label>Stok</label><br>
    <input type="number" name="stok" required><br><br>

    <button type="submit">Simpan</button>
</form>

<br>
<a href="{{ route('admin.produk.index') }}">Kembali</a>
