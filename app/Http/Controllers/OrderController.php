<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Transaksi;
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
        $produk = Produk::findOrFail($request->produk_id);
        $total = $produk->harga * $request->qty;

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
