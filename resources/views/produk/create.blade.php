<h1>Tambah Produk</h1>

<form method="POST" action="{{ route('produk.store') }}">
    @csrf
    <input name="nama_produk" placeholder="Nama Produk"><br>
    <input name="harga" placeholder="Harga"><br>
    <input name="stok" placeholder="Stok"><br>
    <button>Simpan</button>
</form>

<a href="{{ route('produk.index') }}">Kembali</a>
