<h1>Edit Kategori</h1>

<form method="POST" action="{{ route('admin.kategori.update', $kategori) }}">
@csrf
@method('PUT')
<input type="text" name="nama_kategori" value="{{ $kategori->nama_kategori }}">
<button>Update</button>
</form>

<a href="{{ route('admin.kategori.index') }}">Kembali</a>
