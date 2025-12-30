<h1>Tambah Kategori</h1>

<form method="POST" action="{{ route('admin.kategori.store') }}">
@csrf
<input type="text" name="nama_kategori" placeholder="Nama kategori">
<button>Simpan</button>
</form>

<a href="{{ route('admin.kategori.index') }}">Kembali</a>
