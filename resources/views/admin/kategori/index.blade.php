<h1>Data Kategori</h1>

<a href="{{ route('admin.kategori.create') }}">Tambah Kategori</a>

@if(session('success'))
<p>{{ session('success') }}</p>
@endif

<table border="1" cellpadding="8">
<tr>
    <th>No</th>
    <th>Nama Kategori</th>
    <th>Aksi</th>
</tr>
@foreach($kategoris as $kategori)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $kategori->nama_kategori }}</td>
    <td>
        <a href="{{ route('admin.kategori.edit', $kategori) }}">Edit</a>
        <form action="{{ route('admin.kategori.destroy', $kategori) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button>Hapus</button>
        </form>
    </td>
</tr>
@endforeach
</table>
