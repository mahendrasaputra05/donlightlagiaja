<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
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
        Transaksi::create([
            'user_id' => Auth::id(),
            'total'   => $request->total,
            'status'  => 'pending',
        ]);

        return back()->with('success', 'Order berhasil dibuat');
    }
}
