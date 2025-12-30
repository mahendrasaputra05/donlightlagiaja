<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Produk;

class OrderController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | CART PAGE
    |--------------------------------------------------------------------------
    */
    public function cart()
    {
        $cart = session()->get('cart', []);
        $total = 0;

        foreach ($cart as $item) {
            $total += $item['price'] * $item['qty'];
        }

        return view('customer.cart', compact('cart', 'total'));
    }

    /*
    |--------------------------------------------------------------------------
    | ADD TO CART
    |--------------------------------------------------------------------------
    */
    public function addToCart(Request $request)
    {
        $request->validate([
            'id'    => 'required|exists:produks,id',
            'name'  => 'required',
            'price' => 'required|numeric',
        ]);

        $cart = session()->get('cart', []);
        $id = $request->id;

        if (isset($cart[$id])) {
            $cart[$id]['qty']++;
        } else {
            $cart[$id] = [
                'id'    => $id,
                'name'  => $request->name,
                'price' => $request->price,
                'qty'   => 1,
            ];
        }

        session()->put('cart', $cart);

        return redirect()
            ->route('customer.cart')
            ->with('success', 'Produk ditambahkan ke keranjang');
    }

    /*
    |--------------------------------------------------------------------------
    | REMOVE ITEM FROM CART
    |--------------------------------------------------------------------------
    */
    public function removeFromCart($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return back()->with('success', 'Produk dihapus dari keranjang');
    }

    /*
    |--------------------------------------------------------------------------
    | CHECKOUT
    |--------------------------------------------------------------------------
    */
    public function checkout()
    {
        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect()->route('customer.products')
                ->with('error', 'Keranjang masih kosong');
        }

        $total = 0;

        // CEK STOK
        foreach ($cart as $item) {
            $produk = Produk::find($item['id']);

            if (!$produk || $produk->stok < $item['qty']) {
                return back()->with(
                    'error',
                    'Stok produk "' . ($produk->nama_produk ?? '') . '" tidak mencukupi'
                );
            }

            $total += $item['price'] * $item['qty'];
        }

        // SIMPAN ORDER
        $order = Order::create([
            'user_id'      => Auth::id(),
            'total_price' => $total,
            'status'      => 'pending',
        ]);

        // SIMPAN ITEM + KURANGI STOK
        foreach ($cart as $item) {
            $produk = Produk::find($item['id']);

            OrderItem::create([
                'order_id'     => $order->id,
                'produk_id'    => $produk->id,
                'product_name' => $produk->nama_produk,
                'price'        => $item['price'],
                'qty'          => $item['qty'],
            ]);

            // 🔥 KURANGI STOK
            $produk->decrement('stok', $item['qty']);
        }

        session()->forget('cart');

        return redirect()->route('customer.dashboard')
            ->with('success', 'Order berhasil dibuat');
    }

    /*
    |--------------------------------------------------------------------------
    | RIWAYAT ORDER CUSTOMER
    |--------------------------------------------------------------------------
    */
    public function myOrders()
    {
        $orders = Order::with('items')
            ->where('user_id', Auth::id())
            ->latest()
            ->get();

        return view('customer.orders', compact('orders'));
    }

    /*
    |--------------------------------------------------------------------------
    | DETAIL ORDER CUSTOMER
    |--------------------------------------------------------------------------
    */
    public function orderDetail(Order $order)
    {
        // 🔐 SECURITY: hanya owner order
        if ($order->user_id !== Auth::id()) {
            abort(403);
        }

        $order->load('items');

        return view('customer.order-detail', compact('order'));
    }
}
