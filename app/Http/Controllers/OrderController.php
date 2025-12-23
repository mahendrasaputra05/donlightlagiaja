<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $produks = Produk::all();
        return view('customer.order', compact('produks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'produk_id' => 'required|exists:produks,id',
            'qty' => 'required|integer|min:1',
        ]);

        $produk = Produk::findOrFail($request->produk_id);
        $total  = $produk->harga * $request->qty;

        Transaksi::create([
            'user_id' => Auth::id(),
            'total'   => $total,
            'status'  => 'pending',
        ]);

        return redirect()
            ->route('customer.order.index')
            ->with('success', 'Pesanan berhasil dibuat');
    }
}
