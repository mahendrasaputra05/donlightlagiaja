<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Transaksi::with('user')->latest()->get();
        return view('admin.order.index', compact('orders'));
    }

    public function updateStatus($id)
    {
        $order = Transaksi::findOrFail($id);
        $order->status = 'selesai';
        $order->save();

        return redirect()
            ->route('admin.order.index')
            ->with('success', 'Order berhasil diselesaikan');
    }
}
