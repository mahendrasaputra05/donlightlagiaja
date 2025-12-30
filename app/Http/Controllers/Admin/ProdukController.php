<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    // TAMPILKAN LIST PRODUK
    public function index()
    {
        $produks = Produk::all();
        return view('admin.produk.index', compact('produks'));
    }

    // FORM TAMBAH PRODUK
    public function create()
    {
        return view('admin.produk.create');
    }

    // SIMPAN PRODUK BARU
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|string',
            'harga'       => 'required|integer',
            'stok'        => 'required|integer',
        ]);

        Produk::create([
            'nama_produk' => $request->nama_produk,
            'harga'       => $request->harga,
            'stok'        => $request->stok,
        ]);

        return redirect()->route('admin.produk.index')
            ->with('success', 'Produk berhasil ditambahkan');
    }

    // FORM EDIT PRODUK
    public function edit(Produk $produk)
    {
        return view('admin.produk.edit', compact('produk'));
    }

    // UPDATE PRODUK
    public function update(Request $request, Produk $produk)
    {
        $request->validate([
            'nama_produk' => 'required|string',
            'harga'       => 'required|integer',
            'stok'        => 'required|integer',
        ]);

        $produk->update([
            'nama_produk' => $request->nama_produk,
            'harga'       => $request->harga,
            'stok'        => $request->stok,
        ]);

        return redirect()->route('admin.produk.index')
            ->with('success', 'Produk berhasil diupdate');
    }

    // HAPUS PRODUK
    public function destroy(Produk $produk)
    {
        $produk->delete();

        return redirect()->route('admin.produk.index')
            ->with('success', 'Produk berhasil dihapus');
    }
}
