@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6">Tambah Produk</h1>

<form action="{{ route('admin.produk.store') }}" method="POST">
    @csrf

    <label>Nama Produk</label>
    <input type="text" name="nama_produk" required>

    <label>Kategori</label>
    <select name="kategori_id" required>
        <option value="">-- Pilih Kategori --</option>
        @foreach($kategoris as $kategori)
            <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
        @endforeach
    </select>

    <label>Harga</label>
    <input type="number" name="harga" required>

    <label>Stok</label>
    <input type="number" name="stok" required>

    <button type="submit">Simpan</button>
</form>