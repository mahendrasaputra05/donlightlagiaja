<h1>Kelola Produk</h1>

<a href="{{ route('produk.create') }}">+ Tambah Produk</a>

@if(session('success'))
<p style="color:green">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="8">
    <tr>
        <th>Nama</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>
    @foreach($produks as $produk)
    <tr>
        <td>{{ $produk->nama_produk }}</td>
        <td>{{ $produk->harga }}</td>
        <td>{{ $produk->stok }}</td>
        <td>
            <a href="{{ route('produk.edit', $produk->id) }}">Edit</a>

            <form action="{{ route('produk.destroy', $produk->id) }}"
                  method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

<br>
<a href="{{ route('admin.dashboard') }}">⬅ Kembali Dashboard</a>
