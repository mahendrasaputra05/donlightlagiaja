<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // LIST ORDER
    public function index()
    {
        $orders = Order::with(['items', 'user'])
            ->latest()
            ->get();

        return view('admin.order.index', compact('orders'));
    }

    // UPDATE STATUS
    public function updateStatus(Request $request, Order $order)
    {
        $request->validate([
            'status' => 'required|in:pending,diproses,selesai'
        ]);

        $order->update([
            'status' => $request->status
        ]);

        return back()->with('success', 'Status order berhasil diperbarui');
    }

    public function show(Order $order)
{
    $order->load('items', 'user');
    return view('admin.order.show', compact('order'));
}

}
